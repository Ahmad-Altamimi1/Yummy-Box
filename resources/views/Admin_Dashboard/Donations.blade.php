<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations Management
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
    <header>
        <h1>Donations Data</h1>
    </header>

    <div class="flex-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Donation ID</th>
                    <th>User Name</th>                    
                    <th>Category Name</th>
                    <th>Project Name</th>
                    <th>Donation Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Donations as $Donation)
                <tr>
                    <td>{{ $Donation['id'] }}</td>
                    <td>{{ $Donation['FirstName'.'LastName'] }}</td>
                    <td>{{ $Donation['categoryName'] }} </td>
                    <td>{{ $Donation['ProjectsName'] }}</td>
                    <td>{{ $Donation['DonationAmount'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- You can add your SQL data source here if needed -->
</body>
</html>
