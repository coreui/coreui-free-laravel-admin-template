@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Pages List</h4></div>
            <div class="card-body">
                <div class="row mb-3 ml-3">
                    <a class="btn btn-lg btn-primary" href="{{ route('pages.create') }}">Add new page</a>
                </div>
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Show Action</th>
                            <th>Edit Action</th>
                            <th>Delete Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pagesList as $page)
                            <tr>
                                <td>
                                    {{ $page->name }}
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('pages.index', ['page' => $page->id] ) }}">Show</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('pages.edit', ['id' => $page->id] ) }}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('pages.delete', ['id' => $page->id] ) }}">Delete</a>
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

@endsection

@section('javascript')

@endsection
