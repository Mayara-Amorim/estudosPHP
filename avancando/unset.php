<?php

$idades =[
    [
   'nome' => 'Mayara',
    'idade'=> 23
 ],
    [
 'nome' => 'Adrielle',
    'idade'=> 37
]
];
foreach ($idades as $pessoas){
    echo "Nome: " . $pessoas['nome'] . ", Idade: " . $pessoas['idade'] . PHP_EOL;
}
unset($idades[0]); //apagando indice zero

    foreach ($idades as $pessoas) {
        echo "Nome: " . $pessoas['nome'] . ", Idade: " . $pessoas['idade'] . PHP_EOL;

    }