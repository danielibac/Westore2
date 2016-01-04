<!DOCTYPE html>
<html lang="es">
	<head>
		<link href="Estilos/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>

<body <body style="background: lightblue">
		<header>
			<h3><a href="http://146.83.198.35/~icinf6/index.php/inicio">INICIO</a></h3>
			<title>yerko</title>
			<center><h2>Generador de informes - ICINF6</h2></center>
			<meta charset="UTF-8">
		</header>

	<h4>Seleccione orden de compra a generar</h4>	

	<?php


if(isset($_POST["orden_despacho"]))

{
		//echo "<p>Recibido ".$_POST["orden_despacho"]."</p>";
		$id_despacho = $_POST["orden_despacho"];

}

?>

 

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
			<?php
		$con = mysql_connect('localhost','icinf6','losbeyakosdelsoftware');
			mysql_select_db("icinf6", $con) or die("No sepuede conectar a la base de datos");
			$consulta="select * from orden_despacho";
			$result = mysql_query($consulta,$con) or die("Error en: $busqueda: " . mysql_error());

		echo "<select name='orden_despacho' onChange='submit()' >";?>
				<option value=0>Seleccione</option>
				<?php while($row=mysql_fetch_array($result)){?>
   					 
				<?php echo "(<option value=$row[0]>$row[0]</option >)"; 
				}
		echo "</select>";
            
	?>

</form>

<div class="contenedor_tabla">
			<table class="table table-hover">
  		<tr>
  			<!--el colspan es para que el titulo de la tabla ocupe 4 espacios (las 4 columnas)-->
			<td colspan="5" class="titulo_bd">Resultado</td>
		</tr>

		<tr class="titulo_tabla">
			<td>id_producto</td>
			<td>marca</td>
			<td>modelo</td>
			<td>cantidad</td>
			<td>subtotal</td>
		</tr>

		<?php
			/*ahora recorro la varriable result fila por fila (hasta que de vacio) y lo que obtengo lo paso a row*/
			$busqueda = "select pro.id_producto, pro.marca, pro.modelo, ve.cantidad_productos_venta, 
						ve.subtotal_venta

					  	from orden_despacho as o_de, venta as ve, producto as pro, cliente as cli,
					  	empresa as emp, direccion as dire

					  	where $id_despacho = o_de.numero_despacho AND ve.id_producto = pro.id_producto AND
					  	cli.id_cliente = ve.id_cliente AND o_de.numero_despacho = ve.numero_despacho AND
					   	o_de.rut_empresa = emp.rut_empresa AND emp.id_direccion = dire.id_direccion";

			$final = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());

			while($row = mysql_fetch_array($final)){ ?>
			<tr>
				<!--aca lo voy imprimiendo en la pagina web todo lo que obtuve-->
				<td><?php echo $row[0]?></td>
				<td><?php echo $row[1]?></td>
				<td><?php echo $row[2]?></td>
				<td><?php echo $row[3]?></td>
				<td><?php echo $row[4]?></td>
			</tr>
		<?php	
		}
		mysql_close();
		?>
	</table>



	</div>
	<a href="Exportar_PDF.php?var=<?php echo $id_despacho; ?>">ExportarPDF</a>
	<label> / </label>
	<a class="navegacion" href="Exportar_XML.php" title="Exportar como xml" target="_blank">Exportar XML</a>
</body>

<footer>
	<center><label>Todos los derechos reservados - Ventas.com</label></center>	
</footer>
</html>