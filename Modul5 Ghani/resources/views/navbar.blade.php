<nav class="navbar navbar-expand bg-{{ $navbar }} navbar-dark">
  <div class="container py-2">
    @guest
      <div class="navbar-nav w-100 d-flex justify-content-between">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/login">Login</a>
      </div>
    @endguest

    @auth
      <div class="navbar-nav">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        <a class="nav-link {{ Request::is('showroom/*') || Request::is('showroom') ? 'active' : '' }}" href="/showroom">MyCar</a>
      </div>
      <div class="d-flex">
        <a href="/showroom/create" class="btn btn-light text-{{ $navbar }}">Add Car</a>
        <div class="dropdown ms-4">
          <button class="btn btn-light dropdown-toggle text-{{ $navbar }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-{{ $navbar }}" href="/profile">Profile</a></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-{{ $navbar }}">Logout</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    @endauth
  </div>
</nav>