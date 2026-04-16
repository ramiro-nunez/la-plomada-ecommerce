@extends('app')

@section('title', 'Productos - La Plomada')

@section('content')
<div class="fondo pb-2">
    <section class="encabezado-catalogo d-flex align-items-center justify-content-center">
        <h1 class="display-3 text-white fw-bold">CATÁLOGOoo  ooo</h1>
    </section>
    <!-- container Reeles -->
    <section class="mt-0" style="background-color: #2D4030;">
    <div class="container py-5">
        <h2 class="text-center subtitulo-seccion text-white fw-bold mb-5">Reeles</h2>
        <div class="row justify-content-evenly align-items-center g-4">
            <!-- card reel1 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/reel1.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$85.000</h4>
                    <h5 class="fw-semibold mb-0">Reel Frontal Daiwa Sweepfire 4000</h5>
                </div>
            </div>
            <!-- card reel2 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/reel2.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$195.000</h4>
                    <h5 class="fw-semibold mb-0">Reel Rotativo Abu Garcia Black Max (Huevito)</h5>
                </div>
            </div>
            <!-- card reel3 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/reel3.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$280.000</h4>
                    <h5 class="fw-semibold mb-0">Reel Rotativo Penn Squall Level Wind (Trolling)</h5>
                </div>
            </div>  
        </div>
    </div>
    </section>
    <!-- container Cañas -->
    <section class=" my-5">
    <div class="container">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Cañas</h2>
        <div class="row justify-content-evenly align-items-center g-4">
            <!-- card caña1 -->
            <div class="col-sm-3">
                <div class="border shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/cana1.png') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$145.000</h4>
                    <h5 class="fw-semibold mb-0">Caña Telescópica Shimano FX (3.00m)</h5>
                    <!-- <p class="text-muted small mb-4">
                        Caña telescópica de fibra de vidrio reforzada. Ideal para la pesca de pejerrey o variada de río. Su diseño compacto la hace perfecta para transportar en el baúl del auto. Acción media y pasahilos de óxido de aluminio.
                    </p> -->
                </div>
            </div>
            <!-- card caña2 -->
            <div class="col-sm-3">
                <div class="border shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/cana2.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$210.000</h4>
                    <h5 class="fw-semibold mb-0">Caña Baitcasting Marine Sports Titan (1.98m)</h5>
                </div>
            </div>
            <!-- card caña3 -->
            <div class="col-sm-3">
                <div class="border shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/cana3.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$185.000</h4>
                    <h5 class="fw-semibold mb-0">Caña de Mosca Waterdog Fly Series (#5)</h5>
                </div>
            </div>  
        </div>
    </div>
    </section>
    <!-- container Accesorios y Herramientas -->
    <section class=" " style="background-color: #1B263B;">
    <div class="container py-5">
        <h2 class="text-center text-white subtitulo-seccion fw-bold mb-5">Accesorios y Herramientas</h2>
        <div class="row justify-content-evenly align-items-center g-4">
            <!-- card herramienta1 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/señuelo1.png') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$32.000</h4>
                    <h5 class="fw-semibold mb-0">Señuelo Rapala Super Shad Rap (14cm)</h5>
                </div>
            </div>
            <!-- card herramienta2 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/señuelo2.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$12.500</h4>
                    <h5 class="fw-semibold mb-0">Señuelo Cuchara Giratoria Mepps Aglia (N°4)</h5>
                </div>
            </div>
            <!-- card herramienta3 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/hilo.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$48.000</h4>
                    <h5 class="fw-semibold mb-0">Hilo Multifilamento Sufix 832 (Rollo 150m)</h5>
                </div>
            </div>  
        </div>
        <div class="row justify-content-evenly align-items-center g-4 mt-1">
            <!-- card herramienta4 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/anzuelo.png') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$15.000</h4>
                    <h5 class="fw-semibold mb-0">Caja de Anzuelos Mustad Serie 92247 (x50 unidades)</h5>
                </div>
            </div>
            <!-- card herramienta5 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/caja.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$65.000</h4>
                    <h5 class="fw-semibold mb-0">Caja de Pesca Plano 3 Bandejas Articuladas</h5>
                </div>
            </div>
            <!-- card herramienta6 -->
            <div class="col-sm-3">
                <div class="shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/pinza.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$22.000</h4>
                    <h5 class="fw-semibold mb-0">Pinza de Pesca Multifunción Spinit (Acero Inox)</h5>
                </div>
            </div>  
        </div>
    </div>
    </section>
    <!-- container Indumentaria -->
    <section class=" my-5 ">
    <div class="container">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Indumentaria</h2>
        <div class="row row-cols-3 justify-content-evenly align-items-center g-4">
            <!-- card caña1 -->
            <div class="col-sm-3 p-2 p-md-3">
                <div class="border shadow-sm text-center p-4 product-card">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/camisa.png') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$110.000</h4>
                    <h5 class="fw-semibold mb-0">Camisa de Pesca Columbia PFG con Filtro UV</h5>
                </div>
            </div>
            <!-- card caña2 -->
            <div class="col-sm-3">
                <div class="border shadow-sm text-center p-4 product-card">
                    <div class=" mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/wader.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class=" text-success fw-bold mb-0">$350.000</h4>
                    <h5 class=" fw-semibold mb-0">Wader de Neoprene Waterdog (4mm)</h5>
                </div>
            </div>
            <!-- card caña3 -->
            <div class="col-sm-3">
                <div class="border shadow-sm text-center p-4 product-card ">
                    <div class="mx-auto mb-1 overflow-hidden shadow-sm" style="width: 100%; height: 100%;">
                        <img src="{{ asset('img/catalogo/bolso.png') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fw-bold mb-0">$42.000</h4>
                    <h5 class="fw-semibold mb-0">Bolso Estanco DryBag 20 Litros</h5>
                </div>
            </div>  
        </div>
    </div>
    </section>
</div>
@endsection