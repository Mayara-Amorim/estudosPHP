<?php

$conta1 [47464808851]=[
    'titular' => 'Mayara',
    'saldo' => 1200,

];

$conta2 [78430944192] =[
    'titular'=> 'Jaqueline Lima',
    'saldo'=> 200
];
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
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

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Contas Correntes</h1>


        <dl>
            <?php foreach($contasCorrentes as $cpf => $contas) { ?>
                <dt>
                    <h3><?= $contas['titular']; ?> - <?= $cpf; ?></h3>
                </dt>
                <dd>Saldo: <?= $contas['saldo']; ?></dd>
            <?php } ?>
        </dl>
</body>
</html>
