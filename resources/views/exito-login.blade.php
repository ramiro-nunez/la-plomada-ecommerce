@extends('app')

@section('title', 'Bienvenido')

@section('content')
<section class="mx-auto border-0 p-3 justify-content-center align-items-center">
    <div class="card card-body text-start shadow">
        <p class="lead"> 
            Hola <strong> {{ $email }}</strong>, qué bueno recibir tu mensaje. 
            <br>Un miembro del equipo de ventas se pondrá en contacto con vos al correo: <strong>{{ $email }}</strong> 
            <br>¡Muchas gracias! 
        </p>
        <a class="btn btn-outline-success mx-4" href="/">Volver al Inicio</a>
    </div>
</section>
@endsection