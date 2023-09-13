@extends('layouts.adminMaster')

@section('content')


<x-app-layout>

<div style="margin: 4% 10% 0px 20%">
    <div style="width: 100%" > 
     
        <h1 class="mx-auto"> Manage Your Admins </h1> 
          {{-- <button class="btn btn-success" type="submit" style="position:absolute ; right :10%"> + Add Admin</button> --}}
        <br><br>
        <x-primary-button class="btn btn-success" type="submit" style="position:absolute ; right :10% ; top:25%"
        x-data="" x-on:click.prevent="$dispatch('open-modal', '+ Add Admin')"
       >{{ __( '+ Add Admin') }}</x-primary-button>
   <x-modal name="+ Add Admin" :show="$errors->changePassword->isNotEmpty()" focusable>
      
            <div class="user-form" style="margin: 10% ; text-align:center">
                <form action="Admins_Data" method="POST">
                    @csrf
                    <label for="FirstName">First Name :</label>
                    <input type="text" id="FirstName" name="name"> <br><br>
                    <label for="LastName">Last Name :</label>
                    <input type="text" id="LastName" name="last_name"> <br><br>
                    <label for="userEmail"> Email :</label>
                    <input type="text" id="AdminEmail" name="email">  <br><br>
                    <label for="AdminPassword">Password :</label>
                    <input type="text" id="AdminPassword" name="password"><br> <br>
                    <label for="AdminImage">Image : </label>
                    <input type="file" id="AdminImage" name="AdminImage"> <br><br>
                    <button class="btn btn-warning" type="submit">Add Admin</button>
                </form>
            </div>
        </div> 
                  </x-modal>
         
       
         <table class="table table-hover">
                <thead style="background-color: rgba(117, 192, 157, 0.489)">
                    <tr>
                    
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
                       
                            <td>{{ $admin['name'] }}</td>
                            <td>{{ $admin['last_name'] }}</td>
                            <td>{{ $admin['email'] }}</td> 
                          <td>
                            {{-- <div>
                                @if ($Admin->AdminImage)
                                    <img src="{{ asset('images/Admins/' . $Admin->AdminImage) }}"
                                        alt="{{ $Admin->AdminFirstName }}" width="200" height="200">
                                @endif
                            </div> --}}
                        </td>                      
                      
                          <form action="admindelete/{{$admin['id'] }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <td> <button class="btn btn-danger" type="submit" value="DELETE">Delete</button></td> 
                           

                          </form>
                         {{-- <td><a href="Admins_Update/{{  $admin->id }}">
                         <button style="margin-right:5px" class="btn btn-primary" type="submit" >Edit</button></a> --}}
                        @endforeach

                    </tr>

                </tbody>
            </table> 
        
    </div>
    </div>

</x-app-layout>
@endsection