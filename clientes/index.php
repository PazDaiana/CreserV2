<?php include("conexion.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - CreSer</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="menufijo.html">
                <img src="Imagenes/LOGO CRESER.jpg" alt="Avatar" class="avatar">
            </a>
            <h3>CreSer</h3>
            <h6><i>Servicio de Créditos Personales</i></h6>
        </div>
        <ul class="sidebar-menu">
            <li><a href="index2.html" class="activo"><i class="fas fa-users"></i> Clientes </a></li>
            <li><a href="formulario.html"><i class="fas fa-hand-holding-usd"></i> Préstamos</a></li>
            <li><a href="caja.html"><i class="fa-solid fa-sack-dollar"></i> Cuotas</a></li>
            <li><a href="arqueo.html"><i class="fas fa-cash-register"></i> Caja </a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Configuración</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            <div class="header-icons">
                <i class="fas fa-user"></i>
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </div>
        <div class="contenedor">
            <div class="encabezado">
                <a href="menufijo.html" class="boton-regresar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <select class="estado-dropdown">
                    <option value="activo">Activo</option>
                    <!-- Agregar más opciones si es necesario -->
                </select>
                <input type="text" class="caja-busqueda" placeholder="Buscar...">
                <a href="anadir.html" class="boton-anadir">+ Añadir</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Localidad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Repetir este bloque para cada fila -->
                    <tr>
                        <td>36835768</td>
                        <td>Paz Daiana Lorena</td>
                        <td>Laprida 253</td>
                        <td>Presidencia Roque Saenz Peña</td>
                        <td>
                            <button class="boton-ver">Ver</button>
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Fin del bloque de fila -->
                    <!-- Repetir más bloques aquí -->
                    <tr>
                        <td>36835768</td>
                        <td>Paz Daiana Lorena</td>
                        <td>Laprida 253</td>
                        <td>Presidencia Roque Saenz Peña</td>
                        <td>
                            <button class="boton-ver">Ver</button>
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>36835768</td>
                        <td>Paz Daiana Lorena</td>
                        <td>Laprida 253</td>
                        <td>Presidencia Roque Saenz Peña</td>
                        <td>
                            <button class="boton-ver">Ver</button>
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>36835768</td>
                        <td>Paz Daiana Lorena</td>
                        <td>Laprida 253</td>
                        <td>Presidencia Roque Saenz Peña</td>
                        <td>
                            <button class="boton-ver">Ver</button>
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>36835768</td>
                        <td>Paz Daiana Lorena</td>
                        <td>Laprida 253</td>
                        <td>Presidencia Roque Saenz Peña</td>
                        <td>
                            <button class="boton-ver">Ver</button>
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>36835768</td>
                        <td>Paz Daiana Lorena</td>
                        <td>Laprida 253</td>
                        <td>Presidencia Roque Saenz Peña</td>
                        <td>
                            <button class="boton-ver">Ver</button>
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>36835768</td>
                        <td>Paz Daiana Lorena</td>
                        <td>Laprida 253</td>
                        <td>Presidencia Roque Saenz Peña</td>
                        <td>
                            <button class="boton-ver">Ver</button>
                            <button class="boton-editar">Editar</button>
                            <button class="boton-eliminar">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="paginacion">
                <button id="prev" onclick="cambiarPagina(-1)">Anterior</button>
                <span id="pagina-actual"></span>
                <button id="next" onclick="cambiarPagina(1)">Siguiente</button>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
