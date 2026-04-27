@extends('app')

@section('title', 'Registrarse')

@section('content')<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="card shadow-lg bg">
        <h3 class="mx-4 mt-3">Registrese</h3>
        <div class="m-3">
          <form action="{{url('/registrarse') }}" method="POST">
          @csrf
            <label class="form-label mx-2" for="nombre">Nombre</label>
            <input name="nombre" class="form-control" type="text" placeholder="Ingresa tu nombre" required>
            <label class="form-label mx-2" for="email">Correo electrónico</label>
            <input name="email" class="form-control" type="email" placeholder="ejemplo@gmail.com" required>
            <label class="form-label mx-2" for="contrasena">Contraseña</label>
            <input name="contrasena" class="form-control" type="password" placeholder="Ingrese una contraseña segura" required>
            <span>¿Ya posee una cuenta?</span><a class="btn btn-info m-2" href="/iniciar-sesion">Iniciar sesión</a>
            
            <div class="row m-1 ">
              <button type="submit" class="btn btn-success mt-3 mx-auto">Registrarse</button>
              <a class="btn btn-danger mt-2 mx-auto"  href="/" type="cancel"> Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection