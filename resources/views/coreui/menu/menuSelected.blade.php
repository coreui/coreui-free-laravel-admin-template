@extends('coreui.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header"><h4>Menu for users witch role: {{ $role }}</h4></div>
            <div class="card-body">


              <?php

function renderButtonForMenuEdit($data, $role){
    if($data['assigned'] === true){
      echo '<a class="btn btn-primary" href="/menu/selected/switch?id=' . $data['id'] .'&role=' . $role . '">Hide</a>';
    }else{
      echo '<a class="btn btn-danger" href="/menu/selected/switch?id=' . $data['id'] .'&role=' . $role . '">Show</a>';
    }
}

function renderDropdownForMenuEdit($data, $role){
  if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
      echo '<li class="list-group-item">';
      renderButtonForMenuEdit($data, $role );
      if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
          echo '<svg class="c-nav-icon edit-menu-icon"><use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#' . $data['icon'] . '"></use></svg>';    
      }
      echo $data['slug'] . ' ';
      echo $data['name'];
      echo '</li>';
      renderDropdownForMenuEdit( $data['elements'], $role );
  }else{
      for($i = 0; $i < count($data); $i++){
          if( $data[$i]['slug'] === 'link' ){
              echo '<li class="list-group-item">';
              renderButtonForMenuEdit($data[$i], $role );
              echo '<i class="c-icon c-icon-2xl cui-arrow-thick-to-right"></i>';
              echo ' &nbsp;&nbsp;&nbsp;&nbsp; ' . $data[$i]['slug'] . ' ';
              echo $data[$i]['name'] . '</li>';
          }elseif( $data[$i]['slug'] === 'dropdown' ){
            renderDropdownForMenuEdit( $data[$i], $role );
          }
      }
  }
}

              ?>
              <ul class="list-group">
                @foreach($menuToEdit as $menuel)
                    @if($menuel['slug'] === 'link')
                        <li class="list-group-item">
                            <?php renderButtonForMenuEdit($menuel, $role); ?>
                            @if($menuel['hasIcon'] === true)
                                @if($menuel['iconType'] === 'coreui')
                                  <svg class="c-nav-icon edit-menu-icon">
                                      <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                                  </svg> 
                                @endif
                            @endif 
                            {{ $menuel['slug'] }}
                            {{ $menuel['name'] }}
                        </li>
                    @elseif($menuel['slug'] === 'dropdown')
                      <?php renderDropdownForMenuEdit($menuel, $role) ?>
                    @elseif($menuel['slug'] === 'title')
                      <li class="list-group-item">
                          <?php renderButtonForMenuEdit($menuel, $role); ?>
                          @if($menuel['hasIcon'] === true)
                              @if($menuel['iconType'] === 'coreui')
                                <svg class="c-nav-icon edit-menu-icon">
                                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                                </svg> 
                              @endif
                          @endif 
                          {{ $menuel['slug'] }}
                          {{ $menuel['name'] }}
                      </li>
                    @endif
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.edit-menu-icon{
  max-width:32px;
  max-height:32px;
}
</style>

@endsection

@section('javascript')

@endsection