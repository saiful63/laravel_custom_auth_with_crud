<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">SdsCodingTest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">


        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('RoleIndex') }}">Role</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('AssignUser') }}">Assign User</a>
          </li>

        @endguest
      </ul>
    </div>
  </div>
</nav>
