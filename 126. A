<!DOCTYPE html>
<html>
<head>
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <?php

    class Retangulo {
        private $ladoMaior;
        private $ladoMenor;

        public function setLadoMaior(float $maior): void {
            $this->ladoMaior = $maior;
        }

        public function setLadoMenor(float $menor): void {
            $this->ladoMenor = $menor;
        }

        public function calculaArea(): float {
            return $this->ladoMaior * $this->ladoMenor;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $retangulo = new Retangulo();
        $retangulo->setLadoMaior($_POST["ladoMaior"]);
        $retangulo->setLadoMenor($_POST["ladoMenor"]);
        $area = $retangulo->calculaArea();
        echo "A área do retângulo é: " . $area . " unidades quadradas.";
    } else {
    ?>

    <h1>Cálculo da Área do Retângulo</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Lado Maior: <input type="text" name="ladoMaior"><br>
        Lado Menor: <input type="text" name="ladoMenor"><br>
        <input type="submit" name="submit" value="Calcula Area">
    </form>

    <?php
    }
    ?>
</body>
</html>