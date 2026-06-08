<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    nome: "Thor - Ragnarock",
    anoLancamento: 2021,
    genero: "super-herói",
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento() . "\n";