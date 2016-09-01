<?php
	$can = $_POST['can'];
	$conver = $_POST['conver'];

	if($conver=="cord"){
		echo 'Cordoba a Dolares es: '.($can/29);

	}else if($conver=="dolor"){
		echo 'Dolores a Cordoba es: '.($can*29);
	}
?>