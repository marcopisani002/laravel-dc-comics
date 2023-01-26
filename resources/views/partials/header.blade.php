{{-- <header>
 
    Dobbiamo recuperare l'url finale dove si troverà l'immagine desiderata
  Tramite Vite::asset() andiamo a fare esattamente questo
  
  <img src="{{ Vite::asset('resources/img/marchio-sito-test.png') }}" alt="">

  

    <div>
        Nome rotta attuale: {{ Route::currentRouteName()}}
    </div>

  <nav>
    <ul class="list2">
      <li><a href="/" class="{{ Route::currentRouteName() === 'home' ? 'text-danger' : '' }}">Home</a></li>
      <li><a href="{{ route('posts') }}" class="{{ Route::currentRouteName() === 'posts' ? 'text-danger' : '' }}">Post</a></li>
      <li><a href="{{ route('contacts') }}"  class="{{ Route::currentRouteName() === 'contacts' ? 'text-danger' : '' }}">Contatti</a></li>
    </ul>
  </nav>
</header> --}}

<header class="border-bottom border-primary border-3">
    <div class="container ">
        <nav class="navbar navbar-expand-lg bg-white ">
            <div class="container-fluid">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }} " style="height:50px " alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav " style="">
                        <li class="nav-item px-3">
                            <a class="nav-link text-black fw-bold " aria-current="page" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold">NEWS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-black fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                SHOP
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex px-3" role="search">
                        <input class="form-control me-2 border-0 border-bottom border-primary border-3 rounded-0 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
    </div>
    </nav>
    </div>
</header>
