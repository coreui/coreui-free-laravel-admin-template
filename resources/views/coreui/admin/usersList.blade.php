@extends('coreui.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
              <div class="card-header">
                Users  
              </div>
              <div class="card-body">
                <div class="row">
                    <form method="POST" action="{{ route('logout') }}"> @csrf<button class="btn btn-block btn-primary">Logout</button></form>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Users List</a>  
                </div>
                <div class="row">
                  <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Users</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Email verified at</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                            <tr>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->email_verified_at }}</td>
                              <td>
                                <a href="{{ url('/users/' . $user->id) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                @if( $you->id !== $user->id )
                                <form action="{{ route('users.destroy', $user->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">Delete User</button>
                                </form>


<!--
                                  <a href="{{ url('/users/' . $user->id, ['_method' => 'destroy']) }}" class="btn btn-block btn-danger">Remove</a>
-->

                                @endif
                              </td>
                            </tr>
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
      </main>

@endsection


@section('javascript')

@endsection

