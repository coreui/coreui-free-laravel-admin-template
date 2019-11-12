@extends('coreui.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Notes') }}</div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('notes.create') }}" class="btn btn-primary m-2">{{ __('Add Note') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Applies to date</th>
                            <th>Status</th>
                            <th>Note type</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($notes as $note)
                            <tr>
                              <td><strong>{{ $note->user->name }}</strong></td>
                              <td><strong>{{ $note->title }}</strong></td>
                              <td>{{ $note->content }}</td>
                              <td>{{ $note->applies_to_date }}</td>
                              <td>
                                  <span class="{{ $note->status->class }}">
                                      {{ $note->status->name }}
                                  </span>
                              </td>
                              <td><strong>{{ $note->note_type }}</strong></td>
                              <td>
                                <a href="{{ url('/notes/' . $note->id) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/notes/' . $note->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('notes.destroy', $note->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $notes->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

