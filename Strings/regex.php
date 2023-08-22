<?php
$telefone = ['(11) 97669 - 0766', '(11) 99002 - 4592', '(11) 97417 - 8895'];


foreach ($telefone as $item) {
    $telefoneValido = preg_match('/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/', $telefone);

    if($telefoneValido){
        echo 'Telefone valido';
    }else{
        echo "Telefone invalido";
    }
}
