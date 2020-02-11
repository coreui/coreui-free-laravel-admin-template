@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>BREAD</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif            
                <div class="row">
                    <div class="col-12">
                        <a 
                            href="{{ route('bread.create') }}"
                            class="btn btn-primary mb-3"
                        >
                        Add new BREAD
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($forms as $form)
                                    <tr>
                                        <td>
                                            {{ $form->name }}
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('resource.index', $form->id) }}"
                                                class="btn btn-success"
                                                target="_blank"
                                            >
                                                Go to resource
                                            </a>
                                        </td>
                                        <td>
                                            <a 
                                                href="{{ route('bread.show', $form->id) }}"
                                                class="btn btn-primary"
                                            >
                                                Show
                                            </a>
                                        </td>
                                        <td>
                                            <a 
                                                href="{{ route('bread.edit', $form->id) }}"
                                                class="btn btn-primary"
                                            >
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('bread.destroy', $form->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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