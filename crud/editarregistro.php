<?php
include("conexion.php");

if (isset($_POST['usuario_id']) && !empty($_POST['usuario_id'])) {
    $usuario_id = $_POST['usuario_id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo_electronico = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];
    $fecha_registro = date("d/m/y");

    $sql = "UPDATE usuario SET nombre ='$nombre', apellido ='$apellido', correo_electronico='$correo_electronico', fecha_registro='$fecha_registro' WHERE usuario_id = '$usuario_id'";

    echo "SQL Query: $sql"; 

    $query = mysqli_query($conex, $sql);

    if ($query) {
        header("Location: index.php");
    } else {
        echo "Error executing query: " . mysqli_error($conex);
        die("Error updating record: " . mysqli_error($conex));
    }
} else {
    echo "Error: 'usuario_id' not set or empty.";
    die("Error: 'usuario_id' not set or empty.");
}
?>

