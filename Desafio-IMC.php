<?php
$altura = 1.70;
$peso = 55;

$imc= $peso/ $altura ** 2;

if ($imc < 18.5 ){
 echo "Abaixo do peso". PHP_EOL;
}if ($imc <= 24.9){
   echo "Peso ideal". PHP_EOL;
}else{
    echo "Peso acima do ideal". PHP_EOL;
}
