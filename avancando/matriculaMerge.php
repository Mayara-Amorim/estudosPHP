<?php

$ano2022=[
    'Joao Pedro',
    'Maria Helena',
    'Henrique',
    'Antonio Carlos',
    'Mariana',
];

$novosAlunos =[

    'Ana',
    'Andre',
    'Vinicius',
    'Eloisa'
];

$alunos2023 = array_merge($ano2022, $novosAlunos);
foreach ($alunos2023 as $num => $alunos){
    echo $num . ": " . $alunos .PHP_EOL;
}
echo "Desempacotando...";
$array =[
    ...$ano2022, ...$novosAlunos
];
//com isso temos em um unico array a união entre $ano2022, $novosAlunos. É como se ele estivesse assim agora:
//Joao Pedro
//Maria Helena
//Henrique
//Antonio Carlos
//Mariana
//Ana
//Andre
//Vinicius
//Eloisa
//e se quissemos podriamos adiconar valores soltos
//$array =[
//    ...$ano2022, 'Carlos', 'Marcos', ...$novosAlunos]; existe desde a v7.4 php

/*Em funcoes o funcionamento de "..." é outro
function funcao(int $a, int $b, int $c){

}
*/
/*
funcao(...[1, 2, 3]) Com esse operador, posso passar como parametro um array, pois cada item vai ser
individual.

*/