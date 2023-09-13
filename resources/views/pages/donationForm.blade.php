@include('layouts.nav')

    

    @section('content') 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>


h1 {
    text-align: center;
    margin-top:120px;
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
button{
margin-bottom: 20px;
width: 200px;

}
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Donation Form</h1>
        <form action="{{ route('donors.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                {{-- <div>
                    <label for="firstName">Name : </label>
                    <label for="firstName">{{Auth::user()->name}}</label>
                </div>   
                
                <div>
                    <label for="email">Email : </label>
                    <label for="email">{{Auth::user()->email}}</label>
                </div>   
               
            
            
                
                <div>
                    <label for="phoneNumber">Phone Number</label>
                    <label for="phoneNumber">{{Auth::user()->phone}}</label>
                </div> --}}
                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" required>

                    <label for="service">Service</label>
                    <input type="text" class="form-control" id="service" name="service">



                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Leave us a message</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </form>

    </div>

    @include('layouts.footer')
