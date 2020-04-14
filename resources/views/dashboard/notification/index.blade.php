@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                  <div class="card">
                    <div class="card-header">
                        Enable Notifications
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary btn-lg" id="push-button">Enable Notification</button>
                        <p id="push-info-p">Here you can enable notifications from this page</p>
                    </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        Notifications
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                </div>
                            </div>
                        @endif   
                        <div class="row"> 
                          <a href="{{ route('notification.create') }}" class="btn btn-primary m-2">Add notification</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($notifications as $notification)
                            <tr>
                              <td><strong>{{ $notification->title }}</strong></td>
                              <td>
                                <a href="{{ route('notification.show', $notification->id ) }}" class="btn btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ route('notification.edit', $notification->id ) }}" class="btn btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('notification.destroy', $notification->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $notifications->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')
  <script>
  window.vapidPublicKey =  '<?php echo env('PUBLIC_VAPID_KEY'); ?>';
  </script>
    <script src="{{ asset('js/notifications.js') }}"></script> 
@endsection