<?php

$idades =[21,23, 52];

$idadeVinicius = $idades[0];
$idadeJoao = $idades[1];
$idadeMaria = $idades[2];

list($idadeMaria, $idadeJoao, $idadeVinicius) = $idades;

//Com isso, conseguiremos pegar os valores de dados cujas posições nós já conhecemos,
//tudo isso em uma única linha. Se quiséssemos pegar somente o primeiro e o terceiro valor,
//poderíamos passar um índice sem variável atribuída:

list($idadeVinicius, , $idadeMaria) = $idades;
