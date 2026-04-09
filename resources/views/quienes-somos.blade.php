@extends('app')

@section('title', 'Quiénes Somos - La Plomada')

@section('content')
<div class="bg-light">
    <section class="text-white d-flex align-items-center justify-content-center quienes-hero">
        <h1 class="display-3 fw-bold">Sobre Nosotros</h1>
    </section>

    <section class="py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-info shadow-sm p-4 p-md-5">
                        <h2 class="text-primary fw-bold mb-4">Nuestra Historia</h2>
                        <div class="text-muted lh-lg">
                            <p>
                                <strong>La Plomada</strong> nació de la pasión por el Paraná y el aire libre, 
                                buscando crear un espacio donde los aventureros de Corrientes y todo el país 
                                encuentren el equipo ideal.
                            </p>
                            <p>
                                Lo que empezó como un sueño entre amigos pescadores ha crecido gracias a la 
                                confianza de nuestra comunidad. Nos dedicamos a seleccionar solo lo mejor 
                                para que tu única preocupación sea disfrutar del pique.
                            </p>
                            <p>
                                Hoy, seguimos con la misma esencia: equipar tus aventuras y ayudarte a crear 
                                recuerdos inolvidables en contacto con la naturaleza.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Nuestros Valores</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 border rounded-3 h-100 shadow-hover">
                        <i class="bi bi-heart-fill text-primary display-5 mb-3"></i>
                        <h3 class="h5 fw-bold">Pasión por la Naturaleza</h3>
                        <p class="small text-muted">Amamos lo que hacemos y compartimos tu pasión por las actividades al aire libre.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 border rounded-3 h-100 shadow-hover">
                        <i class="bi bi-award-fill text-primary display-5 mb-3"></i>
                        <h3 class="h5 fw-bold">Calidad Garantizada</h3>
                        <p class="small text-muted">Seleccionamos cuidadosamente productos de marcas reconocidas y confiables.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 border rounded-3 h-100 shadow-hover">
                        <i class="bi bi-people-fill text-primary display-5 mb-3"></i>
                        <h3 class="h5 fw-bold">Comunidad</h3>
                        <p class="small text-muted">Somos más que una tienda, somos una comunidad de aventureros y pescadores.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 border rounded-3 h-100 shadow-hover">
                        <i class="bi bi-target text-primary display-5 mb-3"></i>
                        <h3 class="h5 fw-bold">Compromiso</h3>
                        <p class="small text-muted">Nos comprometemos con tu satisfacción y el cuidado del medio ambiente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3">
                    <div class="display-5 fw-bold">10+</div>
                    <div class="small opacity-75">Años de Experiencia</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="display-5 fw-bold">50K+</div>
                    <div class="small opacity-75">Clientes Satisfechos</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="display-5 fw-bold">500+</div>
                    <div class="small opacity-75">Productos</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="display-5 fw-bold">24/7</div>
                    <div class="small opacity-75">Atención</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Un Equipo Apasionado</h2>
            <div class="card border-0 shadow-sm p-4 max-w-700 mx-auto">
                <p class="text-muted mb-0">
                    No somos solo vendedores, somos <strong>compañeros de aventura</strong>. 
                    Cada miembro de nuestro equipo ha probado los productos que ofrecemos y puede darte 
                    consejos basados en experiencia real.
                </p>
            </div>
        </div>
    </section>
</div>
@endsection