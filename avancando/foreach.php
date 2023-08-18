<?php
$conta1 = ['titular'=> "Mayara",
    "saldo"=> 3.200
];

$conta2 = ['titular'=> "Ana Cleice",
    "saldo"=> 200
];
$conta3 = ['titular'=> "Vitor Hugo",
    "saldo"=> 50.000
];


$contas = [ //aqui vou ter indices de 0 a 2, mesmo lá em cima definindo chaves, pois aqui tenho outro array.
    $conta1,
    $conta2,
    $conta3
];

foreach ($contas as $conta){
    echo $conta['titular'] . PHP_EOL;

}


// Mas e se eu não souber exatamente quais os meus indices pois os troquei pelo |CPF?
// O for each é a melhor opção para iterar minha estrutura, pois eu não preciso
//saber meus indices
//Exemplo:


$contas = [
 47464808851 =>   $conta1,
 47864799954 =>   $conta2,
 54268793211 =>   $conta3
];

foreach ($contas as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
}
foreach ($contas as $cpf => $conta){
    echo $cpf . PHP_EOL;

}


$carros = [
    'LMS-2232' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}


