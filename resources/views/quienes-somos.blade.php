@extends('app')
@section('title', 'Quienes somos')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Sobre mí</h1>
            <p><b>Nombre:</b> Antonio Quintana</p> 

            <p><b>Edad:</b> 26 años</p> 
            
            <p><b>De dónde soy:</b> Corrientes, Argentina</p> 
            
            <p><b>Me gustaría trabajar en:</b> Desarrollo de software</p> 
            
            <p><b>Expectativas del curso:</b> Aprender a crear aplicaciones 
            web</p> 
        </div>
    </div>
    
    <a href="#" class="btn btn-primary mt-3">Descargar CV</a>
    <a href="/contacto" class="btn btn-secondary mt-3">Conectar</a>
</div>
@endsection