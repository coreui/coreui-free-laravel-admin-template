@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Notification</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('notification.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Title</label>
                                <input class="form-control" type="text" placeholder="Title" name="title" required autofocus/>
                            </div>
                            <div class="form-group row">
                                <label>Message</label>
                                <textarea rows="2" class="form-control" type="text" placeholder="Message" name="message" required></textarea>
                            </div>
                            <div class="form-group row">
                                <label>Logo</label>
                                <input class="form-control" type="text" placeholder="Logo" name="logo"/>
                            </div>
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required/>
                            </div>
                            <div class="form-group row">
                                <label>URL</label>
                                <input class="form-control" type="text" placeholder="URL" name="url" required/>
                            </div>
                            <button class="btn btn-success" type="submit">Add</button>
                            <a href="{{ route('notification.index') }}" class="btn btn-primary">Return</a> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection
