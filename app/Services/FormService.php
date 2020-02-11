<?php
/*
    16.12.2019
    RolesService.php
*/

namespace App\Services;

use App\Models\FormField;
use App\Models\Form;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class FormService{

    public function __construct(){

    }

    public function saveSingleFormData($slug, $request, $formId){

        $formField = new FormField();
        $formField->name = $request[$slug . '_name'];
        $formField->type = $request[$slug . '_field_type'];
        if(isset( $request[$slug . '_browse'] )){
            $formField->browse = 1;
        }else{
            $formField->browse = 0;
        }
        if(isset( $request[$slug . '_read'] )){
            $formField->read = 1;
        }else{
            $formField->read = 0;
        }
        if(isset( $request[$slug . '_edit'] )){
            $formField->edit = 1;
        }else{
            $formField->edit = 0;
        }
        if(isset( $request[$slug . '_add'] )){
            $formField->add = 1;
        }else{
            $formField->add = 0;
        }
        if(isset( $request[$slug . '_relation_table'] )){
            $formField->relation_table = $request[$slug . '_relation_table'];
        }
        if(isset( $request[$slug . '_relation_column'] )){
            $formField->relation_column = $request[$slug . '_relation_column'];
        }
        $formField->form_id = $formId;
        $formField->column_name = $slug;
        $formField->save();  
    }

    public function updateSingleFormField($field, $request){
        $field->name = $request[$field->id . '_name'];
        $field->type = $request[$field->id . '_field_type'];
        if(isset($request[$field->id . '_browse'])){
            $field->browse = 1;
        }else{
            $field->browse = 0;
        }
        if(isset($request[$field->id . '_read'])){
            $field->read = 1;
        }else{
            $field->read = 0;
        }
        if(isset($request[$field->id . '_edit'])){
            $field->edit = 1;
        }else{
            $field->edit = 0;
        }
        if(isset($request[$field->id . '_add'])){
            $field->add = 1;
        }else{
            $field->add = 0;
        }
        if(isset($request[$field->id . '_relation_table'])){
            $field->relation_table = $request[$field->id . '_relation_table'];
        }
        if(isset($request[$field->id . '_relation_column'])){
            $field->relation_column = $request[$field->id . '_relation_column'];
        }
        $field->save();
    }

    public function updateForm($formId, $request){
        $form = Form::find($formId);
        $form->name = $request['name'];
        $form->pagination = $request['pagination'];
        if(isset($request['read'])){
            $form->read = true;
        }else{
            $form->read = false;
        }
        if(isset($request['edit'])){
            $form->edit = true;
        }else{
            $form->edit = false;
        }
        if(isset($request['add'])){
            $form->add = true;
        }else{
            $form->add = false;
        }
        if(isset($request['delete'])){
            $form->delete = true;
        }else{
            $form->delete = false;
        }
        $form->save();
        $formFields = FormField::where('form_id', '=', $formId)->get();
        foreach($formFields as $field){
            $this->updateSingleFormField($field, $request);
        }
        $this->revokeAllPermisions( $form->id, $request );
        $this->givePermissions( $form->id, $request );
    }

    public function addNewForm( $model, $request ){
        $form = new Form();
        $form->name = $request['name'];
        $form->pagination = $request['pagination'];
        $form->table_name = $model;
        if(isset($request['read'])){
            $form->read = true;
        }else{
            $form->read = false;
        }
        if(isset($request['edit'])){
            $form->edit = true;
        }else{
            $form->edit = false;
        }
        if(isset($request['add'])){
            $form->add = true;
        }else{
            $form->add = false;
        }
        if(isset($request['delete'])){
            $form->delete = true;
        }else{
            $form->delete = false;
        }
        $form->save();
        $formDatas = $this->getFormDataByModel( $model );
        foreach($formDatas as $formData){
            if($formData != 'id'){
                $this->saveSingleFormData($formData, $request, $form->id);
            }
        }
        $this->givePermissions( $form->id, $request );
    }

    public function getBreadRoles( $formId ){
        $result = array();
        $roles = Role::all();
        foreach($roles as $role){
            if($role->hasPermissionTo('browse bread ' . $formId)){
                array_push($result, $role->name);
            }
        }
        return $result;
    }


    public function createPermissions( $formId ){
        $permission = Permission::where('name', '=', 'browse bread ' . $formId)->first();
        if(empty($permission)){
            Permission::create(['name' => 'browse bread ' . $formId]); 
        }
        $permission = Permission::where('name', '=', 'read bread ' . $formId)->first();
        if(empty($permission)){
            Permission::create(['name' => 'read bread ' . $formId]);
        }
        $permission = Permission::where('name', '=', 'edit bread ' . $formId)->first();
        if(empty($permission)){
            Permission::create(['name' => 'edit bread ' . $formId]); 
        }
        $permission = Permission::where('name', '=', 'add bread ' . $formId)->first();
        if(empty($permission)){
            Permission::create(['name' => 'add bread ' . $formId]);
        }
        $permission = Permission::where('name', '=', 'delete bread ' . $formId)->first();
        if(empty($permission)){
            Permission::create(['name' => 'delete bread ' . $formId]); 
        }
    }

    public function givePermissions( $formId, $request){
        $this->createPermissions( $formId );
        $assign = array();
        $roles = Role::all();
        foreach($roles as $role){
            if(isset($request[ '_role_' . $role->name ])){
                $role->givePermissionTo('browse bread ' . $formId);
                if(isset($request['read'])){
                    $role->givePermissionTo('read bread ' . $formId);
                }
                if(isset($request['edit'])){
                    $role->givePermissionTo('edit bread ' . $formId);
                }
                if(isset($request['add'])){
                    $role->givePermissionTo('add bread ' . $formId);
                }
                if(isset($request['delete'])){ 
                    $role->givePermissionTo('delete bread ' . $formId);
                }
            }
        }
    }

    public function revokeAllPermisions( $formId, $request){
        $assign = array();
        $roles = Role::all();
        foreach($roles as $role){
            $permission = Permission::where('name', '=', 'browse bread ' . $formId)->first();
            if(!empty($permission)){
                $permission->removeRole($role);
            }
            $permission = Permission::where('name', '=', 'read bread ' . $formId)->first();
            if(!empty($permission)){
                $permission->removeRole($role);
            }
            $permission = Permission::where('name', '=', 'edit bread ' . $formId)->first();
            if(!empty($permission)){
                $permission->removeRole($role);
            }
            $permission = Permission::where('name', '=', 'add bread ' . $formId)->first();
            if(!empty($permission)){
                $permission->removeRole($role);
            }
            $permission = Permission::where('name', '=', 'delete bread ' . $formId)->first();
            if(!empty($permission)){
                $permission->removeRole($role);
            }
        }
    }

    public function getFormDataByModel( $model ){
        $columns = DB::getSchemaBuilder()->getColumnListing( $model );
        return $columns;
    }


    /** PRZERZUCIĆ TO DO INNEGO PLIKU */
    public function getFromOptionsStandardInput(){
        return array(
            array(
                'value'=> 'checkbox',
                'name'=> 'checkbox'
            ),
            array(
                'value'=> 'color',
                'name' => 'color'
            ),
            array(
                'value'=> 'date',
                'name' => 'date'
            ),
            array(
                'value'=> 'datetime-local',
                'name' => 'datetime-local'
            ),
            array(
                'value'=> 'email',
                'name' => 'email'
            ),
            array(
                'value'=> 'hidden',
                'name' => 'hidden'
            ),
            array(
                'value'=> 'month',
                'name' => 'month'
            ),
            array(
                'value'=> 'number',
                'name' => 'number'
            ),
            array(
                'value'=> 'password',
                'name' => 'password'
            ),
            array(
                'value'=> 'radio',
                'name' => 'radio'
            ),
            array(
                'value'=> 'range',
                'name' => 'range'
            ),
            array(
                'value'=> 'reset',
                'name' => 'reset'
            ),
            array(
                'value'=> 'search',
                'name' => 'search'
            ),
            array(
                'value'=> 'tel',
                'name' => 'tel'
            ),
            array(
                'value'=> 'text',
                'name' => 'text'
            ),
            array(
                'value'=> 'time',
                'name' => 'time'
            ),
            array(
                'value'=> 'url',
                'name' => 'url'
            ),
            array(
                'value'=> 'week',
                'name' => 'week'
            ),
        );
    }


    public function getFormOptions(){
        $otherOptions = array(
            array(
                'value' => 'text_area',
                'name' => 'text area'
            ),
            array(
                'value'=> 'relation_select',
                'name' => 'relation select'
            ),
            array(
                'value'=> 'relation_radio',
                'name' => 'relation radio'
            ),
            array(
                'value' => 'file',
                'name' => 'file'
            ),
            array(
                'value' => 'image',
                'name' => 'image'
            )
        );
        return array_merge( $this->getFromOptionsStandardInput(), $otherOptions);
    }
}