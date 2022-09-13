<div class="container mt-5">
    <div class="row">
            <h1 class="mt-5 text-center">Greatest Comics</h1>

            @forelse ($comics as $comic)
                
            <div class="card col-4 p-3 m-2 text-center">
                <div class="card-img">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold">{{ $comic->title }}</h5>
                  <p class="card-text">{{ $comic->description }}</p>
                  <p class="card-text fw-bold">{{ $comic->price }}</p>
                  <p class="card-text">{{ $comic->series }}</p>
                  <p class="card-text">{{ $comic->sale_date }}</p>
                </div>
                <div class="card-footer text-muted">
                    {{ $comic->type }}
                </div>
              </div>
        
            @empty
            <h1>NO COMICS AVAILABLE</h1>
                
            @endforelse
        </div>
    </div>
    
