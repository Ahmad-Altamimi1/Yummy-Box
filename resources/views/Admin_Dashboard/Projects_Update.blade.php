
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Details Form</title>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=""> --}}
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background-color: rgba(117, 192, 157, 0.489)">
                <h4 class="card-title py-3" >Add New Project</h4>
            </div>
            <div class="card-body">          
              <form action="productupdate/{{ $product->id }}" method="POST">
              @csrf
              @method('PATCH') 
              

                    <div class="form-group">
                        <label for="ProjectsName">Name</label>
                        <input type="text" class="form-control" id="ProjectsName" name="name"  value="{{ $product->name }}">
                    </div>  
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsBreif">Brief</label>
                        <input type="text" class="form-control" id="ProjectsBreif" name="breif" value="{{ $product->breif }}">
                    </div>
                    @error('breif')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionOne">Description</label>
                        <input type="text" class="form-control" id="DescriptionOne" name="description2"  value="{{ $product->description2 }}">
                    </div>
                    @error('description2')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="DescriptionTwo">Details</label>
                        <input type="text" class="form-control" id="DescriptionTwo" name="description3" value="{{ $product->description3 }}">
                    </div>
                    @error('description3')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsLocation">Location</label>
                        <input type="text" class="form-control" id="ProjectsLocation" name="location"  value="{{ $product->location }}">
                    </div>
                    @error('location')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsTime">Time</label>
                        <input type="text" class="form-control" id="ProjectsTime" name="time" value="{{ $product->time }}">
                    </div>
                    @error('time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsPeriod">Period</label>
                        <input type="text" class="form-control" id="ProjectsPeriod" name="period"  value="{{ $product->period }}">
                    </div>
                    @error('period')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <label for="ProjectsTotal">Total</label>
                        <input type="text" class="form-control" id="ProjectsTotal" name="total" value="{{ $product->total }}">
                    </div>
                    @error('total')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="col-md-4 col-12">
                      @if ($product->image)
                          <img src="{{ asset('images/users/' . $product->image) }}" alt="{{ $product->name }}'s Project Picture" class="img-fluid" style="max-width: 200px; height: auto;" requ>
                      @endif
      
                      <div class="form-group mt-3">
                          <label for="image">{{ __('Upload new image') }}</label>
                          <input id="image" name="image" type="file" accept="image/*" class="form-control-file" :value="old('image', $product->image)" autocomplete="image" />
                          <x-input-error class="mt-2" :messages="$errors->get('image')" />
                      </div>
                  </div>
                    <button type="submit" class="btn btn-success btn-lg " style="margin-left:45%"> Update Project</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin=""></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin=""></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin=""></script>
</body>
</html>
