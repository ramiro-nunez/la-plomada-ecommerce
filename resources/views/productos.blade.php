@extends('app') <!-- Se extiende del padre app -->

@section('title', 'Productos')
@section('content')

<div class="fondo pb-2">
    <section class="encabezado-catalogo d-flex align-items-center justify-content-center">
        <h1 class="display-3 text-white fw-bold">CATÁLOGO</h1>
    </section>
    
    <div id="contenedor-productos">
        <!-- El contenido será inyectado aquí por public/js/app.js utilizando db-fake.js -->
    </div>
</div>

@endsection