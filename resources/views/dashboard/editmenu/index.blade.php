@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Menu Elements</h4></div>
            <div class="card-body">
                <div class="row mb-3 ml-3">
                    <a class="btn btn-lg btn-primary" href="{{ route('menu.create') }}">Add new menu element</a>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <form action="{{ route('menu.index') }}" methos="GET">
                            <select class="form-control" name="menu">
                                @foreach($menulist as $menu1)
                                    @if($menu1->id == $thisMenu)
                                        <option value="{{ $menu1->id }}" selected>{{ $menu1->name }}</option>
                                    @else
                                        <option value="{{ $menu1->id }}">{{ $menu1->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary">Change menu</button>
                        </form>
                    </div>
                </div>
<?php

    function renderDropdownForMenuEdit($data, $role){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<tr>';
            echo '<td>';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<svg class="c-nav-icon edit-menu-icon"><use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#' . $data['icon'] . '"></use></svg>';    
                echo '<i class="' . $data['icon'] . '"></i>';
            }
            echo '</td>';
            echo '<td>' . $data['slug'] . '</td>';
            echo '<td>' . $data['name'] . '</td>';
            echo '<td></td>';
            echo '<td>' . $data['sequence'] . '</td>';
            echo '<td>';
            echo '<a class="btn btn-success" href="' . route('menu.up', ['id' => $data['id']]) . '"><i class="cil-arrow-thick-top"></i></a>';
            echo '</td>';
            echo '<td>';
            echo '<a class="btn btn-success" href="' . route('menu.down', ['id' => $data['id']]) . '"><i class="cil-arrow-thick-bottom"></i></a>';
            echo '</td>';
            echo '<td>';
            echo '<a class="btn btn-primary" href="' . route('menu.show', ['id' => $data['id']]) . '">Show</a>';
            echo '</td>';
            echo '<td>';
            echo '<a class="btn btn-primary" href="' . route('menu.edit', ['id' => $data['id']]) . '">Edit</a>';
            echo '</td>';
            echo '<td>';
            echo '<a class="btn btn-danger" href="' . route('menu.delete', ['id' => $data['id']]) . '">Delete</a>';
            echo '</td>';
            echo '</tr>';
            renderDropdownForMenuEdit( $data['elements'], $role );
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<tr>';
                    echo '<td>';
                    echo '<i class="cil-arrow-thick-to-right"></i>';
                    echo '</td>';
                    echo '<td>' . $data[$i]['slug'] . '</td>';
                    echo '<td>' . $data[$i]['name'] . '</td>';
                    echo '<td>' . $data[$i]['href'] . '</td>';
                    echo '<td>' . $data[$i]['sequence'] . '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-success" href="' . route('menu.up', ['id' => $data[$i]['id']]) . '"><i class="cil-arrow-thick-top"></i></a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-success" href="' . route('menu.down', ['id' => $data[$i]['id']]) . '"><i class="cil-arrow-thick-bottom"></i></a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-primary" href="' . route('menu.show', ['id' => $data[$i]['id']]) . '">Show</a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-primary" href="' . route('menu.edit', ['id' => $data[$i]['id']]) . '">Edit</a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-danger" href="' . route('menu.delete', ['id' => $data[$i]['id']]) . '">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdownForMenuEdit( $data[$i], $role );
                }
            }
        }
    }

              ?>


                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>href</th>
                            <th>Sequence</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
            
                @foreach($menuToEdit as $menuel)
                    @if($menuel['slug'] === 'link')
                        <tr>
                            <td>
                                @if($menuel['hasIcon'] === true)
                                    @if($menuel['iconType'] === 'coreui')
                                    <svg class="c-nav-icon edit-menu-icon">
                                        <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                                    </svg> 
                                    <i class="{{ $menuel['icon'] }}"></i> 
                                    @endif
                                @endif 
                            </td>
                            <td>
                                {{ $menuel['slug'] }}
                            </td>
                            <td>
                                {{ $menuel['name'] }}
                            </td>
                            <td>
                                {{ $menuel['href'] }}
                            </td>
                            <td>
                                {{ $menuel['sequence'] }}
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('menu.up', ['id' => $menuel['id']]) }}">
                                    <i class="cil-arrow-thick-top"></i> 
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('menu.down', ['id' => $menuel['id']]) }}">
                                    <i class="cil-arrow-thick-bottom"></i>  
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('menu.show', ['id' => $menuel['id']]) }}">Show</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('menu.edit', ['id' => $menuel['id']]) }}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('menu.delete', ['id' => $menuel['id']]) }}">Delete</a>
                            </td>
                        </tr>
                    @elseif($menuel['slug'] === 'dropdown')
                      <?php renderDropdownForMenuEdit($menuel, $role) ?>
                    @elseif($menuel['slug'] === 'title')
                        <tr>
                            <td>
                                @if($menuel['hasIcon'] === true)
                                    @if($menuel['iconType'] === 'coreui')
                                        <svg class="c-nav-icon edit-menu-icon">
                                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#{{ $menuel['icon'] }}"></use>
                                        </svg> 
                                        <i class="{{ $menuel['icon'] }}"></i> 
                                    @endif
                                @endif 
                            </td>
                            <td>
                                {{ $menuel['slug'] }}
                            </td>
                            <td>
                                {{ $menuel['name'] }}
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                {{ $menuel['sequence'] }}
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('menu.up', ['id' => $menuel['id']]) }}">
                                    <i class="cil-arrow-thick-top"></i> 
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('menu.down', ['id' => $menuel['id']]) }}">
                                    <i class="cil-arrow-thick-bottom"></i>  
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('menu.show', ['id' => $menuel['id']]) }}">Show</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('menu.edit', ['id' => $menuel['id']]) }}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('menu.delete', ['id' => $menuel['id']]) }}">Delete</a>
                            </td>
                        </tr>
                    @endif
                @endforeach

                    </tbody>
                </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')

@endsection