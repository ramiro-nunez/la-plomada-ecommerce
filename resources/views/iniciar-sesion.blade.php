@extends('app')

@section('title', 'Iniciar-Sesion')

@section('content')
<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="card shadow-lg bg">
        <h3 class="mx-4 mt-3">Iniciar Sesión</h3>
        <div class="m-3">
          <form action="">
            <label class="form-label mx-2" for="">Correo electrónico</label>
            <input class="form-control" type="email" placeholder="ejemplo@gmail.com">
            <label class="form-label mx-2" for="">Contraseña</label>
            <input class="form-control" type="password" placeholder="********">
            <span>¿No posee una cuenta?</span><a class="btn btn-info m-2" href="/registrarse">Registrese</a>
            <div class="row m-1 ">
              <a class="btn btn-success mt-3 mx-auto"  href="/" >Ingresar</a>
              <a class="btn btn-danger mt-2 mx-auto">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection