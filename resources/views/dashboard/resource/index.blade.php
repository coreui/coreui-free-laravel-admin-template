@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>{{ $form->name }}</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif
                @if( $enableButtons['add'] == 1 )
                    <div class="col-12">
                        <a 
                            href="{{ route('resource.create', $form->id ) }}"
                            class="btn btn-primary mb-3"
                        >
                        Add new
                        </a>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    @foreach($header as $head)
                                        <th>{{ $head->name }}</th>
                                    @endforeach
                                    <?php
                                        if($enableButtons['read'] == 1){
                                            echo '<th></th>';
                                        }
                                        if($enableButtons['edit'] == 1){
                                            echo '<th></th>';
                                        }
                                        if($enableButtons['delete'] == 1){
                                            echo '<th></th>';
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($datas as $data){
                                        echo '<tr>';
                                        foreach($header as $head){
                                            if(!empty($head->relation_table)){
                                                echo '<td>' . $data['relation_' . $head->column_name] . '</td>';
                                            }else{
                                                echo '<td>' . $data[$head->column_name] . '</td>';
                                            }
                                        }
                                        if($enableButtons['read'] == 1){
                                            echo '<td>';
                                            echo '<a href="' . route("resource.show", ['table' => $form->id, 'resource' => $data['id'] ] ) . '" class="btn btn-primary">Show</a>';
                                            echo '</td>';
                                        }
                                        if($enableButtons['edit'] == 1){
                                            echo '<td>';
                                            echo '<a href="' . route("resource.edit", ['table' => $form->id, 'resource' => $data['id'] ] ) . '" class="btn btn-primary">Edit</a>';
                                            echo '</td>';
                                        }
                                        if($enableButtons['delete'] == 1){
                                            echo '<td>';
                                            echo '<form action="' . route("resource.destroy", ['table' => $form->id, 'resource' => $data['id'] ] )  . '" method="POST">';
                                                ?>
                                                    @csrf
                                                    @method('DELETE')
                                                <?php
                                            echo '<button class="btn btn-danger">Delete</button>';
                                            echo '</form>';
                                            echo '</td>';
                                        }
                                        echo '</tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        {!! $pagination !!}
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