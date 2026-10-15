document.addEventListener('DOMContentLoaded', () => {
    const boton = document.getElementById('btn-interactivo');
    const mensaje = document.getElementById('mensaje-js');

    if (boton) {
        boton.addEventListener('click', () => {
            mensaje.textContent = '¡JavaScript integrado y respondiendo en el cliente!';
            mensaje.style.color = '#27ae60';
            mensaje.style.fontWeight = 'bold';
        });
    }
});