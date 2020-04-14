@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        Notification
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                </div>
                            </div>
                         @endif


                         Lorem ipsum dolor cet emit. Emit cet dolor ipsum lorem. Dolor ipsum lorem emit cet.
                         Lorem ipsum dolor cet emit. Emit cet dolor ipsum lorem. Dolor ipsum lorem emit cet.
                         Lorem ipsum dolor cet emit. Emit cet dolor ipsum lorem. Dolor ipsum lorem emit cet.
                         Lorem ipsum dolor cet emit. Emit cet dolor ipsum lorem. Dolor ipsum lorem emit cet.
                         Lorem ipsum dolor cet emit. Emit cet dolor ipsum lorem. Dolor ipsum lorem emit cet.
                         Lorem ipsum dolor cet emit. Emit cet dolor ipsum lorem. Dolor ipsum lorem emit cet.
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

<script>
    


</script>

@endsection