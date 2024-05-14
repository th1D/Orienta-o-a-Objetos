<!DOCTYPE html>
<html>
<head>
    <title>Sequência de Números</title>
</head>
<body>
    <h1>Sequência de Números</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Início: <input type="text" name="inicio"><br>
        Fim: <input type="text" name="fim"><br>
        <input type="submit" name="submit" value="Mostrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sequencia = new Sequencia();
        $sequencia->setInicio($_POST["inicio"]);
        $sequencia->setFim($_POST["fim"]);

        echo "<h2>Todos os Números:</h2>";
        $sequencia->exibirTodosNumeros();

        echo "<h2>Apenas os Pares:</h2>";
        $sequencia->exibirPares();

        echo "<h2>Apenas os Ímpares:</h2>";
        $sequencia->exibirImpares();
    }
    ?>
</body>
</html>