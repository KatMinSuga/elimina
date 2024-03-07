<?php
$par1 = $_GET['idp'];


include('conexion.php');
$con = conectaDB();
$sql ="delete from mitabla1 where idPro=".$par1;

mysqli_query($con,$sql); 

header("location:index.php");

?>