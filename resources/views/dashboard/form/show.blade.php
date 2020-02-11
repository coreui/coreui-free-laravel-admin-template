@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Show BREAD "{{ $form->name }}"</h4></div>
            <div class="card-body">           
                <div class="row">
                    <div class="col-6">
                            <a 
                                href="{{ route('bread.index') }}"
                                class="btn btn-primary mb-3"
                            >
                                Return
                            </a>
                        <table class="table">
                          <tr>
                            <td>
                                Form name
                            </td>
                            <td>
                                {{ $form->name }}
                            </td>
                          </tr>
                          <tr>
                            <td>
                                Database table name
                            </td>
                            <td>
                                {{ $form->table_name }}
                            </td>
                          </tr>
                          <tr>
                            <td>
                                Records on one page of table
                            </td>
                            <td>
                                {{ $form->pagination }}
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Enable Show button in table
                            </td>
                            <td>
                                {{ $form->read }}
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Enable Edit button in table
                            </td>
                            <td>
                              {{ $form->edit }}
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Enable Add button in table
                            </td>
                            <td>
                              {{ $form->add }}
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Enable Delete button in table
                            </td>
                            <td>
                              {{ $form->delete }}
                            </td>
                          </tr>
                        </table>
                        @foreach($formFields as $field)
                            <div class="card bg-light mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $field->name }}</h5>
                                    <p>Field type:  <strong>{{ $field->type }}</strong></p>
                                    <p>Optional relation table name: <strong>{{ $field->relation_table }}</strong></p>
                                    <p>Optional column name to print in relation table: <strong>{{ $field->relation_column }}</strong></p>
                                    <p>Browse:      {{ $field->browse }}</p>
                                    <p>Read:        {{ $field->read }}</p>
                                    <p>Edit:        {{ $field->edit }}</p>
                                    <p>Add:         {{ $field->add }}</p>
                                </div>
                            </div>
                        @endforeach
                            <a 
                                href="{{ route('bread.index') }}"
                                class="btn btn-primary"
                            >
                                Return
                            </a>
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