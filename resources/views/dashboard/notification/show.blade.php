@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                       Notification
                    </div>
                    <div class="card-body"> 
                        <br>
                        <h4>Title:</h4>
                        <p>{{ $notification->title }}</p>
                        <h4>Message:</h4>
                        <p>{{ $notification->message }}</p>
                        <h4>Logo:</h4> 
                        <p>{{ $notification->logo }}</p>
                        <h4>Name:</h4> 
                        <p>{{ $notification->name }}</p>
                        <h4>URL: </h4>
                        <p>{{ $notification->url }}</p>
                        <a href="{{ route('notification.index') }}" class="btn btn-block btn-primary">Return</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection