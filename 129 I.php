<?php

class Aeroporto {
    private $nome;
    private $cidade;

        public function getNome(): string {
        return $this->nome;
    }

    // Método setter para nome
    public function setNome(string $nome): void {
        $this->nome = $nome;

    public function getCidade(): string {
        return $this->cidade;
    }

    public function setCidade(string $cidade): void {
        $this->cidade = $cidade;
    }
}

?>