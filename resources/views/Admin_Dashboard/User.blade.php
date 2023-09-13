@extends('layouts.adminMaster')

@section('content')

<div class="content " >
<div style="margin: 0% 8% ">
    <div style="width: 100%" > 
<br><br>
        <h1 class="mx-auto"> Manage Your Users </h1>  <a href="user_Create"><button class="btn btn-success" type="submit" style="position:absolute ; right :8%;"> + Add User</button>
        </a> <br><br>
      
        <table class="table table-hover">
          <thead style="background-color:  rgba(117, 192, 157, 0.489)">
             <tr>
              <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        {{-- <th>Password</th> --}}
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Action</th>
              </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                      <td>{{ $user['id'] }}</td>
                      <td>{{ $user['name'] }}</td>
                      <td>{{ $user['LastName'] }}</td>
                      <td>{{ $user['email'] }}</td>
                      {{-- <td>{{ $user['password'] }}</td> --}}
                      <td>{{ $user['phone'] }}</td>

                      <td>
                                <div >
                                    @if ($user->image)
                                        <img src="{{ asset('images/users/' . $user->image) }}" alt="{{ $user->name }}"
                                            width="80" height="80">
                                    @endif
                                </div>
                      </td>
                      <td><a href="userdelete/{{$user['id'] }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" style="margin-bottom: 2px">
                        @csrf
                        @method('DELETE')
                        <i class="fas fa-trash fa-xl" style="color: red;"></i>
                    </a>
                    
                    <form id="delete-form" action="userdelete/{{$user['id'] }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    
                    <a href="useredit/{{ $user['id'] }}" onclick="event.preventDefault(); document.getElementById('edit-form').submit();" style="margin-bottom: 2px">
                        @csrf
                        <i class="fas fa-edit fa-xl" style="color: blue;"></i>
                    </a>
                    
                    <form id="edit-form" action="useredit/{{ $user['id'] }}" method="GET" style="display: none;">
                        @csrf
                    </form>
                    
               
                
                  </td>
              @endforeach
                </tbody>
            </table>
        </div>
        </div>
  
@endsection
