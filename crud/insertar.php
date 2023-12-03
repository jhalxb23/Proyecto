<?php
include("conexion.php");


if(isset($_POST['nombre'], $_POST['apellido'], $_POST['correo_electronico'], $_POST['contraseña'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo_electronico = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];
    $fecha_registro = date("Y-m-d");
   

    $sql = "INSERT INTO usuario(nombre, apellido, correo_electronico, contraseña, fecha_registro)
            VALUES('$nombre', '$apellido', '$correo_electronico', '$contraseña', '$fecha_registro')";

    $query = mysqli_query($conex, $sql);

    if ($query === false) {
        echo "Error en la consulta: " . mysqli_error($conex);
    } else {
        header("Location: index.php");
    }
} else {
    echo "Error: Some required fields are missing.";
}
?>
