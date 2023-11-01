<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>
    <h1>CRUD AJAX</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Genero</th>
        </thead>
        <tbody id="data-empleado"></tbody>
    </table>
    <script src=""></script>
</body>

<script>
    let tabla = document.getElementById('data-empleado')
    $.ajax({
        type: "POST",
        url: 'empleados.php',
        data: {
            tabla: 'employees',
            operacion: 'get'
        },
    }).done(function(data) {
        console.log(data);
        data = JSON.parse(data);

        data.forEach((item) => {
            item.gender =
                item.gender == 'M' ?
                'MASCULINO' : 'FEMENINO';
            tabla.innerHTML +=
                `<tr>
        <td>${item.first_name}</td>
        <td>${item.last_name}</td>
        <td>${item.gender}</td>
        </tr>`
        });
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>