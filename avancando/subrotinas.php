<?php

$conta1 [47464808851]=[
    'titular' => 'Mayara',
    'saldo' => 1200,

];

$conta2 [78430944192] =[
    'titular'=> 'Jaqueline Lima',
    'saldo'=> 200
];



function exibeMensagem(){
    echo "Voce não tem saldo suficiente" . PHP_EOL;
}

function saque($conta, $valor){
    if ($valor > $conta['saldo']){
        exibeMensagem();
    }else{
        $conta['saldo'] -= 500;
        echo "Saque realizado com sucesso!!! Volte sempre..." . PHP_EOL;
    }
    return $conta;
}
$conta1[47464808851] = saque($conta1[47464808851], 500);


function depositar($conta, float $valor){
    if ( $valor < 0){
        echo 'Nao foi possivel depositar'. PHP_EOL;
    }
    $conta['saldo']+= $valor;
    return $conta;
}

function exibeConta(array $conta){
    ['titular' => $titular, 'saldo'=> $saldo] =$conta;
    echo "<li> Titular: $titular . Saldo: $saldo</li>";

}

$conta2 [78430944192] = depositar($conta2[78430944192], 900);

foreach ($conta2 as $cpf=> $conta){
   echo "Saldo atual: R$ " . $conta['saldo'] . PHP_EOL;
}

