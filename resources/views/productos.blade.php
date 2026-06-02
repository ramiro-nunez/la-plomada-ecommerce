@extends('app') <!-- Se extiende del padre app -->

@section('title', 'Productos')
<?php
$productosCanas = [
    // --- CAÑAS ---
    [
        'nombre' => 'Caña Telescópica Shimano FX (3.00m)',
        'precio' => 145000,
        'imagen' => 'cana1.jpg'
    ],
    [
        'nombre' => 'Caña Baitcasting Marine Sports Titan (1.98m)',
        'precio' => 210000,
        'imagen' => 'cana2.jpg'
    ],
    [
        'nombre' => 'Caña de Mosca Waterdog Fly Series (#5)',
        'precio' => 185000,
        'imagen' => 'cana3.jpg'
    ]
];
$productosReeles = [
    // --- REELES ---
    [
        'nombre' => 'Reel Frontal Daiwa Sweepfire 4000',
        'precio' => 85000,
        'imagen' => 'reel1.jpg'
    ],
    [
        'nombre' => 'Reel Rotativo Abu Garcia Black Max (Huevito)',
        'precio' => 195000,
        'imagen' => 'reel2.jpg'
    ],
    [
        'nombre' => 'Reel Rotativo Penn Squall Level Wind (Trolling)',
        'precio' => 280000,
        'imagen' => 'reel3.jpg'
    ]
];
$productosHerramientas = [
    // --- SEÑUELOS Y LÍNEAS ---
    [
        'nombre' => 'Señuelo Rapala Super Shad Rap (14cm)',
        'precio' => 32000,
        'imagen' => 'señuelo1.jpg'
    ],
    [
        'nombre' => 'Señuelo Cuchara Giratoria Mepps Aglia (N°4)',
        'precio' => 12500,
        'imagen' => 'señuelo2.jpg'
    ],
    [
        'nombre' => 'Hilo Multifilamento Sufix 832 (150m - 40lbs)',
        'precio' => 48000,
        'imagen' => 'hilo.jpg'
    ],
    [
        'nombre' => 'Caja de Anzuelos Mustad Serie 92247 (x50 unidades)',
        'precio' => 15000,
        'imagen' => 'anzuelo.jpg'
    ],

    // --- ACCESORIOS Y HERRAMIENTAS ---
    [
        'nombre' => 'Caja de Pesca Plano 3 Bandejas Articuladas',
        'precio' => 65000,
        'imagen' => 'caja.jpg'
    ],
    [
        'nombre' => 'Pinza de Pesca Multifunción Spinit (Acero Inox)',
        'precio' => 22000,
        'imagen' => 'pinza.jpg'
    ]
];
$productosIndumentaria = [
    // --- INDUMENTARIA TÉCNICA ---
    [
        'nombre' => 'Wader de Neoprene Waterdog (4mm)',
        'precio' => 350000,
        'imagen' => 'wader.jpg'
    ],
    [
        'nombre' => 'Camisa de Pesca Columbia PFG con Filtro UV',
        'precio' => 110000,
        'imagen' => 'camisa.jpg'
    ],
    [
        'nombre' => 'Bolso Estanco DryBag 20 Litros',
        'precio' => 42000,
        'imagen' => 'bolso.jpg'
    ]
];
?>
@section('content')
<div class="fondo pb-2">
    <section class="encabezado-catalogo d-flex align-items-center justify-content-center">
        <h1 class="display-3 text-white fw-bold">CATÁLOGO</h1>
    </section>
    <!-- container Reeles -->
    <section class=" " style="background-color: #2D4030;">
    <div class="container py-5">
        <h2 class="text-center subtitulo-seccion text-white fw-bold mb-5">Reeles</h2>
        <div class="row justify-content-center align-items-center g-4">
            <!-- card reel -->
            @foreach ($productosReeles as $reel)
            <div class="col-sm-3">
                <div class=" text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="/img/catalogo/{{ $reel['imagen'] }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">{{ $reel['precio'] }} </h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">{{ $reel['nombre'] }} </h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
    <!-- container Cañas -->
    <section class=" my-5">
    <div class="container">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Cañas</h2>
        <div class="row justify-content-center align-items-center g-4">
            <!-- card caña -->
            @foreach ($productosCanas as $cana)
            <div class="col-sm-3">
<<<<<<< HEAD
                <div class=" text-center product-card-dark">
=======
                <div class="border text-center product-card-dark">
>>>>>>> 88c79fcc5ddc846db5ba28a07809265bef6cc92b
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="/img/catalogo/{{ $cana['imagen'] }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">{{ $cana['precio'] }} </h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">{{ $cana['nombre'] }} </h5>
                </div>
            </div>
<<<<<<< HEAD
            @endforeach
=======
            <!-- card caña2 -->
            <div class="col-sm-3">
                <div class="border text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="{{ asset('img/catalogo/cana2.jpg') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$210.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Caña Baitcasting Marine Sports Titan (1.98m)</h5>
                </div>
            </div>
            <!-- card caña3 -->
            <div class="col-sm-3">
                <div class="border text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/cana3.jpg') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$185.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Caña de Mosca Waterdog Fly Series (#5)</h5>
                </div>
            </div>  
>>>>>>> 88c79fcc5ddc846db5ba28a07809265bef6cc92b
        </div>
    </div>
    </section>
    <!-- container Accesorios y Herramientas -->
    <section class=" " style="background-color: #1B263B;">
    <div class="container py-5">
        <h2 class="text-center text-white subtitulo-seccion fw-bold mb-5">Accesorios y Herramientas</h2>
        <div class="row justify-content-center align-items-center g-4">
            <!-- card herramienta -->
            @foreach ($productosHerramientas as $herramienta)
            <div class="col-sm-3">
                <div class=" text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="/img/catalogo/{{ $herramienta['imagen'] }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">{{ $herramienta['precio'] }} </h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">{{ $herramienta['nombre'] }} </h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
    <!-- container Indumentaria -->
    <section class=" my-5 ">
    <div class="container">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Indumentaria</h2>
        <div class="row justify-content-center align-items-center g-4">
<<<<<<< HEAD
            <!-- card indumentaria -->
            @foreach ($productosIndumentaria as $indumentaria)
            <div class="col-sm-3">
                <div class=" text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="/img/catalogo/{{ $indumentaria['imagen'] }}" class="w-100 h-100 ">
=======
            <!-- card indumentaria1 -->
            <div class="col-sm-3 p-2 p-md-3">
                <div class="border text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/camisa.jpg') }}" class="w-100 h-100 object-fit-cover">
>>>>>>> 88c79fcc5ddc846db5ba28a07809265bef6cc92b
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">{{ $indumentaria['precio'] }} </h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">{{ $indumentaria['nombre'] }} </h5>
                </div>
            </div>
<<<<<<< HEAD
            @endforeach
=======
            <!-- card indumentaria2 -->
            <div class="col-sm-3">
                <div class="border text-center product-card-dark">
                    <div class=" mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/wader.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class=" text-success fs-6 fs-sm-3 fw-bold mb-0">$350.000</h4>
                    <h5 class=" fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Wader de Neoprene Waterdog (4mm)</h5>
                </div>
            </div>
            <!-- card indumentaria3 -->
            <div class="col-sm-3">
                <div class="border text-center product-card-dark ">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/bolso.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$42.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Bolso Estanco DryBag 20 Litros</h5>
                </div>
            </div>  
>>>>>>> 88c79fcc5ddc846db5ba28a07809265bef6cc92b
        </div>
    </div>
    </section>
</div>
@endsection