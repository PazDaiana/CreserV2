document.addEventListener("DOMContentLoaded", function() {
    const mostrarSaldoCheckbox = document.getElementById("mostrar-saldo");
    const saldoInput = document.getElementById("saldo");

    mostrarSaldoCheckbox.addEventListener("change", function() {
        if (this.checked) {
            saldoInput.style.display = "block";
        } else {
            saldoInput.style.display = "none";
        }
    });

    // Aquí podrías agregar más interactividad según las necesidades de tu aplicación.
});
