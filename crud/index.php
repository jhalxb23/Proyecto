<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-warning p-2 text-white text-center">Crud Mysql</h1>
    <br>
    <div class="container">
        <a href="forms/agregarcliente.php" class="btn btn-danger">agregar usuario</a>
    </div>
    <br>


    <div class="container bg-light p-3 border border-dark rounded">
        <h1>Lista de usuarios</h1>
        <table class="table">
            <thead class="table-dark">


                <tr>
                    <th scope="col">usuario_id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">correo electronico</th>
                    <th scope="col">contraseña</th>
                    <th scope="col">fecha registro</th>
                    <th scope="col">Estado</th>
                    <th scope="col">acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion.php");

                if (!$conex){
                    die("Error de conxion" . mysqli_connect_error());
                }

                $sql = "SELECT * FROM usuario";
                $query = mysqli_query($conex, $sql);

                if(!$query){
                    die("Error en la consulta: " . mysqli_error($conex));
                }


                while ($fila = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $fila['usuario_id'] ?></th>
                        <th scope="row"><?php echo $fila['nombre'] ?></th>
                        <th scope="row"><?php echo $fila['apellido'] ?></th>
                        <th scope="row"><?php echo $fila['correo_electronico'] ?></th>
                        <th scope="row"><?php echo $fila['contraseña'] ?></th>
                        <th scope="row"><?php echo $fila['fecha_registro'] ?></th>
                        <th scope="row"><?php echo $fila['estado'] ?></th>
                        <th scope="row">
                            <a href="forms/editar.php?usuario_id=<?php echo $fila['usuario_id']?>" class="btn btn-warning">Editar datos</a>
                            <a href="eliminar.php?usuario_id=<?php echo $fila['usuario_id']?>" class="btn btn-danger">eliminar datos</a>
                        </th>
                    
                    </tr>


                    <?php
                }

                ?>

            </tbody>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>