<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];

		$suma = $num1 + $num2;
		$resta = $num1 - $num2;
		$multiplicacion = $num1 * $num2;
		$division = $num1 / $num2;

		echo $num1." + ".$num2." = ".$suma; 
		echo "<br>";
		echo $num1." - ".$num2." = ".$resta; 
		echo "<br>";
		echo $num1." * ".$num2." = ".$multiplicacion; 
		echo "<br>";
		echo $num1." / ".$num2." = ".$division; 
	}
?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Suma de 2 numeros en PHP</title>
</head>
<body>
<H2>Suma de 2 Números</H2>
<form method="POST">
	<table>
	<tr>
		<td><input type="text" placeholder="Número 1" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" placeholder="Número 2" name="numero2"></td>
	</tr>
	<tr>
   <td> <input type="submit" value="CALCULAR"> </td>
	</tr>
</table>
</form>
</body>
</html>
