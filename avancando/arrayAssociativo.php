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


$contas = [$conta1, $conta2, $conta3];



 for($i =0; $i < count($contas); $i++ ){
    echo $contas[$i]['titular'] . PHP_EOL;
}

