
@extends('coreui.base')

@section('content')
 
          <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"> Popovers
                  <div class="card-header-actions"><a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-popover/popovers.html" target="_blank"><small class="text-muted">docs</small></a></div>
                </div>
                <div class="card-body">
                  <button class="btn btn-lg btn-danger" type="button" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                  <hr><a class="btn btn-lg btn-danger" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">
                    Dismissible
                    popover</a>
                </div>
              </div>
              <div class="card">
                <div class="card-header"> Popovers<small>directions</small></div>
                <div class="card-body">
                  <button class="btn btn-secondary" type="button" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                  <button class="btn btn-secondary" type="button" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button>
                  <button class="btn btn-secondary" type="button" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
                  <button class="btn btn-secondary" type="button" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>
                </div>
              </div>
            </div>
          </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/popovers.js') }}"></script>
@endsection