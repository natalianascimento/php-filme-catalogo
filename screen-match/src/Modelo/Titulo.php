<?php

class Titulo
{
    private array $notas;
    private const float NOTA_MINIMA = 7.5;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    ) {
        $this->notas = [];
    }

    public function avalia(float $nota): void 
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
    
    public function bom(): bool
    {
        return $this->media() >= self::NOTA_MINIMA;
    }
}