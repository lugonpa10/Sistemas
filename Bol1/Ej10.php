<?php
$fin = 10000;

$a = 1;  
$b = 2;  

echo $a . " ";
echo $b . " ";

while (true) {
    $c = $a + $b; 
    
    if ($c > $fin) {
        break; 
    }
    
    echo $c . " ";
    
 
    $a = $b;
    $b = $c;
}
?>
