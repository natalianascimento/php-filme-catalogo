<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Genero.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    "Thor - Ragnarock",
    2021,
    Genero::SuperHeroi,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

var_dump($filme->bom());