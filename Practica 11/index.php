<?php
include_once'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <title>Parcial 2</title>
</head>
<!--que salga la grafica sin necesidad de darle ckick al boton 
ocultar a;os y boton
trabajar el ajax con el evento kyu-->
<body>
    <form  style="text-align: center;">
    <label for="totales">Ventas totales anuales mayor o igual que </label>
        <input type="text" name="totales" id="totales" value="<?php echo isset($_POST['totales']) ? $_POST['totales'] : '' ?>"><br><br>
       <!-- <button id="btngraficar">Graficar</button>-->
    </form>
    <figure class="highcharts-figure">
        <div id="container"></div>
    </figure>
    <script src="grafico.js"></script>
</body>
</html>