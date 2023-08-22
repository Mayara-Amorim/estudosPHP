<?php
$array = [10,2,7,4];
$tamanho = count($array);
for ($i= 0; $i < $tamanho; $i++){
    echo $array[$i] . PHP_EOL;
}
echo "O tamanho desse array é: $tamanho";

$notasOrdenadas = $array;
sort($notasOrdenadas);
echo "Notas Desoderndas";
var_dump($array) . PHP_EOL;
echo "Notas Ordenadas";
var_dump($notasOrdenadas);
