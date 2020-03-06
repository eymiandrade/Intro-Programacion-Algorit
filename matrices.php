<!DOCTYPE html>
<html>
<head>
	<title>Matriz</title>
</head>
<body>
<form action="matrices.php" method="POST"> 
	<br>Nombre del alumno:</br>
	<input type="text" name="info[name]">
	<br>Cal1:</br>
	<input type="number" name="info[cal1]">
	<br>Cal2:</br>
	<input type="number" name="info[cal2]">
	<br><input type="submit" name="enviar"></br>
</form>
<?php
if (isset($_POST['info'])) {
	$array=$_POST['info'];
	$name=$array['name'];
	$cal1=$array['cal1'];
	$cal2=$array['cal2'];
	echo "<br>Nombre: </br>".$name. "<br>Calificaion 1:</br>".$cal1."<br>Calificacion 2:</br>".$cal2."<br>";


	$valores= array(
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
		array($name, $cal2, $cal2),
	);
	echo "Nombre: ".$valores[0][0]." Calificacion 1: ".$valores[0][1]." Calificacion 2: ".$valores[0][2]."<br>";
	echo "Nombre: ".$valores[1][0]." Calificacion 1: ".$valores[1][1]." Calificacion 2: ".$valores[1][2]."<br>";
	echo "Nombre: ".$valores[2][0]." Calificacion 1: ".$valores[2][1]." Calificacion 2: ".$valores[2][2]."<br>";
	echo "Nombre: ".$valores[3][0]." Calificacion 1: ".$valores[3][1]." Calificacion 2: ".$valores[3][2]."<br>";
	echo "Nombre: ".$valores[4][0]." Calificacion 1: ".$valores[4][1]." Calificacion 2: ".$valores[4][2]."<br>";
	echo "Nombre: ".$valores[5][0]." Calificacion 1: ".$valores[5][1]." Calificacion 2: ".$valores[5][2]."<br>";
	echo "Nombre: ".$valores[6][0]." Calificacion 1: ".$valores[6][1]." Calificacion 2: ".$valores[6][2]."<br>";
	echo "Nombre: ".$valores[7][0]." Calificacion 1: ".$valores[7][1]." Calificacion 2: ".$valores[7][2]."<br>";
	echo "Nombre: ".$valores[8][0]." Calificacion 1: ".$valores[8][1]." Calificacion 2: ".$valores[8][2]."<br>";
	echo "Nombre: ".$valores[9][0]." Calificacion 1: ".$valores[9][1]." Calificacion 2: ".$valores[9][2]."<br>";



	
}
?>

</body>
</html>