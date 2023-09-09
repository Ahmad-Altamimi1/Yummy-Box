<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Category Management</h1>
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
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample table data -->
                    <tr>
                        <td>1</td>
                        <td>Category 1</td>
                        <td><img src="category1.jpg" alt="Category 1"></td>
                        <td>Description of Category 1</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Category 2</td>
                        <td><img src="category2.jpg" alt="Category 2"></td>
                        <td>Description of Category 2</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <!-- Add more table rows as needed -->
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
