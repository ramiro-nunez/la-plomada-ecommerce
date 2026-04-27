@extends('app')

@section('title', 'Registrarse')

@section('content')<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="card shadow-lg bg">
        <h2 class="mx-4 mt-3">Registrese</h2>
        <div class="m-3">
          <form action="">
            <label class="form-label mx-2" for="">Nombre</label>
            <input class="form-control" type="text" placeholder="Ingresa tu nombre">
            <label class="form-label mx-2" for="">Correo electrónico</label>
            <input class="form-control" type="email" placeholder="ejemplo@gmail.com">
            <label class="form-label mx-2" for="">Contraseña</label>
            <input class="form-control" type="password" placeholder="Ingrese una contraseña segura">
            <span>¿Ya posee una cuenta?</span><a class="btn btn-info m-2" href="/iniciar-sesion">Iniciar sesión</a>
            
            <div class="row m-1 ">
              <a class="btn btn-success mt-3 mx-auto"  href="/" type="submit">Registrarse</a>
              <a class="btn btn-danger mt-2 mx-auto"  href="/iniciar-sesion" type="cancel">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection