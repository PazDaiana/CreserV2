document.addEventListener('DOMContentLoaded', () => {
    const nombre = localStorage.getItem('nombre');
    const apellido = localStorage.getItem('apellido');
    const dni = localStorage.getItem('dni');
    const direccion = localStorage.getItem('direccion');
    const localidad = localStorage.getItem('localidad');
    const provincia = localStorage.getItem('provincia');
    const monto = localStorage.getItem('monto');
    const intereses = localStorage.getItem('intereses');
    const fecha = localStorage.getItem('fecha');
    const cuotas = localStorage.getItem('cuotas');

    document.getElementById('nombre').innerText = nombre;
    document.getElementById('apellido').innerText = apellido;
    document.getElementById('dni').innerText = dni;
    document.getElementById('direccion').innerText = direccion;
    document.getElementById('localidad').innerText = localidad;
    document.getElementById('provincia').innerText = provincia;
    document.getElementById('monto').innerText = monto;
    document.getElementById('intereses').innerText = intereses;
    document.getElementById('fecha').innerText = fecha;
    document.getElementById('cuotas').innerText = cuotas;
});
