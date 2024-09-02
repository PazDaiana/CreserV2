function login() {
    const usuario = document.getElementById('usuario').value;
    const contrasena = document.getElementById('contrasena').value;

    if (usuario == 'admin' && contrasena == '1234') {
        window.location.href = 'menufijo.html'; // Redirige a la página principal después de iniciar sesión correctamente
    } else {
        alert('Usuario o contraseña incorrectos');
    }
}
