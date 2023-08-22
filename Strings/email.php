<?php
//heredoc
function email(string $nome) : void{
    $conteudo = <<<FINAL
    Querido $nome,
    
    
    Em código e linhas se entrelaça,
    $nome, linguagem que o mundo abraça.
    Classes e métodos em harmonia,
    Em bits e bytes, a magia se cria.
    
   

FINAL;
        echo $conteudo;
}

 email("Java");

