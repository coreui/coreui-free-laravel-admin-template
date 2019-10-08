@extends('coreui.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="text-value">89.9%</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-xs my-2">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="text-value">12.124</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-xs my-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="text-value">$98.111,00</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-xs my-2">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="text-value">2 TB</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-xs my-2">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body">
                    <div class="text-value">89.9%</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-white progress-xs my-2">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body">
                    <div class="text-value">12.124</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-white progress-xs my-2">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body">
                    <div class="text-value">$98.111,00</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-white progress-xs my-2">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  <div class="card-body">
                    <div class="text-value">2 TB</div>
                    <div>Lorem ipsum...</div>
                    <div class="progress progress-white progress-xs my-2">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">Lorem ipsum dolor sit amet enim.</small>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                    <div class="text-value-lg py-3">1,123</div>
                    <div class="chart-wrapper mx-auto" style="height:40px;width:80px">
                      <canvas class="chart chart-bar" id="sparkline-chart-1" height="40" width="80"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-md-2 col-sm-4">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                    <div class="text-value-lg py-3">1,123</div>
                    <div class="chart-wrapper mx-auto" style="height:40px;width:80px">
                      <canvas class="chart chart-bar" id="sparkline-chart-2" height="40" width="80"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-md-2 col-sm-4">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                    <div class="text-value-lg py-3">1,123</div>
                    <div class="chart-wrapper mx-auto" style="height:40px;width:80px">
                      <canvas class="chart chart-bar" id="sparkline-chart-3" height="40" width="80"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-md-2 col-sm-4">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                    <div class="text-value-lg py-3">1,123</div>
                    <div class="chart-wrapper mx-auto" style="height:40px;width:80px">
                      <canvas class="chart chart-line" id="sparkline-chart-4" height="40" width="100"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-md-2 col-sm-4">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                    <div class="text-value-lg py-3">1,123</div>
                    <div class="chart-wrapper mx-auto" style="height:40px;width:80px">
                      <canvas class="chart chart-line" id="sparkline-chart-5" height="40" width="100"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-md-2 col-sm-4">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="text-muted small text-uppercase font-weight-bold">Title</div>
                    <div class="text-value-lg py-3">1,123</div>
                    <div class="chart-wrapper mx-auto" style="height:40px;width:80px">
                      <canvas class="chart chart-line" id="sparkline-chart-6" height="40" width="100"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-cogs bg-primary p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-primary">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-laptop bg-info p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-info">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-warning">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-bell bg-danger p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-danger">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-cogs bg-primary p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-primary">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                  <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
                      <span class="small font-weight-bold">View More</span>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-laptop bg-info p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-info">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                  <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
                      <span class="small font-weight-bold">View More</span>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-warning">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                  <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
                      <span class="small font-weight-bold">View More</span>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-3 d-flex align-items-center">
                    <i class="fa fa-bell bg-danger p-3 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-danger">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                  <div class="card-footer px-3 py-2">
                    <a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#">
                      <span class="small font-weight-bold">View More</span>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-cogs bg-primary p-4 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-primary">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-laptop bg-info p-4 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-info">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-moon-o bg-warning p-4 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-warning">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-bell bg-danger p-4 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-danger">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-cogs bg-primary p-4 px-5 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-primary">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-laptop bg-info p-4 px-5 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-info">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-moon-o bg-warning p-4 px-5 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-warning">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-0 d-flex align-items-center">
                    <i class="fa fa-bell bg-danger p-4 px-5 font-2xl mr-3"></i>
                    <div>
                      <div class="text-value-sm text-danger">$1.999,50</div>
                      <div class="text-muted text-uppercase font-weight-bold small">Income</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-facebook">
                    <i class="fa fa-facebook"></i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-1" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">89k</div>
                      <div class="text-uppercase text-muted small">friends</div>
                    </div>
                    <div>
                      <div class="text-value">459</div>
                      <div class="text-uppercase text-muted small">feeds</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-twitter">
                    <i class="fa fa-twitter"></i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-2" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">973k</div>
                      <div class="text-uppercase text-muted small">followers</div>
                    </div>
                    <div>
                      <div class="text-value">1.792</div>
                      <div class="text-uppercase text-muted small">tweets</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-linkedin">
                    <i class="fa fa-linkedin"></i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-3" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">500+</div>
                      <div class="text-uppercase text-muted small">contacts</div>
                    </div>
                    <div>
                      <div class="text-value">292</div>
                      <div class="text-uppercase text-muted small">feeds</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-google-plus">
                    <i class="fa fa-google-plus"></i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-4" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">894</div>
                      <div class="text-uppercase text-muted small">followers</div>
                    </div>
                    <div>
                      <div class="text-value">92</div>
                      <div class="text-uppercase text-muted small">circles</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="card-group mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="h1 text-muted text-right mb-4">
                    <i class="icon-people"></i>
                  </div>
                  <div class="text-value">87.500</div>
                  <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="h1 text-muted text-right mb-4">
                    <i class="icon-user-follow"></i>
                  </div>
                  <div class="text-value">385</div>
                  <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="h1 text-muted text-right mb-4">
                    <i class="icon-basket-loaded"></i>
                  </div>
                  <div class="text-value">1238</div>
                  <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="h1 text-muted text-right mb-4">
                    <i class="icon-pie-chart"></i>
                  </div>
                  <div class="text-value">28%</div>
                  <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="h1 text-muted text-right mb-4">
                    <i class="icon-speedometer"></i>
                  </div>
                  <div class="text-value">5:34:11</div>
                  <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-2">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-people"></i>
                    </div>
                    <div class="text-value">87.500</div>
                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-user-follow"></i>
                    </div>
                    <div class="text-value">385</div>
                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-basket-loaded"></i>
                    </div>
                    <div class="text-value">1238</div>
                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-pie-chart"></i>
                    </div>
                    <div class="text-value">28%</div>
                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-speedometer"></i>
                    </div>
                    <div class="text-value">5:34:11</div>
                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-speech"></i>
                    </div>
                    <div class="text-value">972</div>
                    <small class="text-muted text-uppercase font-weight-bold">Comments</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-sm-6 col-md-2">
                <div class="card text-white bg-info">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-people"></i>
                    </div>
                    <div class="text-value">87.500</div>
                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                    <div class="progress progress-white progress-xs mt-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card text-white bg-success">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-user-follow"></i>
                    </div>
                    <div class="text-value">385</div>
                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                    <div class="progress progress-white progress-xs mt-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card text-white bg-warning">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-basket-loaded"></i>
                    </div>
                    <div class="text-value">1238</div>
                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                    <div class="progress progress-white progress-xs mt-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card text-white bg-primary">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-pie-chart"></i>
                    </div>
                    <div class="text-value">28%</div>
                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                    <div class="progress progress-white progress-xs mt-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card text-white bg-danger">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-speedometer"></i>
                    </div>
                    <div class="text-value">5:34:11</div>
                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                    <div class="progress progress-white progress-xs mt-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-md-2">
                <div class="card text-white bg-info">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-speech"></i>
                    </div>
                    <div class="text-value">972</div>
                    <small class="text-muted text-uppercase font-weight-bold">Comments</small>
                    <div class="progress progress-white progress-xs mt-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/custom-tooltips.min.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>
@endsection