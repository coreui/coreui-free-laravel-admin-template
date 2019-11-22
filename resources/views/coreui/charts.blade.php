@extends('coreui.base')

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="card-columns cols-2">
                <div class="card">
                  <div class="card-header">Line Chart
                    <div class="card-header-actions"><a class="card-header-action" href="http://www.chartjs.org" target="_blank"><small class="text-muted">docs</small></a></div>
                  </div>
                  <div class="card-body">
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-1"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">Bar Chart
                    <div class="card-header-actions"><a class="card-header-action" href="http://www.chartjs.org" target="_blank"><small class="text-muted">docs</small></a></div>
                  </div>
                  <div class="card-body">
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-2"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">Doughnut Chart
                    <div class="card-header-actions"><a class="card-header-action" href="http://www.chartjs.org" target="_blank"><small class="text-muted">docs</small></a></div>
                  </div>
                  <div class="card-body">
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-3"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">Radar Chart
                    <div class="card-header-actions"><a class="card-header-action" href="http://www.chartjs.org" target="_blank"><small class="text-muted">docs</small></a></div>
                  </div>
                  <div class="card-body">
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-4"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">Pie Chart
                    <div class="card-header-actions"><a class="card-header-action" href="http://www.chartjs.org" target="_blank"><small class="text-muted">docs</small></a></div>
                  </div>
                  <div class="card-body">
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-5"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">Polar Area Chart
                    <div class="card-header-actions"><a class="card-header-action" href="http://www.chartjs.org" target="_blank"><small class="text-muted">docs</small></a></div>
                  </div>
                  <div class="card-body">
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-6"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>

@endsection