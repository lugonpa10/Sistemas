<?php
$meses = array(
    'enero','febrero','marzo','abril',
    'mayo','junio','julio','agosto',
    'septiembre','octubre','noviemnbre','diciembre'
);


$mesesConM = array();

foreach ($meses as $mes) {
    if (($mes[0]) == 'm') { 
        $mesesConM[] = $mes; 
    }
}


foreach ($mesesConM as $mes) {
    echo " <h1> los meses son : $mes\n </h1> ";
}
?>
