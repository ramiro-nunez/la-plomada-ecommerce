@extends('app') <!-- Se extiende del padre app -->

@section('title', 'Productos')
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
            <!-- card reel1 -->
            <div class="col-sm-3">
                <div class=" text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="{{ asset('img/catalogo/reel1.jpg') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$85.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Reel Frontal Daiwa Sweepfire 4000</h5>
                </div>
            </div>
            <!-- card reel2 -->
            <div class="col-sm-3">
                <div class=" text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="{{ asset('img/catalogo/reel2.jpg') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$195.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Reel Rotativo Abu Garcia Black Max</h5>
                </div>
            </div>
            <!-- card reel3 -->
            <div class="col-sm-3">
                <div class=" text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="{{ asset('img/catalogo/reel3.jpg') }}" class="w-100 h-100 ">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$280.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Reel Rotativo Penn Squall Level Wind</h5>
                </div>
            </div>  
        </div>
    </div>
    </section>
    <!-- container Cañas -->
    <section class=" my-5">
    <div class="container">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Cañas</h2>
        <div class="row justify-content-center align-items-center g-4">
            <!-- card caña1 -->
            <div class="col-sm-3">
                <div class="border text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="{{ asset('img/catalogo/cana1.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$145.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Caña Telescópica Shimano FX (3.00m)</h5>
                </div>
            </div>
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
        </div>
    </div>
    </section>
    <!-- container Accesorios y Herramientas -->
    <section class=" " style="background-color: #1B263B;">
    <div class="container py-5">
        <h2 class="text-center text-white subtitulo-seccion fw-bold mb-5">Accesorios y Herramientas</h2>
        <div class="row justify-content-center align-items-center g-4">
            <!-- card herramienta1 -->
            <div class="col-sm-3">
                <div class="text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/señuelo1.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$32.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Señuelo Rapala Super Shad Rap (14cm)</h5>
                </div>
            </div>
            <!-- card herramienta2 -->
            <div class="col-sm-3">
                <div class="text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img">
                        <img src="{{ asset('img/catalogo/señuelo2.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$12.500</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Señuelo Cuchara Giratoria Mepps Aglia (N°4)</h5>
                </div>
            </div>
            <!-- card herramienta3 -->
            <div class="col-sm-3">
                <div class="text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/hilo.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$48.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Hilo Multifilamento Sufix 832 (Rollo 150m)</h5>
                </div>
            </div>  
        </div>
        <div class="row justify-content-center align-items-center g-4 mt-1">
            <!-- card herramienta4 -->
            <div class="col-sm-3">
                <div class="text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/anzuelo.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$15.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Caja de Anzuelos Mustad Serie 92247 (x50 unidades)</h5>
                </div>
            </div>
            <!-- card herramienta5 -->
            <div class="col-sm-3">
                <div class="text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/caja.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$65.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Caja de Pesca Plano 3 Bandejas Articuladas</h5>
                </div>
            </div>
            <!-- card herramienta6 -->
            <div class="col-sm-3">
                <div class="text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/pinza.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$22.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Pinza de Pesca Multifunción Spinit (Acero Inox)</h5>
                </div>
            </div>  
        </div>
    </div>
    </section>
    <!-- container Indumentaria -->
    <section class=" my-5 ">
    <div class="container">
        <h2 class="text-center subtitulo-seccion fw-bold mb-5">Indumentaria</h2>
        <div class="row justify-content-center align-items-center g-4">
            <!-- card indumentaria1 -->
            <div class="col-sm-3 p-2 p-md-3">
                <div class="border text-center product-card-dark">
                    <div class="mx-auto mb-1 overflow-hidden product-img" >
                        <img src="{{ asset('img/catalogo/camisa.jpg') }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$110.000</h4>
                    <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">Camisa de Pesca Columbia PFG con Filtro UV</h5>
                </div>
            </div>
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
        </div>
    </div>
    </section>
</div>
@endsection