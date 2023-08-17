<?php

echo "*********************************WHILE***********************************" . PHP_EOL;
$i =0;
while( $i < 16){
    echo $i . PHP_EOL;
    $i++ . PHP_EOL;

}
echo "*********************************FOR***********************************" . PHP_EOL;
for($x = 1; $x<16; $x++){
    if (($x == 13)){
        continue; //pula esse e continua
    }
    echo $x . PHP_EOL;
}

echo "*********************************INTERROMPE LOOP***********************************" . PHP_EOL;

for($x = 0; $x<16; $x++){
    if (($x == 13)){
        break; //para aqui
    }
    echo $x . PHP_EOL;
}
