<?php
include("../conexion.php");

// Verifica si 'id' está presente en $_REQUEST
$usuario_id = isset($_REQUEST['usuario_id']) ? $_REQUEST['usuario_id'] : null;

// Verifica si 'id' no está definido o es nulo
if ($usuario_id === null) {
    // Puedes mostrar un mensaje de error o redirigir a otra página
    die("Error: El parámetro 'id' no está definido.");


}

$sql = "SELECT * FROM usuario WHERE usuario_id ='$usuario_id'";

$query = mysqli_query($conex, $sql);
// Verifica si se encontraron resultados
if (!$query) {
    die("Error en la consulta: " . mysqli_error($conex));


}
$fila = mysqli_fetch_array($query)

    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <h1 class="bg-warning p-2 text-white text-center">editar usuario</h1>
    <br>
    <div class="container">
        <form action="../editarregistro.php" method="POST">

        <input type="hidden" name="usuario_id" value="<?php echo $fila['usuario_id']?>">

            <div class="mb-3">
                <label class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="nombre" value="<?php echo $fila['nombre'] ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="apellido" value="<?php echo $fila['apellido'] ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">correo</label>
                <input type="text" class="form-control" name="correo_electronico" placeholder="correo electronico" value="<?php echo $fila['correo_electronico'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">contraseña</label>
                <input type="password" class="form-control" name="contraseña" placeholder="contraseña" value="<?php echo $fila['contraseña'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">fecha de registro</label>
                <input type="text" class="form-control" name="fecha_registro" placeholder="fecha de registro" value="<?php echo $fila['fecha_registro'] ?>">
            </div>

            <div class="container text-center">

                <button type="submit" class="btn btn-primary">editar</button>
                <a href="../index.php" class="btn btn-dark">regresar</a>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>