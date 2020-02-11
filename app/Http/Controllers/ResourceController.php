<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models;
use Illuminate\Support\Facades\DB;
use App\Services\ResourceService;
use App\Services\FormService;
use App\Models\Form;
use App\Models\FormField;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($table, Request $request)
    {
        $role = Role::where('name', '=', 'guest')->first();
        if(!$role->hasPermissionTo('browse bread ' . $table)){
            if(empty(Auth::user())){
                abort('401');
            }else{
                if(!Auth::user()->can('browse bread ' . $table)){
                    abort('401');
                }
            }
        }
        $form = Form::find( $table );
        $resourceService = new ResourceService();
        $data = $resourceService->getIndexDatas( $table );
        return view('dashboard.resource.index', [
            'form' => $form,
            'header' => $resourceService->getFullIndexHeader( $table ),
            'datas' => $data['data'],
            'pagination' => $data['pagination'],
            'enableButtons' => $data['enableButtons']
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($table, Request $request)
    {
        $role = Role::where('name', '=', 'guest')->first();
        if(!$role->hasPermissionTo('add bread ' . $table)){
            if(empty(Auth::user())){
                abort('401');
            }else{
                if(!Auth::user()->can('add bread ' . $table)){
                    abort('401');
                }
            }
        }
        $form = Form::find( $table );
        if($form->add == 1){
            $resourceService = new ResourceService();
            $formService = new FormService();
            $columns = $resourceService->getColumnsForAdd( $table );
            
            return view('dashboard.resource.create', [
                'form' => $form,
                'columns' => $columns,
                'relations' => $resourceService->getRelations( $columns ),
                'inputOptions' => $formService->getFromOptionsStandardInput(),
            ]);
        }else{
            $request->session()->flash('message', 'Add to table is not enable');
            return redirect()->route('resource.index', $table );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($table, Request $request)
    {
        $role = Role::where('name', '=', 'guest')->first();
        if(!$role->hasPermissionTo('add bread ' . $table)){
            if(empty(Auth::user())){
                abort('401');
            }else{
                if(!Auth::user()->can('add bread ' . $table)){
                    abort('401');
                }
            }
        }
        $toValidate = array();
        $form = Form::find( $table );
        $formFields = FormField::where('form_id', '=', $table)->where('add', '=', '1')->get();
        foreach($formFields as $formField){
            $toValidate[$formField->column_name] = 'required';
        }
        $request->validate($toValidate);
        if($form->add == 1){
            $resourceService = new ResourceService();
            $resourceService->add($form->id, $form->table_name, $request->all() );
            $request->session()->flash('message', 'Successfully added to ' . $form->name);
            return redirect()->route('resource.index', $table );
        }else{
            $request->session()->flash('message', 'Add to table is not enable');
            return redirect()->route('resource.index', $table );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($table, $id)
    {
        $role = Role::where('name', '=', 'guest')->first();
        if(!$role->hasPermissionTo('read bread ' . $table)){
            if(empty(Auth::user())){
                abort('401');
            }else{
                if(!Auth::user()->can('read bread ' . $table)){
                    abort('401');
                }
            }
        }
        $form = Form::find( $table );
        if($form->read == 1){
            $resourceService = new ResourceService();
            return view('dashboard.resource.show', [
                'form' => $form,
                'columns' => $resourceService->show($form->id, $form->table_name, $id),
            ]);
        }else{
            $request->session()->flash('message', 'Read this table is not enable');
            return redirect()->route('resource.index', $table );
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($table, $id)
    {
        $role = Role::where('name', '=', 'guest')->first();
        if(!$role->hasPermissionTo('edit bread ' . $table)){
            if(empty(Auth::user())){
                abort('401');
            }else{
                if(!Auth::user()->can('edit bread ' . $table)){
                    abort('401');
                }
            }
        }
        $form = Form::find( $table );
        if($form->edit == 1){
            $resourceService = new ResourceService();
            $formService = new FormService();
            return view('dashboard.resource.edit', [
                'form' => $form,
                'columns' => $resourceService->getColumnsForEdit( $form->table_name, $table, $id ),
                'relations' => $resourceService->getRelations( FormField::where('form_id', '=', $table)->where('edit', '=', '1')->get()),
                'inputOptions' => $formService->getFromOptionsStandardInput(),
                'id' => $id,
            ]);
        }else{
            $request->session()->flash('message', 'Edit table is not enable');
            return redirect()->route('resource.index', $table );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($table, $id, Request $request)
    {
        $role = Role::where('name', '=', 'guest')->first();
        if(!$role->hasPermissionTo('edit bread ' . $table)){
            if(empty(Auth::user())){
                abort('401');
            }else{
                if(!Auth::user()->can('edit bread ' . $table)){
                    abort('401');
                }
            }
        }
        $toValidate = array();
        $form = Form::find( $table );
        $formFields = FormField::where('form_id', '=', $table)->where('add', '=', '1')->get();
        foreach($formFields as $formField){
            $toValidate[$formField->column_name] = 'required';
        }
        $request->validate($toValidate);
        if($form->edit == 1){
            $resourceService = new ResourceService();
            $resourceService->update($form->table_name, $table, $id, $request->all() );
            $request->session()->flash('message', 'Successfully edited ' . $form->name);
            return redirect()->route('resource.index', $table );
        }else{
            $request->session()->flash('message', 'Edit table is not enable');
            return redirect()->route('resource.index', $table );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($table, Request $request, $id)
    {
        $role = Role::where('name', '=', 'guest')->first();
        if(!$role->hasPermissionTo('delete bread ' . $table)){
            if(empty(Auth::user())){
                abort('401');
            }else{
                if(!Auth::user()->can('delete bread ' . $table)){
                    abort('401');
                }
            }
        }
        $form = Form::find( $table );
        if($form->delete == 1){
            if($request->has('marker')){
                DB::table($form->table_name)->where('id', '=', $id)->delete();
                $request->session()->flash('message', 'Successfully deleted element from: ' . $form->name);
                return redirect()->route('resource.index', $table);
            }else{
                return view('dashboard.resource.delete', ['table' => $table, 'id' => $id, 'formName' => $form->name]);
            }
        }else{
            $request->session()->flash('message', 'Delete object from table is not enable');
            return redirect()->route('resource.index', $table );
        }
    }
}
