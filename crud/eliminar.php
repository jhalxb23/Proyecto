<?php 
include("conexion.php");

if(isset($_REQUEST['usuario_id'])) {
    $usuario_id = $_REQUEST['usuario_id'];
    

    }

$sql = "DELETE FROM usuario WHERE usuario_id = '$usuario_id'";
$query = mysqli_query($conex, $sql);


if($query){
    header('location: index.php');
}


?>