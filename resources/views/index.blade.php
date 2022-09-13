@extends('layouts.main_template')


@section('comics-table')
<div class="container mt-5">
    <h1 class="mt-5 text-center">Greatest Comics</h1>
    
@forelse ($comics as $comic)
<table class="table table-dark table-striped mt-3 text-center">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Pice</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->thumb }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
          </tr>
        </tbody>
      </table>
    

      @empty
   <h3 class="fs-1 text-center mt-5">No Comics available</h3>
 @endforelse
</div>

@endsection