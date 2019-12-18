@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Edit') }}: {{ $note->title }}</div>
                    <div class="card-body">
                        <form method="POST" action="/notes/{{ $note->id }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col">
                                    <label>Title</label>
                                    <input class="form-control" type="text" placeholder="{{ __('Title') }}" name="title" value="{{ $note->title }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Content</label>
                                    <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="{{ __('Content..') }}" required>{{ $note->content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Applies to date</label>
                                    <input type="date" class="form-control" name="applies_to_date" value="{{ $note->applies_to_date }}" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Status</label>
                                    <select class="form-control" name="status_id">
                                        @foreach($statuses as $status)
                                            @if( $status->id == $note->status_id )
                                                <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>
                                            @else
                                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label>Note type</label>
                                    <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" value="{{ $note->note_type }}" required>
                                </div>
                            </div>
 
                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('notes.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection