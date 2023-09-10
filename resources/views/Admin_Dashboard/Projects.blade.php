<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset some default browser styles */
        html, body, h1 {
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

        input[type="text"], input[type="file"] {
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

        th, td {
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
    <header>
        <h1>Manage Your Projects </h1>
    </header>
    <main>
        <div class="container">
            <div class="Projects-form">
                <form action="" method="POST">
                <label for="ProjectsName">Name</label>
                <input type="text" id="ProjectsName" name="ProjectsName">
                <label for="ProjectsBreif">Breif</label>
                <input type="text" id="ProjectsBreif" name="ProjectsBreif">
                <label for="Description One">Description One</label>
                <input type="text" id="DescriptionOne" name="DescriptionOne">
                <label for="Description Two">Description Two</label>
                <input type="text" id="DescriptionTwo" name="DescriptionTwo">
                <label for="ProjectsLocation">Location</label>
                <input type="text" id="ProjectsLocation" name="ProjectsLocation">
                <label for="ProjectsImage">Image</label>
                <input type="file" id="ProjectsImage" name="ProjectsImage">
                <button class="btn btn-warning">Add project</button>
                </form>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead style="background-color: #3c9ee5">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Breif</th>
                        <th>Description One</th>
                        <th>Description Two</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projectes as $project)
                    <tr>
                        <td>{{ $project['id'] }}</td>
                        <td>{{ $project['ProjectsName'] }}</td>
                        <td>{{ $project['ProjectsBreif'] }}</td>
                        <td>{{ $project['DescriptionOne'] }}</td>
                        <td>{{ $project['DescriptionTwo'] }}</td>
                        <td>{{ $project['ProjectsLocation'] }}</td>
                        <td>
                            <div>
                                @if ($project->ProjectsImage)
                                    <img src="{{ asset('images/Admins/' . $Admin->ProjectsImage) }}"
                                        alt="{{ $project->ProjectsName }}" width="200" height="200">
                                @endif
                            </div>
                        </td>  
                        <td><button style="margin-right:5px" class="btn btn-primary">Edit</button><button  class="btn btn-danger">Delete</button></td>
                    </tr>
                     @endforeach   
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
