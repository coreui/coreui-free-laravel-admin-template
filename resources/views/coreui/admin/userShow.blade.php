@extends('coreui.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
              <div class="card-header">
                User  
              </div>
              <div class="card-body">
                <div class="row">
                    <form method="POST" action="{{ route('logout') }}"> @csrf<button class="btn btn-block btn-primary">Logout</button></form> 
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Users List</a>
                </div>
                <div class="row">
                  <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> User {{ $user->name }}</div>
                    <div class="card-body">

                        <h3>{{ $user->name }}</h3>
                        <h3>{{ $user->email }}</h3>
                        <h3>{{ $user->email_verified_at }}</h3>
                        <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

@endsection


@section('javascript')

@endsection