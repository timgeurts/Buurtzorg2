<?php 

function solicitante() {
	$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
	$sql = "SELECT * from solicitanten WHERE status = '0'";
	$result = mysqli_query($mysqli, $sql);
	result
}







?>