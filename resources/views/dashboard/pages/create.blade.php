@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Create page</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <form action="{{ route('pages.store') }}" method="POST">
                    @csrf
                    <table class="table table-striped table-bordered datatable">
                        <tbody>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    <input type="text" class="form-control" name="name" placeholder="Name"/>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Slug
                                </th>
                                <td>
                                    <input type="text" class="form-control" name="slug" placeholder="Slug"/>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Url
                                </th>
                                <td>
                                    <input type="text" class="form-control" name="href" placeholder="Url"/>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Description
                                </th>
                                <td>
                                    <textarea id="pageDescription" type="text" class="form-control" name="description" placeholder="Description"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a class="btn btn-primary" href="{{ route('pages.index') }}">Return</a>
                </form>
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
