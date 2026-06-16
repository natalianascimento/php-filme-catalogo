<?php

require __DIR__ . "/src/Modelo/Avaliavel.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Episodio.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Calculos/ConversorNotaEstrela.php";


echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme(
    "Thor - Ragnarock",
    2021,
    Genero::SuperHeroi,
    180
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(3);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

var_dump($filme->bom());

echo "\n";

$serie = new Serie(
    "Lost",
    2007,
    Genero::Drama,
    10,
    20,
    30
);
var_dump($serie);

$episodio = new Episodio($serie, 'Episodio Piloto', 1);

echo $serie->anoLancamento . "\n";
$serie->avalia(8);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos.\n";

$conversor = new ConversorNotaEstrela();
echo "Serie: " . $conversor->converte($serie) . " estrelas\n";
echo "Filme: " . $conversor->converte($filme) . " estrelas\n";