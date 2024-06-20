// script.js
function updatePrice(value) {
    document.getElementById('priceValue').innerText = value;
}

document.getElementById('filterButton').addEventListener('click', function() {
    let selectedPrice = document.getElementById('priceRange').value;
    alert('Filtrando productos con precio hasta S/' + selectedPrice);
    // Aquí añadirías la lógica de filtrado para mostrar productos dentro del rango de precio seleccionado.
});
