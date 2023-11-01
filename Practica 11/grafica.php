

       <?php
        include_once 'conexion.php';
        $totales = isset($_POST['totales']) ? $_POST['totales'] : 0;



        $anios = range(2013, 2022);
        $totalVenta = array();
        foreach ($anios as $aniosFor) {
            $consulta = "SELECT YEAR(fecha) AS Anio, SUM(venta) AS Venta
              FROM detalle_fac
              INNER JOIN encabezado_fac ON detalle_fac.codigo = encabezado_fac.codigo
              WHERE YEAR(fecha) = $aniosFor
              GROUP BY YEAR(fecha)
              HAVING SUM(venta) >= $totales";
            $executar = mysqli_query($conexion, $consulta);
            $dato = mysqli_fetch_array($executar);
            

            if ($dato) {
                
                $d = (float)$dato["Venta"];
                $totalVenta[]= array((int)$aniosFor, $d);
            }
        }

        echo json_encode($totalVenta);



        ?>
        
    
