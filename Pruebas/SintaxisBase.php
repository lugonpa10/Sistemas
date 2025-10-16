<?php

//array de datos

$libros = [

    ["titulo" => "Cien años de soledad", "autor" => "Garcia Marquez", "categoria" => 0],
    ["titulo" => "Ganar Australia 2026", "autor" => "Fernando alonso", "categoria" => 1],
    ["titulo" => "Sapiens", "autor" => "Yuhal Nahir", "categoria" => 2],
    ["titulo" => "Cien años", "autor" => " Marquez", "categoria" => 3]

];

//funcion intermedia
function info_libro($libro)
{
    return [
        "titulo_completo" => strtoupper($libro['titulo']), // lo pone en mayusculas
        "autor" => $libro['autor'],
        "longitud_titulo" => strlen($libro['titulo'])
    ];
}


echo "<h1><em>Libros de mi biblioteca</em></h1>";
echo "<br>";

//codigo para recorrer mis libros

$contador = 0;

while ($contador < count($libros)) {
    $info = info_libro(($libros[$contador]));
    echo "Titulo :{$info['titulo_completo']} | Autor : {$info['autor']} | longitud del libro : {$info['longitud_titulo']}";
    echo "<br>";
    $contador++;
}

echo "<br>";
function filtroCategoria($tipo)
{
    global $libros;

    switch ($tipo) {
        case 0:
            $genero = "narrativa";
            break;
        case 1:
            $genero = "Historia";
            break;
        case 2:
            $genero = "Ciencia";
            break;
        default:
            $genero = "desconocido";
    }

    echo "Los libros con el genero $genero encontrados son :";
    echo "<br>";

    $resultado = array(); // array vacio

    foreach ($libros as $indice => $libro) {

        foreach ($libro as $clavecol => $valorcol) {
            if ($clavecol == "categoria" && $valorcol == $tipo) {
                $resultado[] = $libro['titulo'];
            }
        }
    }
    return $resultado;
}



echo "<h3><em> Filtro por categoria </em><h3>";
    echo "<br>";

    $arrayfinal = filtroCategoria(0);
    print_r($arrayfinal);
    ?>
