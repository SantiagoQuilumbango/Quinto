<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="./usuarios.model.js"></script>
    <script src="./usuarios.controller.js"></script>
</head>

<body>



    <table class="table table-responsive table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correos</th>
                <th>Contraseñas</th>
                <th>Rol</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody id="tablausuarios">

        </tbody>

    </table>
</body>

</html>