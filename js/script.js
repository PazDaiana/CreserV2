const datos = [
    {dni: '36835768', nombre: 'Paz Daiana Lorena', direccion: 'Laprida 253', localidad: 'Presidencia Roque Saenz Peña'},
    // Agrega más datos aquí según sea necesario
    {dni: '36835769', nombre: 'Juan Perez', direccion: 'San Martin 123', localidad: 'Resistencia'},
    {dni: '36835770', nombre: 'Maria Lopez', direccion: 'Belgrano 456', localidad: 'Corrientes'},
    // Repite o genera más datos para ver la paginación
];

let paginaActual = 1;
const filasPorPagina = 5;

function mostrarTabla(pagina) {
    const tablaCuerpo = document.getElementById('tabla-cuerpo');
    tablaCuerpo.innerHTML = '';

    const inicio = (pagina - 1) * filasPorPagina;
    const fin = inicio + filasPorPagina;
    const paginaDatos = datos.slice(inicio, fin);

    for (const fila of paginaDatos) {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${fila.dni}</td>
            <td>${fila.nombre}</td>
            <td>${fila.direccion}</td>
            <td>${fila.localidad}</td>
            <td>
                <button class="boton-ver">Ver</button>
                <button class="boton-editar">Editar</button>
                <button class="boton-eliminar">Eliminar</button>
            </td>
        `;
        tablaCuerpo.appendChild(tr);
    }

    document.getElementById('pagina-actual').innerText = `Página ${pagina} de ${Math.ceil(datos.length / filasPorPagina)}`;
}

function cambiarPagina(direccion) {
    if (paginaActual + direccion > 0 && paginaActual + direccion <= Math.ceil(datos.length / filasPorPagina)) {
        paginaActual += direccion;
        mostrarTabla(paginaActual);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    mostrarTabla(paginaActual);
});