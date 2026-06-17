<?php

require_once 'autoload.php';

use ScreenMatch\Modelo\{
    Filme, Episodio, Serie, Genero
};
use ScreenMatch\Calculos\{
    CalculadoraDeMaratona, ConversorNotaEstrela
};


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