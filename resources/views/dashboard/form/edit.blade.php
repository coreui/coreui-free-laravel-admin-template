@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Edit BREAD</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif 
                <form method="POST" action="{{ route('bread.update', $form->id) }}">           
                    <div class="row">
                        <div class="col-6">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Form name</label>
                                <input 
                                    type="text"
                                    name="name"
                                    placeholder="Form name"
                                    class="form-control"
                                    value="{{ $form->name }}"
                                    request
                                >
                            </div>
                            <div class="form-group">
                                <label>Records on one page of table</label>
                                <input 
                                    type="number"
                                    name="pagination"
                                    placeholder="Records on one page of table"
                                    class="form-control"
                                    value="{{ $form->pagination }}"
                                    required
                                >
                            </div>
                            <div class="form-check checkbox mt-3">
                              <input class="form-check-input" type="checkbox" value="true" name="read" 
                                @if( $form->read == 1 )
                                    checked
                                @endif
                              >
                              <label class="form-check-label">Enable Show button in table</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" type="checkbox" value="true" name="edit" 
                                @if( $form->edit == 1 )
                                    checked
                                @endif
                              >
                              <label class="form-check-label">Enable Edit button in table</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" type="checkbox" value="true" name="add" 
                                @if( $form->add == 1 )
                                    checked
                                @endif
                              >
                              <label class="form-check-label">Enable Add button in table</label>
                            </div>
                            <div class="form-check checkbox mb-3">
                              <input class="form-check-input" type="checkbox" value="true" name="delete" 
                                @if( $form->delete == 1 )
                                    checked
                                @endif
                              >
                              <label class="form-check-label">Enable Delete button in table</label>
                            </div>
                        
                        </div>
                        <div class="col-6">
                            <div class="card border-primary">
                                <div class="card-header">
                                    <h4>Assign to roles:</h4>
                                </div>
                                <div class="card-body">
                                    @foreach($roles as $role)
                                        <div class="form-check checkbox mt-3">
                                            <?php
                                                $flag = false;
                                                foreach($formRoles as $formRole){
                                                    if($formRole == $role){
                                                        $flag = true;
                                                        break;
                                                    }
                                                }
                                                if($flag === true){
                                                    echo '<input class="form-check-input" type="checkbox" value="true" name="_role_' . $role . '" checked>';
                                                    echo '<label class="form-check-label">' . $role . '</label>';
                                                }else{
                                                    echo '<input class="form-check-input" type="checkbox" value="true" name="_role_' . $role . '">';
                                                    echo '<label class="form-check-label">' . $role . '</label>';
                                                }
                                            ?>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            @foreach($formFields as $field)
                                    <div class="card bg-light mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $field->column_name }}</h5>
                                            <label>Visible name</label>
                                            <input 
                                                class="form-control" 
                                                name="{{ $field->id }}_name" 
                                                type="text" 
                                                value="{{ $field->name }}" 
                                                placeholder="Visible name"
                                            >
                                            <label>Field type</label>
                                            <select class="form-control" name="{{ $field->id }}_field_type">
                                                @foreach($options as $option)
                                                    @if($option['value'] == $field->type)
                                                        <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
                                                    @else
                                                        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <label>Optional relation table name</label>
                                            <input 
                                                class="form-control" 
                                                name="{{ $field->id }}_relation_table" 
                                                type="text" 
                                                placeholder="Optional relation table name"
                                                value="{{ $field->relation_table }}"
                                            >
                                            <label>Optional column name in relation table - to print</label>
                                            <input 
                                                class="form-control" 
                                                name="{{ $field->id }}_relation_column" 
                                                type="text" 
                                                placeholder="Optional column name in relation table - to print"
                                                value="{{ $field->relation_column }}"
                                            >
                                            <div class="form-check checkbox">
                                                @if($field->browse == 1)
                                                    <input checked class="form-check-input" name="{{ $field->id }}_browse" type="checkbox" value="true">
                                                @else
                                                    <input class="form-check-input" name="{{ $field->id }}_browse" type="checkbox" value="true">
                                                @endif
                                                <label class="form-check-label">Browse</label>
                                            </div>
                                            <div class="form-check checkbox">
                                                @if($field->read == 1)
                                                    <input checked class="form-check-input" name="{{ $field->id }}_read" type="checkbox" value="true">
                                                @else
                                                    <input class="form-check-input" name="{{ $field->id }}_read" type="checkbox" value="true">
                                                @endif
                                                <label class="form-check-label">Read</label>
                                            </div>
                                            <div class="form-check checkbox">
                                                @if($field->edit == 1)
                                                    <input checked class="form-check-input" name="{{ $field->id }}_edit" type="checkbox" value="true">
                                                @else
                                                    <input class="form-check-input" name="{{ $field->id }}_edit" type="checkbox" value="true">
                                                @endif
                                                <label class="form-check-label">Edit</label>
                                            </div>
                                            <div class="form-check checkbox">
                                                @if($field->add == 1)
                                                    <input checked class="form-check-input" name="{{ $field->id }}_add" type="checkbox" value="true">
                                                @else
                                                    <input class="form-check-input" name="{{ $field->id }}_add" type="checkbox" value="true">
                                                @endif
                                                <label class="form-check-label">Add</label>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Save
                            </button>
                            <a 
                                href="{{ route('bread.index') }}"
                                class="btn btn-primary"
                            >
                                Return
                            </a>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')


@endsection