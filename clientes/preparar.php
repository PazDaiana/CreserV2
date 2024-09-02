<?php
try {
    require_once '../basedatos/conexion.php';
    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $TipoDNI = $_POST['TipoDNI'];
    $dni = $_POST['dni'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $domicilio = $_POST['domicilio'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefono = $_POST['telefono'];
    $telefono1 = $_POST['telefono1'];
    $telefono2 = $_POST['telefono2'];
    $telefono3 = $_POST['telefono3'];
    $correo_electronico = $_POST['correo_electronico'];
    $profesion = $_POST['puesto'];
    $ingresos = $_POST['ingresos'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $nombre_institucion = $_POST['nombre_institucion'];
    $ubicacion = $_POST['ubicacion'];
    $localidad_empresa = $_POST['localidad_empresa'];
    $provincia_empresa = $_POST['provincia_empresa'];
    $email_empresa = $_POST['email_empresa'];
    $telefono_empresa = $_POST['telefono_empresa'];
    //$imagendni = $_POST['imagendni'];
    //$imagendorsodni = $_POST['imagendorsodni'];
   // $boletadeluz = $_POST['boletadeluz'];
    //$imagenrecibo = $_POST['imagenrecibo'];

    $resp = $conexion->query('insert into clientes (Nombre,Apellido,TipoDni,DNI,
    Fecha_nacimiento,Domicilio,Localidad,Provincia,
    Codigo_postal,Telefono,Telefono1,Telefono2,Telefono3,correo_electronico,
    Profesion,Ingreso,Fecha_ingreso,Nombre_institucion,ubicacion_empresa,localidad_empresa,
    provincia_empresa,Email_empresa,Telefono_empresa) values ("'.$nombre.'","'.$apellido.'","'.$TipoDNI.'",'.$dni.',
    "'.$fecha_nacimiento.'","'.$domicilio.'","'.$localidad.'","'.$provincia.'",
    '.$codigo_postal.',"'.$telefono.'","'.$telefono1.'","'.$telefono2.'","'.$telefono3.'","'.$correo_electronico.'",
    "'.$profesion.'",'.$ingresos.',"'.$fecha_ingreso.'","'.$nombre_institucion.'","'.$ubicacion.'","'.$localidad_empresa.'",
    "'.$provincia_empresa.'","'.$email_empresa.'", "'.$telefono_empresa.'")');

    $conexion->close();


    if($resp == 1){
        echo '<script>alert("Se registro exitosamente.")</script>';
        echo '<script>window.location.href = "../clientes/index2.html";</script>';
    }else {
        echo '<script>alert("Error al intentar registrar.")</script>';
    }
    
} catch (\Throwable $th) {
    echo '<script>alert("Error al intentar registrar. '.$th->getMessage().'")</script>';

}




?>


