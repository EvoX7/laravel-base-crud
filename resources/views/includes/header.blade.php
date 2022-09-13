<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
       <a href="{{ route('homepage') }}"><img class="me-5 logo-img" src="../assets/img/comics_logo.png" alt="comics_logo"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-bold text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-white" href="{{ route('comicsPage') }}">Comics</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline fw-bold" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


