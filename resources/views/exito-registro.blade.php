@extends('app')

@section('title', 'Registro exitoso')

@section('content')
<section class="d-flex mx-auto border-0 p-3 justify-content-center">
    <div class="col-12 col-md-8"><div class="card card-body text-start shadow">
        <p class="lead"> 
            Hola <strong> {{ $nombre }}</strong>, qué bueno que te hayas registrado. 
            <br>Corré a mirar todos los productos que tenemos disponibles para vos! 
            <br>¡Muchas gracias! 
        </p>
        <a class="btn btn-outline-success mx-4" href="/">Volver al Inicio</a>
    </div></div>
    
</section>
@endsection