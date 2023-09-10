<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Code Languages Training Volunteer Form</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}

.container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    margin-top: 50px;
}

h1 {
    text-align: center;
}

.form-group label {
    font-weight: bold;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-primary:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Donation Form</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="phoneNumber">Donation amount</label>
                    <input type="number" class="form-control" id="donation" name="donation" placeholder="JOD 0.0">
                </div>
            </div>
            <div class="form-group">
                <label for="experience">Leave us a message</label>
                <textarea class="form-control" id="experience" name="experience" rows="3" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
