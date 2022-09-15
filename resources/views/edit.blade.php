@extends('layouts.main_template')


@section('main_content')
    <div class="container mb-4 mt-2">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class="mt-3 mb-3 text-center table-title">Edit</h1>
                <form class="text-white" action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}"
                            required>
                    </div>
                    {{-- Image URL --}}
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Image URL</label>
                        <input type="text" class="form-control" name="image_url" id="image_url"
                            value="{{ $comic->thumb }}">
                    </div>
                    {{-- Series --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" name="series" id="series"
                            value="{{ $comic->series }}" required>
                    </div>
                    {{-- Type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}"
                            required>
                    </div>
                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}"
                            required>
                    </div>
                    {{-- Sale date --}}
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date"
                            value="{{ $comic->sale_date }}" required>
                    </div>
                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description"id="description" rows="6" aria-describedby="descriptionHelp"
                            required>{{ $comic->description }}</textarea>
                        <div class="text-white-50" id="descriptionHelp" class="form-text">Please insert your comic
                            description.</div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning fw-bold">Modify</button>
                </form>
            </div>
        </div>

    </div>
@endsection
