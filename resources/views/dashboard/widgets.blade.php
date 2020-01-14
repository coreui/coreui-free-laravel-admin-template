@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
                      <div class="btn-group float-right">
                        <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg class="c-icon">
                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                      <div class="text-value-lg">9.823</div>
                      <div>Members online</div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart1" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                      <button class="btn btn-transparent p-0 float-right" type="button">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-location-pin"></use>
                        </svg>
                      </button>
                      <div class="text-value-lg">9.823</div>
                      <div>Members online</div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
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
                          <svg class="c-icon">
                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                      <div class="text-value-lg">9.823</div>
                      <div>Members online</div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
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
                          <svg class="c-icon">
                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                      <div class="text-value-lg">9.823</div>
                      <div>Members online</div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
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
                      <div class="text-value-lg">89.9%</div>
                      <div>Widget title</div>
                      <div class="progress progress-xs my-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-value-lg">12.124</div>
                      <div>Widget title</div>
                      <div class="progress progress-xs my-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-value-lg">$98.111,00</div>
                      <div>Widget title</div>
                      <div class="progress progress-xs my-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="text-value-lg">2 TB</div>
                      <div>Widget title</div>
                      <div class="progress progress-xs my-2">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
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
                      <div class="text-value-lg">89.9%</div>
                      <div>Widget title</div>
                      <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-warning">
                    <div class="card-body">
                      <div class="text-value-lg">12.124</div>
                      <div>Widget title</div>
                      <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-danger">
                    <div class="card-body">
                      <div class="text-value-lg">$98.111,00</div>
                      <div>Widget title</div>
                      <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-info">
                    <div class="card-body">
                      <div class="text-value-lg">2 TB</div>
                      <div>Widget title</div>
                      <div class="progress progress-white progress-xs my-2">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><small class="text-muted">Widget helper text</small>
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
                      <div class="text-value-xl py-3">1,123</div>
                      <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
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
                      <div class="text-value-xl py-3">1,123</div>
                      <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
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
                      <div class="text-value-xl py-3">1,123</div>
                      <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
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
                      <div class="text-value-xl py-3">1,123</div>
                      <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
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
                      <div class="text-value-xl py-3">1,123</div>
                      <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
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
                      <div class="text-value-xl py-3">1,123</div>
                      <div class="c-chart-wrapper mx-auto" style="height:40px;width:80px">
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
                      <div class="bg-primary p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-primary">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-info p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-info">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-warning p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-moon"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-warning">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-danger p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-danger">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-primary p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-primary">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-info p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-info">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-warning p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-moon"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-warning">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <div class="bg-danger p-3 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-danger">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                    <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#"><span class="small font-weight-bold">View More</span>
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chevron-right"></use>
                        </svg></a></div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-primary p-4 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-primary">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-info p-4 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-info">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-warning p-4 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-moon"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-warning">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-danger p-4 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-danger">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-primary py-4 px-5 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-primary">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-info py-4 px-5 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-laptop"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-info">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-warning py-4 px-5 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-moon"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-warning">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                    <div class="card-body p-0 d-flex align-items-center">
                      <div class="bg-danger py-4 px-5 mr-3">
                        <svg class="c-icon c-icon-xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                        </svg>
                      </div>
                      <div>
                        <div class="text-value text-danger">$1.999,50</div>
                        <div class="text-muted text-uppercase font-weight-bold small">Widget title</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-lg-4">
                  <div class="card">
                    <div class="card-header bg-facebook content-center">
                      <svg class="c-icon c-icon-3xl text-white my-4">
                        <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#facebook-f"></use>
                      </svg>
                      <div class="c-chart-wrapper">
                        <canvas id="social-box-chart-1" height="90"></canvas>
                      </div>
                    </div>
                    <div class="card-body row text-center">
                      <div class="col">
                        <div class="text-value-xl">89k</div>
                        <div class="text-uppercase text-muted small">friends</div>
                      </div>
                      <div class="c-vr"></div>
                      <div class="col">
                        <div class="text-value-xl">459</div>
                        <div class="text-uppercase text-muted small">feeds</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                  <div class="card">
                    <div class="card-header bg-twitter content-center">
                      <svg class="c-icon c-icon-3xl text-white my-4">
                        <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#twitter"></use>
                      </svg>
                      <div class="c-chart-wrapper">
                        <canvas id="social-box-chart-2" height="90"></canvas>
                      </div>
                    </div>
                    <div class="card-body row text-center">
                      <div class="col">
                        <div class="text-value-xl">973k</div>
                        <div class="text-uppercase text-muted small">followers</div>
                      </div>
                      <div class="c-vr"></div>
                      <div class="col">
                        <div class="text-value-xl">1.792</div>
                        <div class="text-uppercase text-muted small">tweets</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                  <div class="card">
                    <div class="card-header bg-linkedin content-center">
                      <svg class="c-icon c-icon-3xl text-white my-4">
                        <use xlink:href="assets/icons/brands/brands-symbol-defs.svg#linkedin"></use>
                      </svg>
                      <div class="c-chart-wrapper">
                        <canvas id="social-box-chart-3" height="90"></canvas>
                      </div>
                    </div>
                    <div class="card-body row text-center">
                      <div class="col">
                        <div class="text-value-xl">500+</div>
                        <div class="text-uppercase text-muted small">contacts</div>
                      </div>
                      <div class="c-vr"></div>
                      <div class="col">
                        <div class="text-value-xl">292</div>
                        <div class="text-uppercase text-muted small">feeds</div>
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
                    <div class="text-muted text-right mb-4">
                      <svg class="c-icon c-icon-2xl">
                        <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                      </svg>
                    </div>
                    <div class="text-value-lg">87.500</div><small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="text-muted text-right mb-4">
                      <svg class="c-icon c-icon-2xl">
                        <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                      </svg>
                    </div>
                    <div class="text-value-lg">385</div><small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="text-muted text-right mb-4">
                      <svg class="c-icon c-icon-2xl">
                        <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-basket"></use>
                      </svg>
                    </div>
                    <div class="text-value-lg">1238</div><small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="text-muted text-right mb-4">
                      <svg class="c-icon c-icon-2xl">
                        <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                      </svg>
                    </div>
                    <div class="text-value-lg">28%</div><small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="text-muted text-right mb-4">
                      <svg class="c-icon c-icon-2xl">
                        <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                      </svg>
                    </div>
                    <div class="text-value-lg">5:34:11</div><small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">87.500</div><small class="text-muted text-uppercase font-weight-bold">Visitors</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">385</div><small class="text-muted text-uppercase font-weight-bold">New Clients</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-basket"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">1238</div><small class="text-muted text-uppercase font-weight-bold">Products sold</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">28%</div><small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">5:34:11</div><small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speech"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">972</div><small class="text-muted text-uppercase font-weight-bold">Comments</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">87.500</div><small class="text-muted text-uppercase font-weight-bold">Visitors</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">385</div><small class="text-muted text-uppercase font-weight-bold">New Clients</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-basket"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">1238</div><small class="text-muted text-uppercase font-weight-bold">Products sold</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-chart-pie"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">28%</div><small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">5:34:11</div><small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
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
                      <div class="text-muted text-right mb-4">
                        <svg class="c-icon c-icon-2xl">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speech"></use>
                        </svg>
                      </div>
                      <div class="text-value-lg">972</div><small class="text-muted text-uppercase font-weight-bold">Comments</small>
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
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>
@endsection
