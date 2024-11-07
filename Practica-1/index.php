<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 1</title>
</head>
<body>
<?php

// EJERCICIO 1

// Nombre
$nom = "Maria"; 
// Edad del usuario
$edat = 28; // Edad del usuario
// Residencia
$ciutat = "Barcelona"; 
// Activo o inactivo
$actiu = true; // Usuario está activo (true)

// con ECHO (Abajo esta con var_dump, no sabia si querias dividido o junto.)

// Printamos el nombre 
echo "Nom: $nom";
var_dump($nom);
echo "<br>"; // Salto de linea

// Printamos la edad
echo "Edat: $edat"; 
echo "<br>";

// Printamos la ciudad
echo "Ciutat: $ciutat"; 
echo "<br>";

// Printamos si esta activo
echo "Actiu: $actiu";  
echo "<br>";
 
// Con VAR_DUMP()

echo "<br>";

// Printamos el tipo de dato de nombre
echo "Nom: ";
var_dump($nom);
echo "<br>";

// Printamos el tipo de dato de edad
echo "Edat: ";
var_dump($edat);
echo "<br>";

// Printamos el tipo de dato de ciudad
echo "Ciutat: ";
var_dump($ciutat);
echo "<br>";

// Printamos el tipo de dato de activo
echo "Actiu: ";
var_dump($actiu);
echo "<br>";


// FUNCION
function mostrarUsuari() {
    global $nom, $edat, $ciutat, $actiu; // Cogemos la informacion global.
    echo "L'usuari $nom té $edat anys, viu a $ciutat i "; // Hacemos echo de cada tipo de dato.
    echo $actiu ? "està actiu." : "no està actiu."; // Accedemos a actiu, si es true dira esta actiu, si es false no esta actiu.
    
}

// Llamamos a la funcion
mostrarUsuari();
echo "<br>";

// EJERCICIO 2

// Funcion comptadorVisites
function comptadorVisites() {
    
    static $comptador = 0; // Variable estática 

    $comptador++; // Contador que ira de uno en uno

    echo "Nombre de visites: $comptador<br>"; // Muestra el valor del contador
}

// Llamamos a la funcion 2 veces.
comptadorVisites(); 
comptadorVisites(); 

?>
</body>
</html>


