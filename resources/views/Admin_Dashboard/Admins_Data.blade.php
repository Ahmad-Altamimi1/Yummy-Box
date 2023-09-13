{{-- 
            <div class="admin-form" style="margin: 10% ; text-align:center">
                <form action="Admins_Data" method="POST">
                    @csrf
                    <label for="FirstName">First Name :</label>
                    <input type="text" id="FirstName" name="name"> <br><br>
                    <label for="LastName">Last Name :</label>
                    <input type="text" id="LastName" name="last_name"> <br><br>
                    <label for="adminEmail"> Email :</label>
                    <input type="text" id="AdminEmail" name="email">  <br><br>
                    <label for="AdminPassword">Password :</label>
                    <input type="text" id="AdminPassword" name="password"><br> <br>
                    <label for="AdminImage">Image : </label>
                    <input type="file" id="AdminImage" name="AdminImage"> <br><br>
                    <button class="btn btn-warning" type="submit">Add Admin</button>
                </form>
            </div>
        </div> 
     --}}
     @extends('layouts.adminMaster')

     @section('content')

     <div class="content " >

<div style="margin: 0% 8% ">
    <div style="width: 100%">
 <br><br>
        <h1 class="mx-auto"> Manage Your Admins </h1> <a href="Admin_Create"><button class="btn btn-success"
                type="submit" style="position:absolute ; right :8%"> + Add Admin</button>
        </a> <br><br>

        <table class="table table-hover">
            <thead style="background-color: rgba(117, 192, 157, 0.489)">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin['id'] }}</td>
                        <td>{{ $admin['name'] }}</td>
                        <td>{{ $admin['last_name'] }}</td>
                        <td>{{ $admin['email'] }}</td>
                        <td>
                            <div >
                                @if ($admin->image)
                                    <img src="{{ asset('images/' . $admin->image) }}" alt="{{ $admin->name }}"
                                        width="80" height="80">
                                @endif
                            </div>
                        </td>
                        <td><a href="admindelete/{{$admin['id'] }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" style="margin-bottom: 2px">
                            @csrf
                            @method('DELETE')
                            <i class="fas fa-trash fa-xl" style="color: red;"></i>
                        </a>
                        
                        <form id="delete-form" action="admindelete/{{$admin['id'] }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        
                        {{-- <a href="adminedit/{{ $admin['id'] }}" onclick="event.preventDefault(); document.getElementById('edit-form').submit();" style="margin-bottom: 2px">
                            @csrf
                            <i class="fas fa-edit fa-2xl" style="color: blue;"></i>
                        </a>
                        
                        <form id="edit-form" action="adminedit/{{ $admin['id'] }}" method="GET" style="display: none;">
                            @csrf
                        </form> --}}
                        
                      {{-- <form action="adminview/{{ $admin['id'] }}" method="" style="margin-bottom: 2px">
                        @csrf
                        <button class="btn btn-warning" type="submit" value="Update" style="width:70px">View</button>
                    </form>  --}}
                    
                      </td>
                       @endforeach   
                  </tbody>
              </table>
          </div>
          </div>
   @endsection
  