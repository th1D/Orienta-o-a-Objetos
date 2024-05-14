<?php

class Televisao {
    private $status;
    private $canal;
    private $volume;

    public function __construct() {
        $this->status = false;
        $this->canal = 3;
        $this->volume = 10;
    }

    public function ligaDesliga() {
        $this->status = !$this->status;
    }

    public function aumentaCanal() {
        if ($this->status) {
            $this->canal++;
        }
    }

    public function diminuiCanal() {
        if ($this->status && $this->canal > 1) {
            $this->canal--;
        }
    }

    public function aumentaVolume() {
        if ($this->status && $this->volume < 100) {
            $this->volume++;
        }
    }

    public function diminuiVolume() {
        if ($this->status && $this->volume > 0) {
            $this->volume--;
        }
    }

    public function mostraCanal() {
        return $this->canal;
    }

    public function mostraVolume() {
        return $this->volume;
    }
}

?>