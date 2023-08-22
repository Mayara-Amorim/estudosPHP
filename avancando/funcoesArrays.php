<?php
    $num=[
        [
          0=> null,
          1=> 1,
          2=> 2,
        ],
        [
            3=> 3,
            4=> 4,
            5=> 5
        ]
    ];

$notas = [
    [
        "Nome" => "Maria",
        "Nota" => 7,
    ],
    [
        "Nome" => "Karina",
        "Nota" => 10,
    ],
    [
        "Nome" => "Vinicius",
        "Nota" => 9,
    ]
];



$notaNome = [
    [

        "Maria" => 7,
    ],
    [

        "Vinicius" => 10,
    ],
    [

        "Nalva" => 9,
    ]
];

//Eu quero ordenar agora em ordem decrescente, ou seja, se a nota 1
//for maior do que a nota 2 eu quero que ela venha primeiro. Ou seja,
//se a nota 1 for maior do que a nota 2 eu quero retornar um número negativo,
//menos um, por exemplo.

function ordenaArrays (array $array1, array $array2 ) : int
{ if ($array1 ['Nota'] < $array2['Nota']){
    return -1;
}
if ($array1['Nota'] > $array2['Nota']){
    return 1;
}
    return 0;
}
//Poderiamos trocar todo esse trecho por uma unica linha:

function ordenacao(array $nota1, array $nota2): int{
    return $nota2['Nota']<=> $nota1['Nota'];

}

usort($notas, 'ordenaArrays');
var_dump($notas);

usort($notas, 'ordenacao');

var_dump($notas);
//Note porem que os INDICES foram perdidos, para ordenar e manter os indices tente:

arsort($notas);
asort($notas);

//ordenando pelas chaves, no caso pelo nome
ksort($notas);
krsort($notas);

var_dump((array_is_list($num)));
var_dump(isset($notas['Vinicius']));// verificando se chave existe e não é nula
var_dump(array_key_exists('Vinicius', $notas)); //verificando se uma variavel (chave) está lá, independentemente
var_dump(in_array(9, $notas)); //verifica se existe (valor) nota 9 no array

echo 'Quem tirou 10?' . PHP_EOL;

var_dump(array_search(10, $notaNome));// se colocarmos um 3o parametro (strict) ele vai fazer a comparação
//de valores com esse operador === (identico). Ou seja, um inteiro tem de ser inteiro e não uma string numerica ('10')
//Comparações mais “rígidas” no PHP, garantindo que não há conversão de tipos. Isso será necessario pois no PHP,
//zero e null são iguais com o operador ==.
