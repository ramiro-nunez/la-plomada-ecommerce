@extends('app')
@section('title', 'Contacta con nosotros')

@section('content')
<div class="container mt-4">
<div class="card mt-4">
    <div class="card-body">
        <h2>Formulario de contacto</h2>
        <form action="{{url('/contacto')}}" method="POST"> <!--Hay que poner la
            ruta a donde se envia la informacion del form y el metodo-->
            @csrf <!-- Lo que hace es enviar un token de validacion -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Ingrese su nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" id="email" type="email" class="form-control" placeholder="Ingrese su email">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="3" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar mensaje
            </button>
        </form>
    </div>
</div>
</div>@endsection