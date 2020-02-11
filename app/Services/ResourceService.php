<?php
/*
    16.12.2019
    RolesService.php
*/

namespace App\Services;

use App\Models\FormField;
use App\Models\Form;
use App\Models\Models;
use App\Models\Folder;
use Illuminate\Support\Facades\DB;

class ResourceService{

    public function __construct(){

    }

    public function getMediaUrl( $mediaId ){
        $mediaFolder = Folder::where('resource', '=', 1)->first();
        $media = $mediaFolder->getMedia()->where('id', '=', $mediaId )->first();
        if(!empty($media)){
            $result = $media->getUrl();
        }else{
            $result = '';
        }
        return $result;
    }

    public function addMedia($request, $columnName){
        $result = '';
        if(isset($request[$columnName])){
            $file = $request[$columnName];
            $path = $file->path();
            $oryginalName = $file->getClientOriginalName();
            $mediaFolder = Folder::where('resource', '=', 1)->first();
            if(!empty($mediaFolder)){
                $mediaFolder->addMedia($path)->usingFileName( date('YmdHis') . $oryginalName )->usingName($oryginalName)->toMediaCollection();
                $result = DB::getPdo()->lastInsertId(); 
            }
        }
        return $result;
    }

    public function editMedia($request, $columnName, $mediaId){
        $result = null;
        $mediaFolder = Folder::where('resource', '=', 1)->first();
        $media = $mediaFolder->getMedia()->where('id', $mediaId )->first();
        if(isset($request[$columnName])){
            $file = $request[$columnName];
            $path = $file->path();
            $oryginalName = $file->getClientOriginalName();
            if(!empty($mediaFolder)){
                $mediaFolder->addMedia($path)->usingName($oryginalName)->usingFileName( date('YmdHis') . $oryginalName )->toMediaCollection();
                $result = DB::getPdo()->lastInsertId();
                $media->delete();
            }
        }
        return $result;
    }

    public function getFullIndexHeader( $id ){
        return FormField::where('form_id', '=', $id)->where('browse', '=', '1')->get();
    }

    public function getRelations( $columns ){
        $relations = array();
        $result = array();
        foreach($columns as $column){
            if(!empty($column->relation_table)){
                if(!empty($column->relation_column)){
                    $name = $column->relation_column;
                }else{
                    $name = 'name';
                }
                array_push($relations, array(
                    'table' =>  $column->relation_table,
                    'column' => $name,
                    'thisTableColumn' => $column->column_name,
                ));
            }
        }
        foreach($relations as $relation){
            $result['relation_' . $relation['thisTableColumn']] = DB::table($relation['table'])->select('id', $relation['column'] . ' AS name')->get();
        }
        return $result;
    }

    public function getIndexDatas($id){
        $form = Form::find($id);
        $formFields = FormField::where('form_id', '=', $id)->where('browse', '=', '1')->get();
        $indexes = array();
        $relations = array();
        foreach($formFields as $field){
            array_push($indexes, $field->column_name);
            if(!empty($field->relation_table)){
                array_push($relations, array(
                    'table' => $field->relation_table,
                    'column' => $field->relation_column,
                    'thisTableColumnName' => $field->column_name,
                ));
            }
        }
        $table = DB::table($form->table_name);
        if(!empty($relations)){
            $table->addSelect($form->table_name . '.*');
        }
        foreach( $relations as $relation ){
            $table->leftJoin($relation['table'], $relation['table'] . '.id', '=', $form->table_name . '.' . $relation['thisTableColumnName']);
            if(empty($relation['column'])){
                $table->addSelect($relation['table'] . '.name AS relation_' . $relation['thisTableColumnName']);
            }else{
                $table->addSelect($relation['table'] . '.' . $relation['column'] . ' AS relation_' . $relation['thisTableColumnName']);
            }
        }
        $datas = $table->paginate( $form->pagination );   /* CHANGE PAGINATE * */
        $result = array(
            'data' => array(),
            'pagination' => $datas->links(),
            'enableButtons' => array(
                'read' => $form->read,
                'edit' => $form->edit,
                'add' => $form->add,
                'delete' => $form->delete,
            )
        );
        foreach($datas as $data){
            $row = array('id' => $data->id);
            foreach($indexes as $index){
                $row[$index] = $data->$index;
            }
            foreach($relations as $relation){
                $name = 'relation_' . $relation['thisTableColumnName'];
                $row[$name] = $data->$name;
            }
            array_push($result['data'], $row);
        }
        return $result;
    }

    public function getColumnsForAdd($id){
        return FormField::where('form_id', '=', $id)->where('add', '=', '1')->get();
    }

    public function add($formId, $tableName, $request){
        $columns = $this->getColumnsForAdd($formId);
        $toInsert = array();
        foreach($columns as $column){
            if($column->type == 'checkbox' || $column->type == 'radio' || $column->type == 'relation_radio'){
                if(isset($request[$column->column_name])){
                    $toInsert[ $column->column_name ] = $request[$column->column_name];
                }else{
                    $toInsert[ $column->column_name ] = '';
                }
            }elseif( $column->type == 'file' || $column->type == 'image' ){
                $toInsert[ $column->column_name ] = $this->addMedia($request, $column->column_name);
            }else{
                $toInsert[ $column->column_name ] = $request[$column->column_name];
            }
        }
        DB::table($tableName)->insert($toInsert);
    }

    public function update($tableName, $formId, $tableId, $request){
        $toUpdate = FormField::where('form_id', '=', $formId)->where('edit', '=', '1')->get();
        $columns = DB::getSchemaBuilder()->getColumnListing( $tableName );
        $data = DB::table($tableName)->where('id', '=', $tableId)->first();
        $updateArray = array();
        foreach($columns as $column){
            if($column != 'id'){
                $flag = 'false';
                foreach($toUpdate as $update){
                    if($update->column_name == $column){
                        if($update->type == 'checkbox'){
                            $flag = 'checkbox';
                        }elseif($update->type == 'radio' || $update->type == 'relation_radio'){
                            $flag = 'radio';
                        }elseif($update->type == 'file' || $update->type == 'image'){
                            $flag = 'file';
                        }else{
                            $flag = 'true';
                        }
                        break;
                    }
                }
                if($flag != 'false'){
                    if($flag == 'checkbox'){
                        if(isset($request[$column])){
                            $updateArray[$column] = $request[$column];
                        }else{
                            $updateArray[$column] = false;
                        }
                    }elseif($flag == 'radio'){
                        if(isset($request[$column])){
                            $updateArray[$column] = $request[$column];
                        }else{
                            $updateArray[$column] = false;
                        }
                    }elseif($flag == 'file'){
                        $result = $this->editMedia($request, $column, $data->$column);
                        if($result !== null){
                            $updateArray[$column] = $result;
                        }
                    }else{
                        $updateArray[$column] = $request[$column];
                    }
                }else{
                    $updateArray[$column] = $data->$column;
                }
            }
        }
        DB::table($tableName)->where('id', '=', $tableId)->update( $updateArray );
    }

    public function show($formId, $tableName, $tableId){
        $form = Form::find($formId);
        $formFields = FormField::where('form_id', '=', $formId)->where('browse', '=', '1')->get();
        $indexes = array();
        $relations = array();
        foreach($formFields as $field){
            array_push($indexes, $field->name);
            if(!empty($field->relation_table)){
                array_push($relations, array(
                    'table' => $field->relation_table,
                    'column' => $field->relation_column,
                    'thisTableColumnName' => $field->column_name,
                ));
            }
        }
        $table = DB::table($tableName);
        if(!empty($relations)){
            $table->addSelect($form->table_name . '.*');
        }
        foreach( $relations as $relation ){
            $table->leftJoin($relation['table'], $relation['table'] . '.id', '=', $form->table_name . '.' . $relation['thisTableColumnName']);
            if(empty($relation['column'])){
                $table->addSelect($relation['table'] . '.name AS relation_' . $relation['thisTableColumnName']);
            }else{
                $table->addSelect($relation['table'] . '.' . $relation['column'] . ' AS relation_' . $relation['thisTableColumnName']);
            }
        }
        $data = $table->where($tableName . '.id', '=', $tableId)->first();  


        $result = array();
        foreach($formFields as $column){
            if($column->type == 'file' || $column->type == 'image'){
                $columnName = $column->column_name;
                $value = $this->getMediaUrl( $data->$columnName );
                array_push($result, array(
                    'name' => $column->name,
                    'value' => $value,
                    'type' => $column->type 
                ));
            }else{
                if(!empty($column->relation_table)){
                    $columnName = 'relation_' . $column->column_name; 
                }else{
                    $columnName = $column->column_name;             
                }
                array_push($result, array(
                    'name' => $column->name,
                    'value' => $data->$columnName,
                    'type' => 'default'
                )); 
            }
        }
        return $result;
    }

    public function getColumnsForEdit($tableName, $formId, $tableId){
        $columns = FormField::where('form_id', '=', $formId)->where('edit', '=', '1')->get();
        $data = DB::table($tableName)->where('id', '=', $tableId)->first();
        $result = array();
        foreach($columns as $column){
            $columnName = $column->column_name;
            if($column->type == 'file' || $column->type == 'image'){
                $value = $this->getMediaUrl( $data->$columnName );
            }else{
                $value = $data->$columnName;
            }
            array_push($result, array(
                'type' => $column->type,
                'name' => $column->name,
                'column_name' => $columnName,
                'value' => $value,
                //'relation_table' => $column->relation_table,
                //'relation_column' => $column->relation_column
            ));
        }
        return $result;
    }
}