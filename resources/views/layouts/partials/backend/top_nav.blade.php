<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="{{ route('logout') }}">Sair</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="{{ route('logout') }}">Sair</a></li>
</ul>


<div class="navbar-fixed">
  <nav class="blue darken-3">
    <div class="nav-wrapper stee-navegation">
      <a href="#!"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="#!" class="brand-logo">STEE</a>
      {{-- ====================Sera mostrado em Dispositivo Grandes=================== --}}
      <ul class="right hide-on-med-and-down">
        <li><a href="badges.html">Home</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Estefanio silva<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      {{-- ================================================================================ --}}


      {{-- ====================Sera mostrado em Dispositivo Piquenos====================== --}}
      <ul class="right hide-on-large-only">
        <li><a class="dropdown-button waves-effect waves-light btn  blue darken-2 z-depth-5" href="#!" data-activates="dropdown2"><i class="material-icons">expand_more</i></a></li>
      </ul>
      {{-- ================================================================================ --}}

    </div>



  </nav>
</div>
