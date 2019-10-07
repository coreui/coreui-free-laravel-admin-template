@extends('coreui.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
              <div class="card-header">
                Edit user  
              </div>
              <div class="card-body">
                <div class="row">
                    <form method="POST" action="{{ route('logout') }}"> @csrf<button class="btn btn-block btn-primary">Logout</button></form>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Users List</a> 
                </div>
                <div class="row">
                  <div class="card">
                    <div class="card-header">
                       Edit {{ $user->name }}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/users/{{ $user->id }}">
                            @csrf
                            @method('PUT')
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ $user->email }}" required>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Edit') }}</button>
                            <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
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