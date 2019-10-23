@extends('coreui.base')

@section('content')

          <div class="container-fluid">
            <div class="fadeIn">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header"> Bootstrap Modals</div>
                    <div class="card-body">
                      <!-- Button trigger modal-->
                      <button class="btn btn-secondary mb-1" type="button" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
                      <button class="btn btn-secondary mb-1" type="button" data-toggle="modal" data-target="#largeModal">Launch large modal</button>
                      <button class="btn btn-secondary mb-1" type="button" data-toggle="modal" data-target="#smallModal">Launch small modal</button>
                      <hr>
                      <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#primaryModal">Primary modal</button>
                      <button class="btn btn-success mb-1" type="button" data-toggle="modal" data-target="#successModal">Success modal</button>
                      <button class="btn btn-warning mb-1" type="button" data-toggle="modal" data-target="#warningModal">Warning modal</button>
                      <button class="btn btn-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">Danger modal</button>
                      <button class="btn btn-info mb-1" type="button" data-toggle="modal" data-target="#infoModal">Info modal</button>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
            <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-primary" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
            <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-success" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
            <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-warning" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-warning" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
            <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-danger" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
            <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-info" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-info" type="button">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>
            <!-- /.modal-->
          </div>

@endsection

@section('javascript')

@endsection