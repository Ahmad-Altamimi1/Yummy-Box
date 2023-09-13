<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details Form</title>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background-color: rgba(117, 192, 157, 0.489)">
                <h5 class="card-title">Add New User</h5>
            </div>
            <div class="card-body">
                <form action="/admin/Admins_User" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="ProjectsName">Name</label>
                        <input type="text" class="form-control" id="ProjectsName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="ProjectsBreif">Last Name</label>
                        <input type="text" class="form-control" id="ProjectsBreif" name="LastName">
                    </div>
                    <div class="form-group">
                        <label for="DescriptionOne">Email</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="email">
                    </div>
                    <div class="form-group">
                        <label for="DescriptionTwo">Password</label>
                        <input type="password" class="form-control" id="DescriptionTwo" name="password">
                    </div>
                    <div class="form-group">
                        <label for="ProjectsLocation">Phone</label>
                        <input type="text" class="form-control" id="ProjectsLocation" name="phone">
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="ProjectsImage">Image</label>
                        <input type="file" class="form-control-file" id="ProjectsImage" name="image">
                    </div> --}}
                    <div class="col-md-4 col-12">
                        <div class="form-group mt-3">
                            <label for="image">{{ __('Upload new image') }}</label>
                            <input id="image" name="image" type="file" accept="image/*" class="form-control-file" autocomplete="image" />
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
