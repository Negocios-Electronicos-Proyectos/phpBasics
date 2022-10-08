<?php
//Primera forma de impresión
echo "Hola Mundo";

//Llamada de html, no se reomienda porque se generaría una sobrecarga
echo "<br>";

//Segunda forma de impresión
print("Hola mundo 2");
echo "<br>";
//Tercera forma de impresión
print_r("Hola mundo 3");
echo "<br>";

var_dump("Hola mundo");
$numero=5.5; //No es necesario identificar el tipo de dato porque php lo asocia
var_dump($numero);
?>