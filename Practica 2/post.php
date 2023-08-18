<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Ingrese un valor:</label>
        <input type="text" name="post" id="">
        Femenino<input type="checkbox" value="Femenino" name="genero[]" id>
        Masculino<input type="checkbox" value="Masculino" name="genero[]" id>
        <button type="submit">Enviar</button>

    <?php
    $array = [1,2,3,4,5];
    foreach($array as $val){
        echo $val . '<input type="checkbox" value="' .
        $val.'"name="genero[]" id="">';
    }
    ?>
    
    </form>
</body>
</html>