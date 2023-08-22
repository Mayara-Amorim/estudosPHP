<?php

$notaBimestre1 =
    [

        "Maria" => 7,

        "Vinicius" => 10,

        "Nalva" => 9
    ];
$notasBimestre2 = [


        "Vinicius" => 10,

        "Nalva" => 8
    ];

//para tirarmos a diferença entre um array e outro, neste caso a Maria so fez prova no 1o bimestre, mas
//não fez no segundo, poderiamos usar o array_diff().

echo  "Quem faltou na prova?" . PHP_EOL;
var_dump(array_diff($notaBimestre1, $notasBimestre2)) . PHP_EOL; //retorna um array contendo todos os VALORES que não estão presentes no array 2,
//mas isso não é tão util nesse caso, por ele so leva em conta os valores, então se a nota for alterada ele tbm mostrará

echo  "Quem faltou na prova?" . PHP_EOL;
var_dump(array_diff_key($notaBimestre1, $notasBimestre2)) .PHP_EOL; //retorna um array contendo todas as CHAVES que não estão presentes no array 2

echo  "Quem aumentou ou diminiu a nota?" . PHP_EOL;
var_dump(array_diff_assoc($notaBimestre1, $notasBimestre2)). PHP_EOL; //retorna um array contendo todas as CHAVES e VALORES que não estão presentes no array 2


echo "Quais alunos faltaram na prova?";
$alunosFaltantes = array_diff_key($notaBimestre1, $notasBimestre2);
var_dump(array_keys(($alunosFaltantes)));//pegando apenas CHAVES
var_dump(array_values(($alunosFaltantes)));//pegando apenas VALORES
echo "Combiando valores". PHP_EOL;//1o param é Chave e o 2o Valor
//para usar combine o array precisa TER O MESMO TAMANHO
var_dump(array_combine(array_keys($alunosFaltantes), array_values($alunosFaltantes)));



