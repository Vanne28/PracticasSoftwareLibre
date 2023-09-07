<?php
$enlace = mysqli_connect(
    "localhost", //servidor web
    "root", //usuario db
    "", //contraseña db
    "db_usuarios" //nombre de db
);

if ($enlace) {
    echo "Conexion Exitosa"; 
}
?> 