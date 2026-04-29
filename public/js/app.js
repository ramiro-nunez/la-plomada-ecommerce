/**
 * Componente de Tarjeta de Producto
 * @param {Object} prod Objeto con la información del producto
 * @returns {string} HTML del componente
 */
function ProductCard(prod) {
    return `
        <div class="col-12 col-sm-6 col-md-3 p-2 p-md-3">
            <div class="border text-center product-card-dark">
                <div class="mx-auto mb-1 overflow-hidden product-img">
                    <img src="${prod.imagen}" class="w-100 h-100 object-fit-cover" alt="${prod.titulo}">
                </div>
                <h4 class="text-success fs-6 fs-sm-3 fw-bold mb-0">$${prod.precio.toLocaleString()}</h4>
                <h5 class="fw-semibold fs-6 fs-sm-3 mb-0 pb-2">${prod.titulo}</h5>
            </div>
        </div>
    `;
}

function renderizarProductos() {
    const contenedor = document.getElementById("contenedor-productos");
    if (!contenedor) {
        return;
    }

    const categorias = [
        ...new Set(window.productos.map((producto) => producto.categoria)),
    ];

    const htmlSections = categorias
        .map((categoria) => {
            const productosCategoria = window.productos.filter(
                (producto) => producto.categoria === categoria,
            );

            return `
        <section class="my-5">
            <div class="container">
                <h2 class="text-center subtitulo-seccion fw-bold mb-5">${categoria}</h2>
                <div class="row justify-content-center align-items-center g-4">
                    ${productosCategoria.map(prod => ProductCard(prod)).join("")}
                </div>
            </div>
        </section>
        `;
        })
        .join("");

    contenedor.innerHTML = htmlSections;
}

document.addEventListener("DOMContentLoaded", () => renderizarProductos());
