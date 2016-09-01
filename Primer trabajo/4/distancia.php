<?php 
	$cantidad = $_POST['cantidad'];

	if(!empty($_POST['cent'])){
		$conver = $cantidad;
		echo $conver.'cm';
		echo '<br>';
	}
	if(!empty($_POST['pulg'])){
		$conver = $cantidad/2.5;
		echo $conver.'pulg';
		echo '<br>';
	}
	if(!empty($_POST['metros'])){
		$conver = $cantidad/100;
		echo $conver.'mts';
		echo '<br>';
	}
	if(!empty($_POST['kilom'])){
		$conver = $cantidad/100000;
		echo $conver.'km';
	}


 ?>