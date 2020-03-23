@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Send Email: {{ $template->name }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mailSend', ['id' => $template->id]) }}">
                            @csrf
                            <div class="form-group row">
                                <label>Email adress</label>
                                <input class="form-control" type="text" placeholder="Email adress" name="email" required autofocus/>
                            </div>
                            <button class="btn btn-success" type="submit">Send</button>
                            <a href="{{ route('mail.index') }}" class="btn btn-primary">Return</a> 
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
