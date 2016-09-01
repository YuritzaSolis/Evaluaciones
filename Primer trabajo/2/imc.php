<?php 
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	echo 'IMC: '.($peso/($altura*$altura));

 ?>