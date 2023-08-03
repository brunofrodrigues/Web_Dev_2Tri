<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="./css/global.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    
    <main>
    <h2>Trabalho: Questão 4</h2>

    <?php
    function calcularInvestimento($aporte_inicial, $aporte_mensal, $rendimento_mensal, $periodo) {
        $resultado = array();
        $rendimento_total = 0;
        $valor_total = $aporte_inicial;

        for ($mes = 1; $mes <= $periodo; $mes++) {
            $rendimento = ($valor_total + $aporte_mensal) * ($rendimento_mensal / 100);
            $valor_total += $aporte_mensal + $rendimento;
            $rendimento_total += $rendimento;

            $resultado[] = array(
                'mes' => $mes,
                'valor_inicial' => $valor_total - $aporte_mensal - $rendimento,
                'aporte' => $aporte_mensal,
                'rendimento' => $rendimento,
                'total' => $valor_total
            );
        }

        return array('rendimento_total' => $rendimento_total, 'resultado' => $resultado);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aporte_inicial = floatval(str_replace(',', '.', $_POST["aporte_inicial"]));
        $aporte_mensal = floatval(str_replace(',', '.', $_POST["aporte_mensal"]));
        $rendimento_mensal = floatval(str_replace(',', '.', $_POST["rendimento_mensal"]));
        $periodo = intval($_POST["periodo"]);

        $resultado_simulacao = calcularInvestimento($aporte_inicial, $aporte_mensal, $rendimento_mensal, $periodo);
    }
    ?>

    <form action="" method="post">
        <label for="aporte_inicial">Aporte Inicial:</label>
        <input type="text" name="aporte_inicial" id="aporte_inicial" required maxlength="10" pattern="^\d{1,8}(,\d{2})?$" value="<?php echo isset($aporte_inicial) ? number_format($aporte_inicial, 2, ',', '.') : ''; ?>">
        <label for="aporte_inicial">até R$ 999.999.99</label>
        <br>

        <label for="periodo">Período (meses):</label>
        <input type="number" name="periodo" id="periodo" required min="1" max="480" value="<?php echo isset($periodo) ? $periodo : ''; ?>">
        <label for="periodo">1 a 480</label>
        <br>

        <label for="rendimento_mensal">Rendimento Mensal (%):</label>
        <input type="number" name="rendimento_mensal" id="rendimento_mensal" required min="1" max="20" pattern="^\d{1,2}(\.\d{1,2})?$" value="<?php echo isset($rendimento_mensal) ? number_format($rendimento_mensal, 2, ',', '.') : ''; ?>">
        <label for="rendimento_mensal">até 20%</label>
        <br>

        <label for="aporte_mensal">Aporte Mensal:</label>
        <input type="text" name="aporte_mensal" id="aporte_mensal" required maxlength="10" pattern="^\d{1,8}(,\d{2})?$" value="<?php echo isset($aporte_mensal) ? number_format($aporte_mensal, 2, ',', '.') : ''; ?>">
        <label for="aporte_mensal">até R$ 999.999.99</label>
        <br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($resultado_simulacao)) {
        echo "<h2>Resultado da Simulação de Investimento Financeiro</h2>";
        echo "<p>Aporte Inicial: " . number_format($aporte_inicial, 2, ',', '.') . "</p>";
        echo "<p>Aporte Mensal: " . number_format($aporte_mensal, 2, ',', '.') . "</p>";
        echo "<p>Rendimento Mensal: " . number_format($rendimento_mensal, 2, ',', '.') . "%</p>";
        echo "<p>Período (meses): $periodo</p>";

        echo "<table>";
        echo "<tr><th>Mês</th><th>Valor Inicial</th><th>Aporte</th><th>Rendimento</th><th>Total</th></tr>";
        foreach ($resultado_simulacao['resultado'] as $mes_resultado) {
            echo "<tr>";
            echo "<td>{$mes_resultado['mes']}</td>";
            echo "<td>" . number_format($mes_resultado['valor_inicial'], 2, ',', '.') . "</td>";
            echo "<td>" . number_format($mes_resultado['aporte'], 2, ',', '.') . "</td>";
            echo "<td>" . number_format($mes_resultado['rendimento'], 2, ',', '.') . "</td>";
            echo "<td>" . number_format($mes_resultado['total'], 2, ',', '.') . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<p>Rendimento Total: " . number_format($resultado_simulacao['rendimento_total'], 2, ',', '.') . "</p>";
    }
    ?>



    <p><a href="index.php">Retornar à Página Inicial</a></p>

    </main>

    <footer>
        <p>Equipe: Bruno Ferreirra e Rafaell Maurício - &copy; 2023</p>
    </footer>  
</body>
</html>
