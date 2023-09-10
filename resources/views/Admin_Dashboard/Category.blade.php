<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Category Management</title>
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

/* Add more CSS styles as needed */


    </style>
</head>

<body>
    <header>
        <h1> Manage Your Categories</h1>
    </header>
    <main>
        <div class="container">
            <div class="category-form">
                <label for="categoryName">Name</label>
                <input type="text" id="categoryName">
                <label for="categoryDescription">Description</label>
                <input type="text" id="categoryDescription">
                <label for="categoryImage">Image</label>
                <input type="file" id="categoryImage">
                <button class="btn btn-warning">Add Category</button>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead style="background-color: #3c9ee5">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category ['id'] }}</td>
                        <td>{{ $category ['categoryName'] }}</td>
                        <td>{{ $category ['categoryDescription'] }}</td>
                        <td>
                            <div>
                                @if ($category->categoryImage)
                                    <img src="{{ asset('images/categories/' . $category->categoryImage) }}"
                                        alt="{{ $category->categoryName }}" width="200" height="200">
                                @endif
                            </div>
                        </td><td><button style="margin-right:5px" class="btn btn-primary">Edit</button><button  class="btn btn-danger">Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
