 <!-- Heading -->
 <h6 class="navbar-heading text-muted">Gestión</h6>

<ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="./index.html">
        <i class="ni ni-tv-2 text-primary"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ url('/movtjvisa') }}">
        <i class="ni ni-credit-card text-danger"></i> Movimientos TjVisa
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/maps.html">
        <i class="ni ni-money-coins text-info"></i> Liquidación sueldos
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/profile.html">
        <i class="ni ni-single-02 text-yellow"></i> Gastos diarios
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="./examples/tables.html">
        <i class="ni ni-bullet-list-67 text-red"></i> Movimientos Naranja
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('formlogout').submit(); ">
        <i class="fas fa-sign-in-alt"></i> Cerrar sesión
      </a>
      <form action="{{ route('logout') }}" method="POST" style="display: none" id="formlogout">
        @csrf
      </form>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">Reportes</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-spaceship"></i> Resumenes
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-book-bookmark text-default"></i> Liquidación Provisoria
      </a>
    </li>
    
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item active active-pro">
      <a class="nav-link" href="./examples/upgrade.html">
        <i class="ni ni-send text-dark"></i> Upgrade to PRO
      </a>
    </li>
  </ul>