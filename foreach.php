<?php
//foreach de array escalar
$a = [
    "Augusto",
    "Rolandelli",
    21
];
foreach ($a as $valor) {
    echo "$valor <br>";
}

//foreach de array asociativo

$b = [
    "Frutilla"=>"no hay",
    "Banana"=>20,
    "Manzana"=>70,
    "Palta"=>10,
    "Mandarina"=>120,
];

foreach($b as $clave=>$valor){
    echo "$clave: $valor <br>";
}

//foreach de array de arrays

$c = [
    ["codigo"=>"A0001", "descripcion"=>"Mouse"],
    ["codigo"=>"A0002", "descripcion"=>"Teclado"],
    ["codigo"=>"A0003", "descripcion"=>"Monitor"],
    ["codigo"=>"A0004", "descripcion"=>"Impresora"],
];

foreach ($c as $producto) {
    echo $producto["codigo"].": ". $producto["descripcion"] ."<br>";
}







?>