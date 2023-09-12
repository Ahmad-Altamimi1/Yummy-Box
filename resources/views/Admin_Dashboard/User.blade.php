@extends('layouts.adminMaster')

@section('content')

<div style="margin: 4% 1% 0px 18%">
    <div style="width: 100%" > 

        <h1 class="mx-auto"> Manage Your Users </h1>  <a href="user_Create"><button class="btn btn-success" type="submit" style="position:absolute ; right :1%"> + Add User</button>
        </a> <br><br>
      
        <table class="table table-hover">
          <thead style="background-color: rgba(117, 192, 157, 0.489)">
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
                          <div>
                              @if ($user->image)
                                  <img src="{{ asset('images/Users/' . $user->image) }}" alt="{{ $user->name }}"
                                      width="200" height="200">
                              @endif
                          </div>
                      </td> 
                      <td><form action="userdelete/{{$user['id'] }}" method="POST" style="margin-bottom: 2px">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" value="DELETE" style="width:70px">Delete</button>
                    </form >                   
                    <form action="useredit/{{ $user['id'] }}" method="" style="margin-bottom: 2px">
                      @csrf
                      <button class="btn btn-primary" type="submit" value="Update" style="width:70px">Edit</button>
                  </form> 
               
                
                  </td>
              @endforeach
                </tbody>
            </table>
        </div>
  
</body>
</html>
