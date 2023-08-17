<?php
$idade = 18;
$acompanhante = 1;

if($idade >= 18){
    echo "Pode entrar sozinho (a)!";
}else if ($idade >= 16 && $acompanhante > 1){
        echo "Pode entrar, pois está acompanhado (a)!" . PHP_EOL;
    }else{
        echo "Não poderá entrar!";
    }
//Com isso, se quiséssemos atribuir uma mensagem se a pessoa for menor de
//  idade, e outra caso contrário, poderíamos fazer:
//$idade = 15;
//$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
//echo $mensagem;

