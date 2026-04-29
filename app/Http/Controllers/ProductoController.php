<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = [
            ['id' => 1, 'titulo' => 'Reel Frontal Daiwa Sweepfire 4000', 'precio' => 85000, 'categoria' => 'Reeles', 'imagen' => '/img/catalogo/reel1.jpg'],
            ['id' => 2, 'titulo' => 'Reel Rotativo Abu Garcia Black Max', 'precio' => 195000, 'categoria' => 'Reeles', 'imagen' => '/img/catalogo/reel2.jpg'],
            ['id' => 3, 'titulo' => 'Reel Rotativo Penn Squall Level Wind', 'precio' => 280000, 'categoria' => 'Reeles', 'imagen' => '/img/catalogo/reel3.jpg'],
            ['id' => 4, 'titulo' => 'Caña Telescópica Shimano FX (3.00m)', 'precio' => 145000, 'categoria' => 'Cañas', 'imagen' => '/img/catalogo/cana1.jpg'],
            ['id' => 5, 'titulo' => 'Caña Baitcasting Marine Sports Titan (1.98m)', 'precio' => 210000, 'categoria' => 'Cañas', 'imagen' => '/img/catalogo/cana2.jpg'],
            ['id' => 6, 'titulo' => 'Caña de Mosca Waterdog Fly Series (#5)', 'precio' => 185000, 'categoria' => 'Cañas', 'imagen' => '/img/catalogo/cana3.jpg'],
            ['id' => 7, 'titulo' => 'Señuelo Rapala Super Shad Rap (14cm)', 'precio' => 32000, 'categoria' => 'Accesorios y Herramientas', 'imagen' => '/img/catalogo/señuelo1.jpg'],
            ['id' => 8, 'titulo' => 'Señuelo Cuchara Giratoria Mepps Aglia (N°4)', 'precio' => 12500, 'categoria' => 'Accesorios y Herramientas', 'imagen' => '/img/catalogo/señuelo2.jpg'],
            ['id' => 9, 'titulo' => 'Hilo Multifilamento Sufix 832 (Rollo 150m)', 'precio' => 48000, 'categoria' => 'Accesorios y Herramientas', 'imagen' => '/img/catalogo/hilo.jpg'],
            ['id' => 10, 'titulo' => 'Caja de Anzuelos Mustad Serie 92247 (x50 unidades)', 'precio' => 15000, 'categoria' => 'Accesorios y Herramientas', 'imagen' => '/img/catalogo/anzuelo.jpg'],
            ['id' => 11, 'titulo' => 'Caja de Pesca Plano 3 Bandejas Articuladas', 'precio' => 65000, 'categoria' => 'Accesorios y Herramientas', 'imagen' => '/img/catalogo/caja.jpg'],
            ['id' => 12, 'titulo' => 'Pinza de Pesca Multifunción Spinit (Acero Inox)', 'precio' => 22000, 'categoria' => 'Accesorios y Herramientas', 'imagen' => '/img/catalogo/pinza.jpg'],
            ['id' => 13, 'titulo' => 'Camisa de Pesca Columbia PFG con Filtro UV', 'precio' => 110000, 'categoria' => 'Indumentaria', 'imagen' => '/img/catalogo/camisa.jpg'],
            ['id' => 14, 'titulo' => 'Wader de Neoprene Waterdog (4mm)', 'precio' => 350000, 'categoria' => 'Indumentaria', 'imagen' => '/img/catalogo/wader.jpg'],
            ['id' => 15, 'titulo' => 'Bolso Estanco DryBag 20 Litros', 'precio' => 42000, 'categoria' => 'Indumentaria', 'imagen' => '/img/catalogo/bolso.jpg'],
        ];

        $secciones = collect($productos)->groupBy('categoria');

        return view('productos', compact('secciones'));
    }
}
