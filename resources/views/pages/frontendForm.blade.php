
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
  <x-modal name="Join Us as a Trainer 1" :show="$errors->changePassword->isNotEmpty()" focusable>
    <div class="container mt-5">
        <h1>Frontend Training Volunteer Form</h1>
        <form action="{{ route('frontvolunteers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div>
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
                </div> 

            <div class="form-group">                
                <input  type="hidden" class="form-control" id="user_id"  name="user_id" required>

                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="Address" required>


            </div>
            <div class="form-group">
                <label for="programmingLanguages">Proficient Frontend Programming Languages</label>
                <select class="form-control" id="programmingLanguages" name="Languages" >
                    <option value="Choose Language">Choose Language</option>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="javascript">JavaScript</option>
                    <option value="React">React</option>
                    <option value="Angular">Angular</option>
                </select>
            </div>
            <div class="form-group">
                <label for="day">I would like to help weekly</label>
                <select class="form-control" id="day" name="day" >
                    <option value="Choose Day">Choose Day</option>
                    <option value="saturday">Saturday</option>
                    <option value="sunday">Sunday</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="experience">Experience</label>
                <textarea class="form-control" id="experience" name="Experience" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="cv">CV</label>
                <input type="file" class="form-control-file" id="cv" name="CV" required>
            </div>
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            
            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
        
    </div>

</x-modal> 