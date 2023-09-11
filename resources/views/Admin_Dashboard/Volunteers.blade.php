<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Volunteers Management
    </title>
    <style>
    /* Apply styles to the entire page */
body {
    font-family: Arial, sans-serif; /* Choose a suitable font */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

/* Header styles */
h3 {
    margin-left: 3%;
    color: #4CC790;
}

/* Container for the table */
.flex-container {
    display: flex;
    justify-content: center;
    margin-top: 20px; /* Increased margin for better spacing */
}

/* Table styles */
.table {
    width: 95%;
    background-color: white;
    border-collapse: collapse;
    border: 1px solid #CCCCCC;
    margin-top: 10px; /* Added margin for better spacing */
}

/* Table header styles */
.table th {
    background-color: #3c9ee5;
    color: white;
    font-weight: bold;
    border: 1px solid #CCCCCC; /* Added border for consistency */
    padding: 8px;
    text-align: left;
}

/* Table cell styles */
.table td {
    border: 1px solid #CCCCCC; /* Added border for consistency */
    padding: 8px;
    text-align: left;
}

/* Table row hover effect */
/* .table tr:hover {
    background-color: #FF9F29;
    font-weight: bold;
    color: white;
} */

/* Image size within table cells */
.table img {
    height: 50px;
    width: 50px;
    display: block; /* Ensure the image is properly displayed */
    margin: 0 auto; /* Center the image within the cell */
}
h1 {

    background-color: #4CC790;
    color: #fff;
    text-align: center;
    padding: 10px ;
    margin: 0%
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
             
             
               
                  <li class="nav-item "><a class="nav-link" href="{{route('admin_logout')}}">Logout</a></li>
                 
                 
                
              
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <header>
        <h1>Volunteers</h1>
    </header>

    <div class="flex-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Address</th>
                    <th>Languages</th>
                    <th>Experience</th>
                    <th>CV</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Volunteers as $Volunteer)
                <tr>
                    <td>{{ $Volunteer['id'] }}</td>
                    <td>{{ $Volunteer['user_id'] }}</td>
                    <td>{{ $Volunteer['Address'] }} </td>
                    <td>{{ $Volunteer['Languages'] }}</td>
                    <td>{{ $Volunteer['Experience'] }} </td>
                    <td>{{ $Volunteer['CV'] }}</td>
                    @endforeach
                </tr>
                <!-- Add more rows for actual data -->
            </tbody>
        </table>
    </div>
    <!-- You can add your SQL data source here if needed -->
</body>
</html>
