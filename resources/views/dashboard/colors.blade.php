@extends('dashboard.base')

@section('content')

<div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"> Theme colors</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-primary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Primary Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-secondary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Secondary Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-success theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Success Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-danger theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Danger Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-warning theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Warning Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-info theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Info Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-light theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Light Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-dark theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Dark Color</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"> Grays</div>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-100 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 100 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-200 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 200 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-300 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 300 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-400 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 400 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-500 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 500 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-600 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 600 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-700 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 700 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-800 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 800 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-900 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 900 Color</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection


@section('javascript')
    <script src="{{ asset('js/colors.js') }}"></script>
@endsection

