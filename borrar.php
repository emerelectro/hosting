<?php
include_once('conectar.php');

$conexion=mysqli_connect('localhost','root','','datos');

$codigo=$_GET['id'];

$sql="DELETE FROM personave WHERE codigo='$codigo'";
$query=mysqli_query($conexion,$sql);

    if($query){
			echo '<script language="javascript">';
			echo 'alert("El registro fue eliminado");';
			echo 'window.location="crudev.php";';
			echo '</script>';
		  
		  }else{
			  
			echo '<script language="javascript">';
			echo 'alert("Error en proceso de actualización de registro!");';
			echo 'window.location="crudev.php";';
			echo '</script>';
		}
	
?>