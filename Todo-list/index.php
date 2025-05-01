<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<center>
<p class="h2">TODO LIST-INF530</p>
</center>
    <div class="container">
        <div class="row">
            <a href="insertar.php">
            </br>
            <button class="btn btn-danger">Crear Tarea Por Realizar</button>
            </a>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        </br>
                        </br>
                        <th scope="col">#</th>
                        <th scope="col">Tarea</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require "includes/config.php";

                        $query = $conn->query("SELECT * FROM tareas ORDER BY id DESC");

                        foreach ($query as $key => $value) {
                    ?>
                    <tr>
                        <th scope="row"><?= $value['id']; ?></th>
                        <td><?= $value['tarea']; ?></td>
                        <td><?= $value['fecha']; ?></td>
                        <td>
                            <a href="eliminar.php?id=<?= $value['id']; ?>">
                                <button class="btn btn-danger">Eliminar</button>
                            </a>
                            <a href="editar.php?id=<?= $value['id']; ?>">
                                <button class="btn btn-warning">Modificar</button>
                                </br>
                                <div class="form-check">
                                    </br>
                                    <input class="form-check-input" type="checkbox" value="" id="x" />
                                    <label class="form-check-label" for="x"> TAREA COMPLETADA </label>
                                </div>
                                <div class="form-check">
                            </div> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>