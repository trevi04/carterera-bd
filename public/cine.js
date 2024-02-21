function mostrarDetalle(nombre, id, precio) {
    document.getElementById('modal-id').innerText = 'Sala: ' + id;
    document.getElementById('modal-nombre').innerText = 'Nombre: ' + nombre;
    document.getElementById('modal-precio').innerText = 'Precio: ' + precio;
    document.getElementById('modal-precio2').innerText = precio;
    document.getElementById('modal-id2').innerText = id;
    document.getElementById('idform').value = id; // Corrección aquí

    document.getElementById('id').value = id;
    document.getElementById('nombre').value = nombre;
    document.getElementById('precio').value = precio;
}

function calcula() {
    var precio = document.getElementById('modal-precio2').innerText;
    var entradas = document.getElementById('entradas').value;

    document.getElementById('pagar').value = precio * entradas;
    document.getElementById('entradas2').value = entradas;
}
