<?php

require 'autoload.php';

use ScreenMatch\Modelo\{Genero, Serie, Episodio};
use ScreenMatch\Calculos\ConversorNotaEstrela;

$serie = new Serie('Nome da Serie', 2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);
// $episodio->avalia(10);

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio) . "\n"; 