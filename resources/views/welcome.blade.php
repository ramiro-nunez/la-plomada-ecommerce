<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Plomada</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
    <!-- Componente del navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">La plomada</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " href="/quienes-somos">Quienes Somos</a>
        <a class="nav-link" href="/comercializacion">Comercializacion</a>
        <a class="nav-link" href="/terminos-y-condiciones">Terminos y condiciones</a>
        <a class="nav-link" href="/contacto">Contacto</a>
      </div>
    </div>
  </div>
</nav>
    <!-- Fin Navbar -->
<div class="container text-center">Bienvenido</div>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>