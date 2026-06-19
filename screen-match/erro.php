<?php

require 'autoload.php';

use ScreenMatch\Modelo\{Genero, Serie, Episodio};
use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Exception\NotaInvalidaException;

try {
    $serie = new Serie('Nome da Serie', 2024, Genero::Acao, 7, 20, 30);
    $episodio = new Episodio($serie, 'Piloto', 1);
    $episodio->avalia(45);
    $episodio->avalia(-35);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio) . "\n"; 
} catch (NotaInvalidaException $e) {
    echo "Um problema aconteceu: " . $e->getMessage() . "\n";
}
