<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
      </li>
    </ul>
    <div class="navbar-nav ml-auto">
      <form action="{{route('logout')}}" method="POST" class="d-flex align-items-start" role="search">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>

      
  </nav>