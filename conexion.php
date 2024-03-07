<?php
function conectaDB() 
{ 
  	$host = 'localhost'; //'148.222.7.8'
	$user = 'id21869047_katmin';
	$pass = 'Jaquelin24$';

   if (!( $link = @mysqli_connect($host,$user,$pass)) )
   {
      echo "Error al realizar la conexión a la base de datos.";
      exit();
   }

   if (!mysqli_select_db($link,"id21869047_databasej"))
   { 
      echo "Error al seleccionar la base de datos."; 
      exit(); 
   }    
   return $link; 
} 
?>