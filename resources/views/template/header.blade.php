<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:white">
  <div class="container">
    <a class="navbar-brand" href="{{ route('page.home') }}">Edufun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @yield('menuHome')" aria-current="page" href="{{ route('page.home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @yield('menuCategory')" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            @foreach($categories as $cat)
            <li><a class="dropdown-item" href="{{ route('page.category.index', $cat->id) }}">{{$cat->name}}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('menuWriter')" href="{{ route('page.writer.show') }}">Writers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('menuAbout')" href="{{ route('page.about.show') }}">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>