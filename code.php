<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Classes de números</h1>
        <?php
        function verificarNumero($numero) {
            if ($numero == 0) {
                return "O número zero é neutro.";
            }
            if ($numero % 2 == 0) {
                $paridade = "par";
            } else {
                $paridade = "ímpar";
            }
            if ($numero % 5 == 0) {
                $redondo = "redondo";
            } else {
                $redondo = "não redondo";
            }
            if ($numero > 0) {
                $sinal = "positivo";
            } else {
                $sinal = "negativo";
            }
            return "O número $numero é $paridade, $sinal e $redondo.";
        }
        $numeros = [5, 2, -4, 0, 20];
        foreach ($numeros as $numero) {
            echo "<div class='result'>" . verificarNumero($numero) . "</div>";
        }
        ?>
    </div>
</body>
</html>
