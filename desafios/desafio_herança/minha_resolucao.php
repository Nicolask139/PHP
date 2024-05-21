<?php

class Notas {
    public $nota1;
    public $nota2;
    public $nota3;
    public $nota4;

    public function __construct($nota1, $nota2, $nota3, $nota4) {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }
}

class Media extends Notas {
    public function calcularMedia() {
        $total = $this->nota1 + $this->nota2 + $this->nota3 + $this->nota4;
        $media = $total / 4;
        return $media;
    }
}

class Aluno extends Media {
    private $nome;

    public function __construct($nome, $nota1, $nota2, $nota3, $nota4) {
        parent::__construct($nota1, $nota2, $nota3, $nota4);
        $this->nome = $nome;
    }

    public function imprimirMedia() {
        $media = $this->calcularMedia();
        echo "A média das notas do aluno {$this->nome} é: " . number_format($media, 2) . "\n";
    }
}

$aluno = new Aluno("João", 7.5, 8.0, 9.0, 6.5);
$aluno->imprimirMedia();

?>
