@extends('layouts.adminMaster')

@section('content')


<div style="margin: 4% 1% 0px 18%">
  <div style="width: 100%" > 

      <h1 class="mx-auto"> Our Volunteers </h1>  
    <br>
      <table class="table table-hover">
        <thead style="background-color: rgba(117, 192, 157, 0.489)">
           <tr>
                      <th>Volunteer ID</th>
                      <th>User ID</th>
                      <th>Address</th>
                      <th>Languages</th>
                      <th>Experience</th>
                      <th>CV</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($Volunteers as $Volunteer)
                <tr>
                    <td>{{ $Volunteer['id'] }}</td>
                    <td>{{ $Volunteer['user_id'] }}</td>
                    <td>{{ $Volunteer['Address'] }} </td>
                    <td>{{ $Volunteer['Languages'] }}</td>
                    <td>{{ $Volunteer['Experience'] }} </td>
                    <td>{{ $Volunteer['CV'] }}</td>
                    @endforeach
                </tr> 
                
              </tbody>
          </table>
      </div>
  </main>
</body>
</html>

