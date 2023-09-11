<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        /* Reset some default browser styles */
        html,
        body,
        h1 {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        header {
            background-color: #4CC790;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        main {
            margin: 20px;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #FF9F29;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3c9ee5;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="/Admin_Home">Volunteers</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
                 <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Admin_Dashboard.Admins_Data')}}"> Admins</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Dashboard.Category')}}">Category</a>
              </li>
               {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Donations')}}">Donations</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Volunteers')}}">Volunteers</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Dashboard.User')}}">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Admin_Dashboard.Projects')}}">Projects</a>
              </li>
             
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Link</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
    <header>
        <h1> Manage Your User</h1>
    </header>
    <main>
        <div class="container">
            <div class="user-form">
                <form action="Admins_User" method="POST">
                    @csrf
                    @method('post')
                    <label for="userName">First Name</label>
                    <input type="text" id="FirstName" name="name">
                    <label for="userName">Last Name</label>
                    <input type="text" id="LastName" name="LastName">
                    <label for="userEmail">Email</label>
                    <input type="text" id="userEmail" name="email">
                    <label for="userPassword">Password</label>
                    <input type="text" id="userPassword" name="password">
                    <label for="userphone">Phone</label>
                    <input type="text" id="userphone" name="phone">
                    <label for="userImage">Image</label>
                    <input type="file" id="userImage" name="image">
                  
                    <button class="btn btn-warning" type="submit">Add User</button>
                </form>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead style="background-color: #3c9ee5">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
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
                            <td>{{ $user['password'] }}</td>
                            <td>{{ $user['phone'] }}</td>

                            <td>
                                <div>
                                    @if ($user->image)
                                        <img src="{{ asset('images/Users/' . $user->image) }}" alt="{{ $user->name }}"
                                            width="200" height="200">
                                    @endif
                                </div>
                            </td> <td>
                            <form action="userdelete/{{$user['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" value="DELETE">Delete</button>
                            </form>
                            <form action="useredit/{{ $user['id'] }}" method="">
                                @csrf
                                <button class="btn btn-primary" type="submit" value="Update">Update</button>
                            </form>
                        </td>
                    @endforeach

                   

                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
