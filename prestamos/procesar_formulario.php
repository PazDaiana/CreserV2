<?php
try{
    require_once '../basedatos/conexion.php';

    // Obtener los datos del formulario
    $monto = $_POST['monto'];
    $fecha_vencimiento = $_POST['fecha'];
    $intereses = $_POST['intereses'];
    $cant_cuota = $_POST['cuotas'];
    //$nombre = $_POST['nombre']; // Si necesitas el nombre del cliente
    //$apellido = $_POST['apellido']; // Si necesitas el apellido del cliente
    //$dni = $_POST['dni']; // Si necesitas el DNI del cliente

    // Aquí debes obtener los valores correctos para id_empleado_fk e id_cliente_fk
    $id_empleado_fk = 1; // Ejemplo
    $id_cliente_fk = 123; // Ejemplo

    // Insertar los datos en la tabla prestamos
    $res = $conexion-> query('INSERT INTO prestamos (MontoPrestado, Cant_cuota, Fecha_vencimiento)
            VALUES ('.$monto.', '.$cant_cuota.', "'.$fecha_vencimiento.'")');
    $conexion->close();
    if ($res==1) {
        echo '<script>alert("Datos registrados correctamente")</script>';
        echo '<script>window.location.href= "../prestamos/resumen.html";</script>';
    } else {
        echo '<script>alert("Error al conectarse")</script>';
    }
} catch(\throwable $th){
    echo '<script>alert("Error al conectarse. '.$th ->getMessage().'")</script>';
}

?>
