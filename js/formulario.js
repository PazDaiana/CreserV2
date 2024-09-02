function guardarDatos() {
    localStorage.setItem('nombre', document.getElementById('nombre').value);
    localStorage.setItem('apellido', document.getElementById('apellido').value);
    localStorage.setItem('dni', document.getElementById('dni').value);
    localStorage.setItem('direccion', document.getElementById('direccion').value);
    localStorage.setItem('localidad', document.getElementById('localidad').value);
    localStorage.setItem('provincia', document.getElementById('provincia').value);
    localStorage.setItem('montoPrestamo', document.getElementById('monto-prestamo').value);
    localStorage.setItem('interesesPrestamo', document.getElementById('intereses-prestamo').value);
    localStorage.setItem('fechaPrestamo', document.getElementById('fecha').value);
    localStorage.setItem('cuotasPrestamo', document.getElementById('seleccione-cuotas').value);

    window.location.href = 'resumen.html';
}

function cancelar() {
    alert('¿Esta seguro que desea cancelar?');
}

function buscarCliente() {
    const searchValue = document.getElementById('search-input').value;
    // Simulando la búsqueda del cliente en el sistema
    // Aquí debería integrarse con el sistema backend para buscar los datos del cliente
    if (searchValue) {
        // Ejemplo de datos encontrados
        const cliente = {
            nombre: 'Paz',
            apellido: 'Daiana',
            dni: '12345678',
            direccion: 'Calle Falsa 123',
            localidad: 'Presidencia Roque Saenz Peña',
            provincia: 'Chaco'
        };

        document.getElementById('nombre').value = cliente.nombre;
        document.getElementById('apellido').value = cliente.apellido;
        document.getElementById('dni').value = cliente.dni;
        document.getElementById('direccion').value = cliente.direccion;
        document.getElementById('localidad').value = cliente.localidad;
        document.getElementById('provincia').value = cliente.provincia;
    } else {
        alert('No se encontraron resultados');
    }
}
