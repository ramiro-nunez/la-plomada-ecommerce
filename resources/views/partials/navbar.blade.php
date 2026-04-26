<!-- Componente del navbar -->
<nav class="navbar navbar-expand-lg navbar-plomada">
  <div class="container-fluid d-flex justify-content-center">
      <a class="navbar-brand  {{ request()->is('/') ? 'nav-active' : ''}}" href="/home">La plomada</a>
      <button class="navbar-toggler position-absolute end-0" data-as-theme="white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center" >
          <a class="nav-link {{ request()->is('quienes-somos') ? 'nav-active' : ''}}" href="/quienes-somos">Quienes Somos</a>
          <a class="nav-link {{ request()->is('comercio') ? 'nav-active' : ''}}" href="/comercio" >Comercializacion</a>
          <a class="nav-link {{ request()->is('productos') ? 'nav-active' : ''}}" href="/productos" >Catálogo</a>
          <a class="nav-link {{ request()->is('terms') ? 'nav-active' : ''}}" href="/terms">Terminos y condiciones</a>
          <a class="nav-link {{ request()->is('contactanos') ? 'nav-active' : ''}}" href="/contactanos">Contacto</a>
        </div>
      </div>
      <a class="btn btn-success mx-4" href="/">Iniciar Sesión</a>
  </div>
</nav>