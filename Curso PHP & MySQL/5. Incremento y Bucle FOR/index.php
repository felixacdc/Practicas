<?php
/*
for (VARIABLE; CONDICION ; INCREMENTO) { 
	LO QUE SE VA A REPETIR
}
*/
$sa = '<br/>';

$x = 1;
echo($x);
echo($sa);

$x++; # x es igual a 2
echo($x);
echo($sa);

$x++; # x es igual a 3
echo($x);
echo($sa);

$x--; # x es igual a 2
echo($x);
echo($sa);

echo("<h1> BUCLE FOR </h1>");
echo($sa);

for ($i=0; $i <= 10; $i++) { 
	echo($i);
	echo($sa);
}
echo($sa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mis Bucles</title>
</head>
<body>
	<table style="border: 2px solid black">
		<tbody>
			<?php 
			for ($i=1; $i <= 20; $i++) { 
				echo('<tr style="border: 2px solid black">');
				echo('<td style="border: 2px solid black">' . $i .'</td>');
				echo('<td style="border: 2px solid black">' . $i . '</td>');
				echo('<td style="border: 2px solid black">' . $i .'</td>');
				echo('<td style="border: 2px solid black">' . $i . '</td>');
				echo('<td style="border: 2px solid black">' . $i .'</td>');
				echo('<td style="border: 2px solid black">' . $i . '</td>');
				echo('</tr>');
			}
			?>
		</tbody>
	</table>
</body>
</html>