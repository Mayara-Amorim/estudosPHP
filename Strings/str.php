<?php
$email= "ana@alura.com.br";
$senha = '123';
$nome = 'Ana Silveira';

$telefone = ['11 976690766', "11 990024592", '11 974178895'];
($posicaoArroba = strpos($email, '@'));
echo substr($email,0,$posicaoArroba) . PHP_EOL;
echo strlen($senha) . PHP_EOL;//tamanho em bytes

echo strtoupper($email) . PHP_EOL;//maiuscula
echo strtolower($email) . PHP_EOL;//minuscula

echo "Separando nome e sobrenome: " . PHP_EOL;;

list($nome, $sobrenome) = explode(' ', $nome);//separando nome e sobrenome. Como esse metodo
// devolve um array podemos usar o list para criar variaveis

echo implode(PHP_EOL, $telefone); //transformando um array em string
trim($email);//removendo espacos. Tu pode colocar um 2o parametro como string os caracteres que deseja remover
//trim($email, '.,*');





