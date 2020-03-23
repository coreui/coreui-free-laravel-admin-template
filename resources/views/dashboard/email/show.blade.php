@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Template: {{ $template->name }}</h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p>{{ $template->name }}</p>
                        <h4>Subject</h4>
                        <p>{{ $template->subject }}</p>
                        <h4>Content</h4>
                        <p>{{ $template->content }}</p>


                        <a href="{{ route('mail.index') }}" class="btn btn-primary">Return</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection
