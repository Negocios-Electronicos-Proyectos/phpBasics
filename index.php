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
echo "<br>";
$numero = 5.5; //No es necesario identificar el tipo de dato porque php lo asocia
var_dump($numero);
echo "<br>";
$login = False;
var_dump($login);
echo "<br>";

//Arreglos indexados
$carrito = [];
$edades = array();
$carrito = ['Plasma', 'Celular', 'Tablet', 'TV'];
var_dump($carrito[1]);
echo "<br>";
array_push($carrito, 'audifonos');
var_dump($carrito);
echo "<br>";
array_unshift($carrito, 'SmartWatch');
var_dump($carrito);

//Arreglo asociativo
$cliente = [
    'nombre' => 'Juan',
    'apellido' => 'Perez',
    'información' => [
        'tipo' => 'vip'
    ]
];

echo "<br>";
echo $cliente['nombre'];
echo "<br>";
echo $cliente['apellido'];
echo "<br>";
$cliente['código']=278;
var_dump($cliente);


