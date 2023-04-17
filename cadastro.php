<?php
	include("animal.php");
	
	$nome = $_GET["nome"];
	$tutor = $_GET["tutor"];
	
	echo "Nome: $nome e Tutor: $tutor <br/><br/>";

	$animal = new Animal($nome, $tutor);
	
	echo "Nome:" . $animal->nome;
	
	$con = mysqli_connect("localhost", "root", "vertrigo", "veterinaria");
	
	$sql = "INSERT INTO animal
	(nome, tutor)
	VALUES ('$nome', '$tutor')";
	
	$resultado = mysqli_query($con, $sql);
	
	
	
	
	
	
	
	
	
?>