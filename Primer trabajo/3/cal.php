<?php 
	$pago = $_POST['pago'];
	$horas = $_POST['horas'];

	echo 'Pago por horas trabajadas: '.($pago*$horas);
	echo '<br>';
	echo 'IR: '.(($pago*$horas)*0.15);
	echo '<br>';
	echo 'INSS: '.(($pago*$horas)*0.06);
 ?>