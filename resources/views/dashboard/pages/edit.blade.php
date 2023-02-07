@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Create Page</h4></div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif

                            <form action="{{ route('pages.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $pagesList->id }}" id="menuElementId"/>
                                <table class="table table-striped table-bordered datatable">
                                    <tbody>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <td>
                                            <input type="text" name="name" class="form-control"
                                                   value="{{ $pagesList->name }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Slug
                                        </th>
                                        <td>
                                            <input type="text" name="slug" class="form-control"
                                                   value="{{ $pagesList->slug }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Url
                                        </th>
                                        <td>
                                            <input type="text" name="href" class="form-control"
                                                   value="{{ $pagesList->href }}"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Description
                                        </th>
                                        <td>
                                            <textarea id="pageDescription" type="text" name="description" class="form-control">{{ $pagesList->description }}</textarea>
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
