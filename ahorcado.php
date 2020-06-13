<?php

if ($argc !==2){
    echo 'Número incorrecto de parametros';
}

$secretWord = $argv[1];

echo 'bienvenido a el juego de Ahorcado ' . PHP_EOL;
echo 'La palabra secreta tiene' . mb_strlen($secretWord) . 'letras' . PHP_EOL;

const MAX_ATTEMPTS = 7;

$attempts = 0;

do {
    echo 'Por favor digite una letra:' . PHP_EOL;
    $letter = trim(fgets(handle:STDIN))

    $letters = str_split_unicode($secretWord);

    if (in_array($letter, $letters)) {
        echo 'Correcto' . PHP_EOL;

    }else {
        echo 'Incorrecto' . PHP_EOL;
    }

    $attempts++;


} while($attempts < MAX_ATTEMPTS);

function str_split_unicode($str) {
    return preg_split( pattern: "")
}

echo 

