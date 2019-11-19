<?php
/*
    $data = $menuel['elements']
*/
if(!function_exists('renderDropdown')){
  function renderDropdown($data){
      if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
          echo '<li class="c-sidebar-nav-dropdown">';
          echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
          if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
              echo '<svg class="c-sidebar-nav-icon"><use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#' . $data['icon'] . '"></use></svg>';    
          }
          echo $data['name'] . '</a>';
          echo '<ul class="c-sidebar-nav-dropdown-items">';
          renderDropdown( $data['elements'] );
          echo '</ul></li>';
      }else{
          for($i = 0; $i < count($data); $i++){
              if( $data[$i]['slug'] === 'link' ){
                  echo '<li class="c-sidebar-nav-item">';
                  echo '<a class="c-sidebar-nav-link" href="' . $data[$i]['href'] . '">';
                  echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
              }elseif( $data[$i]['slug'] === 'dropdown' ){
                  renderDropdown( $data[$i] );
              }
          }
      }
  }
}
?>


    <div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="/assets/brand/coreui-base-white.svg" width="118" height="46" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo"></div>
        <ul class="c-sidebar-nav">
          @foreach($menu as $menuel)
              @if($menuel['slug'] === 'link')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ $menuel['href'] }}">
                      @if($menuel['hasIcon'] === true)
                          @if($menuel['iconType'] === 'coreui')
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                            </svg> 
                          @endif
                      @endif 
                      {{ $menuel['name'] }}
                    </a>
                </li>
              @elseif($menuel['slug'] === 'dropdown')
                <?php renderDropdown($menuel) ?>
              @elseif($menuel['slug'] === 'title')
                <li class="c-sidebar-nav-title">
                    @if($menuel['hasIcon'] === true)
                        @if($menuel['iconType'] === 'coreui')
                          <svg class="c-sidebar-nav-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                          </svg> 
                        @endif
                    @endif 
                    {{ $menuel['name'] }}
                </li>
              @endif
          @endforeach
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>