@extends('layouts.adminMaster')

@section('content')

<div style="margin: 4% 1% 0px 18%">
    <div style="width: 100%" > 

        <h1 class="mx-auto"> Manage Your Project </h1>  <a href="Project_Create"><button class="btn btn-success" type="submit" style="position:absolute ; right :1%"> + Add Project</button>
        </a> <br><br>
      
        <table class="table table-hover">
          <thead style="background-color: rgba(117, 192, 157, 0.489)">
             <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Breif</th>
                        <th>Description</th>
                        <th>Details</th>
                        <th>Location</th>
                        <th>Time</th>
                        <th>Period</th>
                        <th>Total</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="custom-element">
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        {{-- <td>{{ $product['breif'] }}</td> --}}
                        <td>
                          {!! Illuminate\Support\Str::limit($product['breif'], 20) !!}
                          @if (str_word_count($product['breif']) > 20)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                        <td>
                          {!! Illuminate\Support\Str::limit($product['description2'], 20) !!}
                          @if (str_word_count($product['description2']) > 20)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                      <td>
                        {!! Illuminate\Support\Str::limit($product['description3'], 20) !!}
                        @if (str_word_count($product['description3']) > 20)
                            <a href="{{ url()->current() . '?page=more' }}"></a>
                        @endif
                    </td>
                        {{-- <td>{{ $product['description3'] }}</td> --}}
                        <td>{{ $product['location'] }}</td>
                        <td>{{ $product['time'] }}</td>
                        {{-- <td>{{ $product['period'] }}</td> --}}
                        <td>
                          {!! Illuminate\Support\Str::limit($product['period'], 10) !!}
                          @if (str_word_count($product['period']) > 10)
                              <a href="{{ url()->current() . '?page=more' }}"></a>
                          @endif
                      </td>
                        <td>{{ $product['total'] }}</td>
                        <td>
                          <img src="{{ $product->image }}" class="card-img" style="width: 100px" alt="{{ $product->name }}">

                        </td>  
                        <td><form action="productdelete/{{$product['id'] }}" method="POST" style="margin-bottom: 2px">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit" value="DELETE" style="width:70px">Delete</button>
                      </form >                   
                      <form action="productedit/{{ $product['id'] }}" method="" style="margin-bottom: 2px">
                        @csrf
                        <button class="btn btn-primary" type="submit" value="Update" style="width:70px">Edit</button>
                    </form> 
                    <form action="productview/{{ $product['id'] }}" method="" style="margin-bottom: 2px">
                      @csrf
                      <button class="btn btn-warning" type="submit" value="Update" style="width:70px">View</button>
                  </form> 
                  
                    </td>
                     @endforeach   
                </tbody>
            </table>
        </div>
 @endsection
