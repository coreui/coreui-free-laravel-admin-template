@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                @if(Session::has('title'))
                <h4>{{ Session::get('title') }}</h4>
                @endif
            </div>
            <div class="card-body">

                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @else
                    <div class="alert alert-success" role="alert">Success</div>
                @endif
                
                @if(Session::has('back'))
                    @if(Session::has('backParams'))
                        <a href="{{ route( Session::get('back'), Session::get('backParams') ) }}" class="btn btn-lg btn-primary">Return</a>
                    @else
                        <a href="{{ route( Session::get('back') ) }}" class="btn btn-lg btn-primary">Return</a>
                    @endif
                @endif

            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')


@endsection