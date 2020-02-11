@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Create BREAD</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif  

                <form method="POST" action="{{ route('bread.store') }}">
                    @csrf
                    <input name="marker" value="createForm" type="hidden">
                    <input type="hidden" name="model" value="{{ $model }}"> 

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Form name</label>
                                <input 
                                    type="text"
                                    name="name"
                                    placeholder="Form name"
                                    class="form-control"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label>Records on one page of table</label>
                                <input 
                                    type="number"
                                    name="pagination"
                                    placeholder="Records on one page of table"
                                    class="form-control"
                                    value="10"
                                    required
                                >
                            </div>
                            <div class="form-check checkbox mt-3">
                              <input class="form-check-input" type="checkbox" value="true" name="read" checked>
                              <label class="form-check-label">Enable Show button in table</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" type="checkbox" value="true" name="edit" checked>
                              <label class="form-check-label">Enable Edit button in table</label>
                            </div>
                            <div class="form-check checkbox">
                              <input class="form-check-input" type="checkbox" value="true" name="add" checked>
                              <label class="form-check-label">Enable Add button in table</label>
                            </div>
                            <div class="form-check checkbox mb-3">
                              <input class="form-check-input" type="checkbox" value="true" name="delete" checked>
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
                                        <input class="form-check-input" type="checkbox" value="true" name="_role_{{ $role }}" checked>
                                        <label class="form-check-label">{{ $role }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                            @foreach($columns as $column)
                                @if($column != 'id')
                                    <div class="card bg-light mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $column }}</h5>
                                            <label>Visible name</label>
                                            <input 
                                                class="form-control" 
                                                name="{{ $column }}_name" 
                                                type="text" 
                                                value="{{ $column }}" 
                                                placeholder="Visible name"
                                            >
                                            <label>Field type</label>
                                            <select class="form-control" name="{{ $column }}_field_type">
                                                @foreach($options as $option)
                                                    <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <label>Optional relation table name</label>
                                            <input 
                                                class="form-control" 
                                                name="{{ $column }}_relation_table" 
                                                type="text" 
                                                placeholder="Optional relation table name"
                                            >
                                            <label>Optional column name in relation table - to print</label>
                                            <input 
                                                class="form-control" 
                                                name="{{ $column }}_relation_column" 
                                                type="text" 
                                                placeholder="Optional column name in relation table - to print"
                                            >
                                            <div class="form-check checkbox">
                                                <input class="form-check-input" name="{{ $column }}_browse" type="checkbox" value="true">
                                                <label class="form-check-label">Browse</label>
                                            </div>
                                            <div class="form-check checkbox">
                                                <input class="form-check-input" name="{{ $column }}_read" type="checkbox" value="true">
                                                <label class="form-check-label">Read</label>
                                            </div>
                                            <div class="form-check checkbox">
                                                <input class="form-check-input" name="{{ $column }}_edit" type="checkbox" value="true">
                                                <label class="form-check-label">Edit</label>
                                            </div>
                                            <div class="form-check checkbox">
                                                <input class="form-check-input" name="{{ $column }}_add" type="checkbox" value="true">
                                                <label class="form-check-label">Add</label>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Save
                            </button>
                            <a 
                                href="{{ route('bread.create') }}"
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