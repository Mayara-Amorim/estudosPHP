<?php

$idade = 23;
echo "Ola, mundo String! Minha idade é:  $idade  anos\n" ;
echo 'Eu tenho ' . $idade . ' anos';

//podemos se desejarmos utilizar o end of line (PHP_EOL;) para pularmos uma linha
//e lidarmos com diferenças nos sistemas operacionais;
//Esta constante leva em consideração os diferentes caracteres utilizados para
//quebrar linha em diferentes sistemas operacionais. Alguns sistemas operacionais utilizam o caracter \n
//para representar uma quebra de linha. Outros, utilizam \r. Já o Windows utiliza ambos (\r\n).
//Utilizando a constante PHP_EOL nos é abstraída esta diferença e podemos deixar
//nosso código funcionando de forma igual em todas as plataformas.
//Dessa forma:

//echo "Ola, mundo String! Minha idade é:  $idade  anos" . PHP_EOL;
//echo 'Eu tenho ' . $idade . ' anos';