<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="../img/descarga.png" alt="" width="14%" height="14%"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#l">Inicio</a></li>
      <li><a href="#">configuaracion</a></li>
      <li><a href="#">clientes</a></li>
      <li><a href="#">servicios</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>

  </div>
  <script>
  $(".dropdown-trigger").dropdown();
  </script>
</nav>