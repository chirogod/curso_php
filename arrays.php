<?php
//ARRAY ESCALAR
$estudiantes = array("Carlos", "Augusto", "Jose");//FORMA VIEJA 
echo $estudiantes[2];

$numeros = [0,5,7,5];//FORMA NUEVA
echo $numeros[2];


//ARRAY ASOCIATIVOS
$profesores = [
    "nombre"=>"Augusto",
    "apellido"=>"Rolandelli",
    "edad"=>21
];

echo $profesores["nombre"];


//ARRAYS MULTIDIMENSIONALES
//MULTIDIMENCIONAL ESCALAR
$marcas = [
    "nombre"=>"apple",
    "celulares"=>[
        "iphone 12",
        "iphone 13",
        "iphone 15"
    ]
];
echo $marcas["celulares"][0];
//MULTIDIMENSIONAL ASOCIATIVO
$carrera = [
    "nombre"=>"Licenciatura sistemas",
    "materia"=>[
        "nombre"=>"programacion",
        "duracion"=>10
    ]
];
echo $carrera["materia"]["duracion"];


echo count($carrera);

echo count($carrera, COUNT_RECURSIVE); //para contar hasta los elemtnos dentro de arrays dimensionales

?>