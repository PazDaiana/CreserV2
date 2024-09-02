function recuperarDatos() {
    let datos = {
        cliente: document.getElementById('cliente').value,
        dni: document.getElementById('dni').value,
        mostrarSaldo: document.getElementById('mostrar-saldo').checked,
        saldo: document.getElementById('saldo').value,
        buscar: document.getElementById('buscar').value
    };

    // Aquí podrías agregar la lógica para guardar los datos, por ejemplo, en localStorage o enviarlos a un servidor
    console.log(datos); // Solo para verificar que se están recuperando los datos correctamente

    // Ejemplo de guardado en localStorage
    localStorage.setItem('datosCliente', JSON.stringify(datos));
}

// Asignar la función a un evento, por ejemplo, al hacer clic en un botón
document.getElementById('guardar-btn').addEventListener('click', recuperarDatos);