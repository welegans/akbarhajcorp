<nav class="navbar navbar-inverse navbar-toggleable-md fixed-top" style="background:#2c2f33;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('imgs/l2.png')}}" width="50" alt="">

    Akbar Haj Corporation</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>

      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Umrah
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{route('aboutumrah')}}">About Umrah</a>
                <a class="dropdown-item" href="{{route('umrahpackages')}}">Umrah Packages</a>
              </div>
      </li>

      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Haj
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{route('abouthaj')}}">About Haj</a>
                <a class="dropdown-item" href="{{route('hajpackages')}}">Haj Packages</a>
              </div>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('contact')}}">Contact</a>
      </li>
    </ul>
  </div>
</nav>
