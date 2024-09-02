function recuperarDatos() {
    document.getElementById('nombre').textContent = localStorage.getItem('nombre');
    document.getElementById('apellido').textContent = localStorage.getItem('apellido');
    document.getElementById('dni').textContent = localStorage.getItem('dni');
    document.getElementById('direccion').textContent = localStorage.getItem('direccion');
    document.getElementById('localidad').textContent = localStorage.getItem('localidad');
    document.getElementById('provincia').textContent = localStorage.getItem('provincia');
    document.getElementById('montoPrestamo').textContent = localStorage.getItem('montoPrestamo');
    document.getElementById('interesesPrestamo').textContent = localStorage.getItem('interesesPrestamo');
    document.getElementById('fechaPrestamo').textContent = localStorage.getItem('fechaPrestamo');
    document.getElementById('cuotasPrestamo').textContent = localStorage.getItem('cuotasPrestamo');
}

function imprimir() {
    window.print();
}

window.onload = recuperarDatos;
