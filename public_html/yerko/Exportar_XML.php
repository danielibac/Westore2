<?php

		$con = mysql_connect('localhost','icinf6','losbeyakosdelsoftware');//losbeyakosdelsoftware
		//$con = mysql_connect('localhost','root','');
		mysql_select_db("icinf6", $con) or die("No sepuede conectar a la base de datos");
		$consulta="select * from producto";
		$result = mysql_query($consulta,$con);

		header("Content-type: text/xml");

		echo "<Productos>";

		while($row = mysql_fetch_array($result)){
			echo "<Producto>";

			echo ("<id_producto>$row[0]</id_producto>");
			echo "<id_categoria>$row[1]</id_categoria>";
			echo "<descripcion>$row[2]</descripcion>";
			echo "<marca>$row[7]</marca>";
			echo "<modelo>$row[8]</modelo>";
			echo "<precio_venta>$row[3]</precio_venta>";
			echo "<cantidad>$row[4]</cantidad>";
			echo "<variable_holgura>$row[5]</variable_holgura>";
			echo "<cantidad_ficticia_compra>$row[6]</cantidad_ficticia_compra>";
			echo "</Producto>";
			echo " ";
		}

		echo "</Productos>";
		mysql_close();
?>