// agregar botones para actores

document.getElementById('btn-agregar-actor').addEventListener('click', function() {

    const contenedor = document.getElementById('contenedor-actores');
    

    const primeraFila = document.querySelector('.fila-actor');
    const nuevaFila = primeraFila.cloneNode(true);
    

    nuevaFila.querySelector('select').value = "";
    

    contenedor.appendChild(nuevaFila);
});

document.getElementById('btn-agregar-director').addEventListener('click', function() {

    const contenedor = document.getElementById('contenedor-director');
    

    const primeraFila = document.querySelector('.fila-director');
    const nuevaFila = primeraFila.cloneNode(true);
    

    nuevaFila.querySelector('select').value = "";
    

    contenedor.appendChild(nuevaFila);
});

document.getElementById('btn-agregar-genero').addEventListener('click', function() {

    const contenedor = document.getElementById('contenedor-genero');
    

    const primeraFila = document.querySelector('.fila-genero');
    const nuevaFila = primeraFila.cloneNode(true);
    

    nuevaFila.querySelector('select').value = "";
    

    contenedor.appendChild(nuevaFila);
});