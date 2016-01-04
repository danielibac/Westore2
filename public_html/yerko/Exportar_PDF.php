<?php ob_start(); ?>
<table width="500px" cellpadding="5px" cellspacing="5px" border="1">
        <tr>
            <!--el colspan es para que el titulo de la tabla ocupe 4 espacios (las 4 columnas)-->
            <td colspan="8">Orden de Despacho - Ventas.com</td>
        </tr>

        <tr bgcolor="#CCCCCC">
            <td>Descripcion producto</td>
            <td>marca</td>
            <td>modelo</td>
            <td>cantidad</td>
            <td>subtotal</td>
        </tr>

        <?php
        //echo $_GET["var"]; 
        $id_despacho=$_GET["var"];
        $con = mysql_connect('localhost','icinf6','losbeyakosdelsoftware');
        //$con = mysql_connect('localhost','root','');
            mysql_select_db("icinf6", $con) or die("No sepuede conectar a la base de datos");
            /*aca hago una consulta a la base de datos que estamos conectados y lo guardo en la variable result*/
            $busqueda = "select cli.nombre_cliente, cli.apellido_p, cli.apellido_m, cli.email_cliente,
                         cli.telefono_cliente, dire.calle, dire.numero, dire.ciudad, dire.region, 
                         pro.id_producto, pro.marca, pro.modelo, ve.cantidad_productos_venta,
                         ve.subtotal_venta, pro.descripcion_producto

                        from orden_despacho as o_de, venta as ve, producto as pro, cliente as cli,
                        empresa as emp, direccion as dire

                        where $id_despacho = o_de.numero_despacho AND ve.id_producto = pro.id_producto AND
                        cli.id_cliente = ve.id_cliente AND o_de.numero_despacho = ve.numero_despacho AND
                        o_de.rut_empresa = emp.rut_empresa AND emp.id_direccion = dire.id_direccion";

            $final = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());?>

           <?php while($row = mysql_fetch_array($final)){?> 

           <div>

            <label>Datos del cliente</label><br>
            <label>Nombre: <?php echo $row[0]," ", $row[1]," ",  $row[2]?></label><br>
             <label>Contacto: <?php echo $row[3]," - ", $row[4]?></label><br>
             <label>Direccion: <?php echo $row[5]," ", $row[6]," ", $row[7]," , ",$row[8], " region"?></label><br>
           </div>

            <tr bgcolor="#FF9933">
                <!--aca lo voy imprimiendo en la pagina web todo lo que obtuve-->
                <td><?php echo $row[14]?></td>
                <td><?php echo $row[10]?></td>
                <td><?php echo $row[11]?></td>
                <td><?php echo $row[12]?></td>
                <td><?php echo $row[13]?></td>
            </tr>

            
        <?php   
        }
        mysql_close();
        ?>
    </table>
<?php
require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Orden de despacho.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>