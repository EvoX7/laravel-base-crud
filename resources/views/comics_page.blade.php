@extends('layouts.main_template')


@section('main_content')
    <div class="container mt-5">
        <div class="row">

            <h1 class="mt-3 mb-5 text-center table-title">Greatest Comics</h1>

            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }} has been removed successfully.
                </div>
            @elseif (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }} has been created successfully.
                </div>
            @endif

            <table class="table table-secondary table-striped">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th class="px-3" scope="col">Edit</th>
                    <th class="px-3" scope="col">Delete</th>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td class="fw-bold"> <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }}</a>
                            </td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>$ {{ $comic->price }}</td>
                            <td>
                                <a class="btn btn-warning fw-bold" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            </td>
                            <td>
                                <form class="text-white" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger fw-bold">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <h3 class="fs-1 text-center mt-5 text-white">No comics available</h3>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
