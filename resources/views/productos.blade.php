@extends('app')

@section('title', 'Productos - La Plomada')

@section('content')
<div class="fondo">
    <section class="encabezado-catalogo d-flex align-items-center justify-content-center">
        <h1 class="display-3 text-white fw-bold">CATÁLOGO</h1>
    </section>
    <section class="py-5 ">
    <div class="container">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Cañas</h2>
        <div class="row justify-content-center g-4">
            <!-- card caña1 -->
            <div class="col-md-5 col-lg-4">
                <div class="card border shadow-sm text-center p-4 dev-card h-100">
                    <div class="mx-auto mb-3 overflow-hidden shadow-sm" style="width: 140px; height: 140px; border: 4px solid #f8f9fa;">
                        <img src="{{ asset('img/devs/antonio.jpg') }}" alt="Antonio Quintana" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h5 class="fw-bold mb-1">Caña Telescópica Shimano FX (3.00m)</h5>
                    <h4 class="text-success fw-semibold mb-3">$145.000</h4>
                    <p class="text-muted small mb-4">
                        Caña telescópica de fibra de vidrio reforzada. Ideal para la pesca de pejerrey o variada de río. Su diseño compacto la hace perfecta para transportar en el baúl del auto. Acción media y pasahilos de óxido de aluminio.
                    </p>
                </div>
            </div>
            <!-- card caña2 -->
            <div class="col-md-5 col-lg-4">
                <div class="card border shadow-sm text-center p-4 dev-card h-100">
                    <div class="mx-auto mb-3 overflow-hidden shadow-sm" style="width: 140px; height: 140px; border: 4px solid #f8f9fa;">
                        <img src="{{ asset('img/devs/antonio.jpg') }}" alt="Antonio Quintana" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h5 class="fw-bold mb-1">Caña Baitcasting Marine Sports Titan (1.98m)</h5>
                    <h4 class="text-success fw-semibold mb-3">$210.000</h4>
                    <p class="text-muted small mb-4">
                        Diseñada para los pescadores más exigentes. Construida en fibra de carbono de alto módulo, ofrece una acción rápida ideal para dorados y tarariras. Mango de corcho ergonómico y gatillo sensitivo.
                    </p>
                </div>
            </div>
            <!-- card caña3 -->
            <div class="col-md-5 col-lg-4">
                <div class="card border shadow-sm text-center p-4 dev-card h-100">
                    <div class="mx-auto mb-3 overflow-hidden shadow-sm" style="width: 140px; height: 140px; border: 4px solid #f8f9fa;">
                        <img src="{{ asset('img/devs/antonio.jpg') }}" alt="Antonio Quintana" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h5 class="fw-bold mb-1">Caña de Mosca Waterdog Fly Series (#5)</h5>
                    <h4 class="text-success fw-semibold mb-3">$185.000</h4>
                    <p class="text-muted small mb-4">
                        El equipo perfecto para iniciarse en el Fly Cast. Acción media-rápida, 4 tramos para fácil transporte. Construida en grafito IM7, permite lances de precisión tanto en lagos patagónicos como en arroyos.
                    </p>
                </div>
            </div>  
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Reeles</h2>
        <div class="row justify-content-center g-4">
            <!-- card caña1 -->
            <div class="col-md-5 col-lg-4">
                <div class="card border shadow-sm text-center p-4 dev-card h-100">
                    <div class="mx-auto mb-3 overflow-hidden shadow-sm" style="width: 140px; height: 140px; border: 4px solid #f8f9fa;">
                        <img src="{{ asset('img/devs/antonio.jpg') }}" alt="Antonio Quintana" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h5 class="fw-bold mb-1">Caña Telescópica Shimano FX (3.00m)</h5>
                    <h4 class="text-success fw-semibold mb-3">$145.000</h4>
                    <p class="text-muted small mb-4">
                        Caña telescópica de fibra de vidrio reforzada. Ideal para la pesca de pejerrey o variada de río. Su diseño compacto la hace perfecta para transportar en el baúl del auto. Acción media y pasahilos de óxido de aluminio.
                    </p>
                </div>
            </div>
            <!-- card caña2 -->
            <div class="col-md-5 col-lg-4">
                <div class="card border shadow-sm text-center p-4 dev-card h-100">
                    <div class="mx-auto mb-3 overflow-hidden shadow-sm" style="width: 140px; height: 140px; border: 4px solid #f8f9fa;">
                        <img src="{{ asset('img/devs/antonio.jpg') }}" alt="Antonio Quintana" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h5 class="fw-bold mb-1">Caña Baitcasting Marine Sports Titan (1.98m)</h5>
                    <h4 class="text-success fw-semibold mb-3">$210.000</h4>
                    <p class="text-muted small mb-4">
                        Diseñada para los pescadores más exigentes. Construida en fibra de carbono de alto módulo, ofrece una acción rápida ideal para dorados y tarariras. Mango de corcho ergonómico y gatillo sensitivo.
                    </p>
                </div>
            </div>
            <!-- card caña3 -->
            <div class="col-md-5 col-lg-4">
                <div class="card border shadow-sm text-center p-4 dev-card h-100">
                    <div class="mx-auto mb-3 overflow-hidden shadow-sm" style="width: 140px; height: 140px; border: 4px solid #f8f9fa;">
                        <img src="{{ asset('img/devs/antonio.jpg') }}" alt="Antonio Quintana" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h5 class="fw-bold mb-1">Caña de Mosca Waterdog Fly Series (#5)</h5>
                    <h4 class="text-success fw-semibold mb-3">$185.000</h4>
                    <p class="text-muted small mb-4">
                        El equipo perfecto para iniciarse en el Fly Cast. Acción media-rápida, 4 tramos para fácil transporte. Construida en grafito IM7, permite lances de precisión tanto en lagos patagónicos como en arroyos.
                    </p>
                </div>
            </div>  
        </div>
    </div>
</section>
</div>
@endsection