@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Show {{ $form->name }}</h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <table class="table">
                            <tbody>
                                @foreach($columns as $column)
                                    <tr>
                                        <td>
                                            {{ $column['name'] }}
                                        </td>
                                        <td>
                                            <?php
                                              if( $column['type'] == 'default'){
                                                echo $column['value'];
                                              }elseif( $column['type'] == 'file'){
                                                echo '<a href="' . $column['value'] . '" class="btn btn-primary" target="_blank">Open file</a>';
                                              }elseif( $column['type'] == 'image' ){
                                                echo '<img src="' . $column['value'] . '" style="max-width:200px;max-height:200px;">';
                                              }


                                            ?>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a 
                            href="{{ route('resource.index', $form->id) }}"
                            class="btn btn-primary"
                        >
                            Return
                        </a>
                    </div>
                </div>
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