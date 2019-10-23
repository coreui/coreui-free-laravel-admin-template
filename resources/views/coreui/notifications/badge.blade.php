@extends('coreui.base')

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header"> Bootstrap Badges
                      <div class="card-header-actions"><a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-badge/" target="_blank"><small class="text-muted">docs</small></a></div>
                    </div>
                    <div class="card-body">
                      <h1>Example heading<span class="badge badge-secondary">New</span></h1>
                      <h2>Example heading<span class="badge badge-secondary">New</span></h2>
                      <h3>Example heading<span class="badge badge-secondary">New</span></h3>
                      <h4>Example heading<span class="badge badge-secondary">New</span></h4>
                      <h5>Example heading<span class="badge badge-secondary">New</span></h5>
                      <h6>Example heading<span class="badge badge-secondary">New</span></h6>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary" type="link">Notifications<span class="badge badge-light badge-pill" style="position: static;">9</span></button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header"> Bootstrap Badges<small>contextual variations</small></div>
                    <div class="card-body"><span class="badge badge-primary">Primary</span><span class="badge badge-secondary">Secondary</span><span class="badge badge-success">Success</span><span class="badge badge-danger">Danger</span><span class="badge badge-warning">Warning</span><span class="badge badge-info">Info</span><span class="badge badge-light">Light</span><span class="badge badge-dark">Dark</span></div>
                  </div>
                  <div class="card">
                    <div class="card-header"> Bootstrap Badges<small>pill badges</small></div>
                    <div class="card-body"><span class="badge badge-pill badge-primary">Primary</span><span class="badge badge-pill badge-secondary">Secondary</span><span class="badge badge-pill badge-success">Success</span><span class="badge badge-pill badge-danger">Danger</span><span class="badge badge-pill badge-warning">Warning</span><span class="badge badge-pill badge-info">Info</span><span class="badge badge-pill badge-light">Light</span><span class="badge badge-pill badge-dark">Dark</span></div>
                  </div>
                  <div class="card">
                    <div class="card-header"> Bootstrap Badges<small>links</small></div>
                    <div class="card-body"><a class="badge badge-primary" href="#">Primary</a><a class="badge badge-secondary" href="#">Secondary</a><a class="badge badge-success" href="#">Success</a><a class="badge badge-danger" href="#">Danger</a><a class="badge badge-warning" href="#">Warning</a><a class="badge badge-info" href="#">Info</a><a class="badge badge-light" href="#">Light</a><a class="badge badge-dark" href="#">Dark</a></div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
            </div>
          </div>

@endsection

@section('javascript')

@endsection