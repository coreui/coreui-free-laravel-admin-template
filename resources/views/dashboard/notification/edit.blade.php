@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      Edit Notification</div>
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
                        <form method="POST" action="{{ route('notification.update', $notification->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col">
                                    <label>Title</label>
                                    <input class="form-control" type="text" placeholder="Title" name="title" value="{{ $notification->title }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Message</label>
                                    <textarea class="form-control" name="message" rows="2" placeholder="Message" required>{{ $notification->message }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Logo</label>
                                    <input type="text" class="form-control" name="logo" placeholder="Logo" value="{{ $notification->logo }}"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Name" name="name" value="{{ $notification->name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>URL</label>
                                    <input class="form-control" type="text" placeholder="URL" name="url" value="{{ $notification->url }}" required>
                                </div>
                            </div>
 
                            <button class="btn btn-success" type="submit">Save</button>
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