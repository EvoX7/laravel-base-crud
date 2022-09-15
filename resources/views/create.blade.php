@extends('layouts.main_template')


@section('main_content')
    <div class="container mb-4 mt-2">
        <div class="row">
            <div class="col-6 offset-3">
              <h1 class="mt-3 mb-3 text-center table-title">New entry</h1>
                <form class="text-white" action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    {{-- Title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    {{-- Image URL --}}
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Image URL</label>
                        <input type="text" class="form-control" name="image_url" id="image_url">
                    </div>
                    {{-- Series --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" name="series" id="series" required>
                    </div>
                    {{-- Type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" id="type" required>
                    </div>
                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price" required>
                    </div>
                    {{-- Sale date --}}
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date" required>
                    </div>
                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description"id="description" rows="6"
                            aria-describedby="descriptionHelp" required></textarea>
                        <div class="text-white-50" id="descriptionHelp" class="form-text">Please insert your comic description.</div>
                    </div>
                    <button type="submit" class="btn btn-warning fw-bold">Submit</button>
                </form>


            </div>
        </div>

    </div>
@endsection
