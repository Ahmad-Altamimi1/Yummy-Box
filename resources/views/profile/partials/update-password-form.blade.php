<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <section style="text-align: center;">
        <!-- Ensure there's no container with constraints on width around the table -->
        <h2 class="text-xl font-semibold mb-4">Volunteering Programs</h2>
        <table class="table" style="width: 100%">
            <thead style="background-color: rgb(179, 236, 164) ;">
              <tr>
                <th scope="col">Program Name</th>
                <th scope="col">Location</th>
                <th scope="col">Experiance</th>
                <th scope="col">CV file</th>
                <th scope="col">Donate</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($volunteers as $item)
    
<tr>
       <td scope="col">{{ $item->Languages }}</td>
                <td scope="col">{{ $item->Address }}</td>
                <td scope="col">{{ $item->Experience }}</td>
                <td scope="col">{{ $item->CV }}</td>
                <td scope="col">{{ $item->day }}</td>
            
@endforeach
           
            <tr>

            </tr>
            
             {{-- @foreach ($volunteers as $program)
                <tr>
                    <td>{{ $program->Languages }}</td>
                    <td>{{ $program->Address }}</td>
                    <td>{{ $program->Experiance }}</td>
                    <td>{{ $program->CV }}</td>
            
                </tr>
            @endforeach 
          --}}
            </tbody>
          </table>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
