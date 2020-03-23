@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Template</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mail.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" required autofocus/>
                            </div>
                            <div class="form-group row">
                                <label>Subject</label>
                                <input class="form-control" type="text" placeholder="Subject" name="subject" required/>
                            </div>
                            <div class="form-group row">
                                <label>Content</label>
                                <textarea class="form-control" name="content" rows="20" placeholder="Content" required>
                                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="x-apple-disable-message-reformatting">
    <title>Example</title>
    <style>
        body {
            background-color:#fff;
            color:#222222;
            margin: 0px auto;
            padding: 0px;
            height: 100%;
            width: 100%;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
        }
        .continer{
            width:400px;
            margin-left:auto;
            margin-right:auto;
            background-color:#efefef;
            padding:30px;
        }
        .btn{
            padding: 5px 15px;
            display: inline-block;
        }
        .btn-primary{
            border-radius: 3px;
            background: #0b3c7c;
            color: #fff;
            text-decoration: none;
        }
        .btn-primary:hover{
            border-radius: 3px;
            background: #4673ad;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="continer">
        <h1>Lorem ipsum dolor</h1>
        <h4>Ipsum dolor cet emit amet</h4>
        <p>
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <strong>commodo consequat</strong>. 
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
             Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <h4>Ipsum dolor cet emit amet</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <a href="#">tempor incididunt ut labore</a> et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </p>
        <h4>Ipsum dolor cet emit amet</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </p>
        <a href="#" class="btn btn-primary">Lorem ipsum dolor</a>
        <h4>Ipsum dolor cet emit amet</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation <a href="#">ullamco</a> laboris nisi ut aliquip ex ea commodo consequat. 
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
             Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
</body>
</html>
                                </textarea>
                            </div>
                            <button class="btn btn-success" type="submit">Add</button>
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
