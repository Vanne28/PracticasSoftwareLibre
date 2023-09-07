<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "INSERT INTO tbl_usuarios (username, password) VALUES ('$username', '$password')";

    if ( $enlace->query($sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $enlace->error;
    }
}
?>  


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="background-color: grey; text-align: center;">
    <form style="color: aliceblue;" action="login.php" method="post">
        <label for="username"> Usuario</label><br>
        <input type="text" name="username" id=""><br>
        <label for="password"> Password</label><br>
        <input type="text" name="password" id=""><br>
        <button type="submit">Ingresar</button>
    </form>
</body>

</html>