      <div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="/assets/brand/coreui-base-white.svg" width="118" height="46" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo"></div>
      <nav class="c-sidebar-nav">
        <ul class="c-nav">

<!--
              <li class="c-nav-item">
                  <a class="c-nav-link" href="/">
                      <svg class="c-nav-icon">
                          <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                      </svg> 
                      Dashboard
                      <span class="badge badge-info">NEW</span>
                  </a>
              </li>
-->
          @foreach($menu as $menuel)

              @if($menuel['slug'] === 'link')

                <li class="c-nav-item">
                    <a class="c-nav-link" href="{{ $menuel['href'] }}">
                      @if($menuel['hasIcon'] === true)
                          @if($menuel['iconType'] === 'coreui')
                            <svg class="c-nav-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                            </svg> 
                          @endif
                      @endif 
                      {{ $menuel['name'] }}
                    </a>
                </li>
              @elseif($menuel['slug'] === 'dropdown')
                  <li class="c-nav-item c-nav-dropdown">
                      <a class="c-nav-link c-nav-dropdown-toggle" href="#">
                          @if($menuel['hasIcon'] === true)
                              @if($menuel['iconType'] === 'coreui')
                                <svg class="c-nav-icon">
                                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                                </svg> 
                              @endif
                          @endif
                          {{ $menuel['name'] }}
                      </a>
                      <ul class="c-nav-dropdown-items">
                          @foreach($menuel['elements'] as $dropdowns)
                              <li class="c-nav-item">
                                  <a class="c-nav-link" href="{{ $dropdowns['href'] }}">
                                      <span class="c-nav-icon"></span> 
                                      {{ $dropdowns['name'] }}
                                  </a>
                              </li>
                          @endforeach
                      </ul>
                  </li>



              @elseif($menuel['slug'] === 'title')
                <li class="c-nav-title">
                    @if($menuel['hasIcon'] === true)
                        @if($menuel['iconType'] === 'coreui')
                          <svg class="c-nav-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                          </svg> 
                        @endif
                    @endif 
                    {{ $menuel['name'] }}
                </li>
              @endif

          @endforeach

        </ul>
      </nav>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>