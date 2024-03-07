<html>
<head>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body>

	<form action="insertar.php" method="POST">
		<input type="text" name="idPro" size="2">
		<input type="text" name="Nombre" size="10">
		<input type="text" name="Precio" size="3">
		<input type="text" name="Ext" size="3"><br>
		<input type="submit" value="Registrar">
	</form>

<?php
	include('conexion.php');
	$con = conectaDB();
	$sql ="select idPro,Nombre,Precio from mitabla1";

	echo "<table class='mitabla1'> ";
	echo "<thead>";
	echo "<th>Nombre</th>";
	echo "<th>Precio</th>";
	echo "</thead>";
	echo "<tbody>";
	$resultado = mysqli_query($con,$sql);  
	while($fila = mysqli_fetch_row($resultado)){
 	
		echo "<tr>";
			echo "<td>".$fila[1]."</td>";
			echo "<td>".$fila[2]."</td>";
			echo "<td><a href='eliminar.php?idp=".$fila[0]."'>eliminar</a></td>";
		echo "</tr>";
	
	}
	
	echo "</tbody> </table>";
?>

</body>
</html>