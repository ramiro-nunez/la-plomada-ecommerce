@props(['producto'])

<div class="col-12 col-sm-6 col-md-3 p-2 p-md-3">
    <div class="border text-center product-card-dark">
        <div class="mx-auto mb-1 overflow-hidden product-img">
            <img src="{{ asset($producto['imagen']) }}" class="w-100 h-100 object-fit-cover" alt="{{ $producto['titulo'] }}">
        </div>
        <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">${{ number_format($producto['precio'], 0, ',', '.') }}</h4>
        <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">{{ $producto['titulo'] }}</h5>
    </div>
</div>
