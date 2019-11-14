@extends('coreui.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header"><h4>Select menu to edit by assigned role</h4></div>
            <div class="card-body">

              <form action="/menu/selected" method="GET">
                  @csrf
                  <select class="form-control" name="role">
                    @foreach($roles as $role)
                      <option>{{ $role }}</option>
                    @endforeach
                  </select>
                  <br><br>
                  <button class="btn btn-primary" type="submit"> Select</button>
              </form>
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