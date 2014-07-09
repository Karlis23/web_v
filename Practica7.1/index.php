
<?php
	echo "<h1>Hola mundo desde php</h1>";
	/*Definición de constantes*/
	define("CONSTANTE", "Karla.");
	echo CONSTANTE; // muestra "Karla"
	echo Constante; // muestra "Constant" y se emite un aviso.

	echo "<br/> <br/>"; 
	$var= "BOB";
	$Var= "JOE";
	echo "$var,$Var";

	echo "<br/> <br/>";

	$foo = 'Bob'; // Asigna el valor 'Bob' a $foo 
	$bar = &$foo; // Referencia $foo vía $bar.
	$bar = "Mi nombre es $bar"; // Modifica $bar...
	echo $foo; // $foo también se modifica.
	echo "<br/> <br/>";
	echo $bar;
	$a =17;
	$b =9;

	echo "<br/> <br/>";
	//if
	if ($a > $b) 
	{
		print "a es mayor que b";
		$b = $a;
	}
	else 
	{
		print "a NO es mayor que b";
	}

	//elseif
	if ($a > $b) 
	{
		print "a es mayor que b";
	} elseif ($a == $b) 
	{
		print "a es igual que b";
	} else 
	{
		print "a es mayor que b";
	}

	//while

	$i = 1;
	while ($i <= 10) 
	{
		print $i++."\n"; /* el valor impreso sería $i antes del incremento (post-incremento) */
	}
//do... while
	echo "<br><br>";
	$i = 0;
	do {
		print $i;
		} while ($i>0);

		// for

		/* ejemplo 2 */
for ($i = 1; ;$i++) {
if ($i > 10) {
break;
}
print $i;
}
/* ejemplo 3 */
$i = 1;
for (;;) {
if ($i > 10) {
break;
}
print $i;
$i++;
}
/* ejemplo 4 */
for ($i = 1; $i <= 10; print $i, $i++) ;
	?>
