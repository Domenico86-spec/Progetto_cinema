<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Homepage</a>
        </li>
        @guest

        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        

        @endguest
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Films</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit();">Logout</a></li>
            <form method="POST" action="{{route('logout')}}"  id="logout">@csrf</form>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        @endauth
        
      </ul>
      
    </div>
  </div>
</nav>