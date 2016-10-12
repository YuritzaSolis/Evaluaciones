<?php 
require('conexion.php');
$id=$_GET['id'];
$consulta="DELETE FROM trabajos where id='$id'";
$resultado=$mysqli->query($consulta);
header('location:../administrar.php');
exit();


 ?>