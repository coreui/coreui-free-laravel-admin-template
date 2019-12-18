@extends('dashboard.authBase')

@section('content')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <div class="card-body p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>{{ __('Register') }}</h1>
                    <p class="text-muted">Create your account</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-user"></i>
                        </span>
                        </div>
                        <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                        </div>
                        <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-lock"></i>
                        </span>
                        </div>
                        <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="icon-lock"></i>
                        </span>
                        </div>
                        <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required>
                    </div>
                    <button class="btn btn-block btn-success" type="submit">{{ __('Register') }}</button>
                </form>
            </div>
            <div class="card-footer p-4">
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-block btn-facebook" type="button">
                    <span>facebook</span>
                  </button>
                </div>
                <div class="col-6">
                  <button class="btn btn-block btn-twitter" type="button">
                    <span>twitter</span>
                  </button>
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