@extends('layouts.main_template')


@section('main_content')
    <div class="container d-flex justify-content-center mt-5">
<div class="card text-center">
    <div class="card-header">
      <img class="w-50 rounded-4 p-2" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div class="card-body">
      <h5 class="card-title fw-bold">{{ $comic->title }}</h5>
      <p class="card-text">{{ $comic->description }}</p>
      <p class="card-text fst-italic fw-bold">{{ $comic->series }}</p>
      <p class="card-text fst-italic fw-bold">{{ $comic->sale_date }}</p>
      <p class="card-text fst-italic fw-bold">{{ $comic->type }}</p>
      
    </div>
    <div class="card-footer fw-bold">
       $ {{ $comic->price }}
    </div>
  </div>
</div>
@endsection