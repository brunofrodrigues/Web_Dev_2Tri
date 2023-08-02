<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <title>Questão 2</title>
</head>

<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>Questão 2</h1>

        <table>
            <thead>
                <tr>
                    <th>
<pre> 
kg
\
m
</pre>              </th>
                    <?php
                        for ($i = 46; $i < 121; $i++) 
                        {
                            
                            echo '<th>' . $i . '</th>';
                        }
                    ?>
                </tr>
            </thead>

            <tbody>
                <?php

                for ($i = 146; $i < 211; $i++) {
                    echo '<tr>';
                    echo '<td ">' . $i . '</td>';

                    for ($j = 46; $j < 121; $j++) 
                    {
                        $imc = $j / ($i * $i) * 10000;

                        if ($imc >= 0 && $imc <= 16) {
                            echo "<td class=\"extremamentebaixo\" title=\"Extremamente baixo&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($imc, 1) . "\">" . "</td>";
                        } else if ($imc > 16 && $imc <= 17) {
                            echo "<td class=\"muitobaixo\" title=\"Muito baixo&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\">" . "</td>";
                        } else if ($imc > 17 && $imc <= 18.5) {
                            echo "<td class=\"baixo\" title=\"Baixo&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\">" . "</td>";
                        } else if ($imc > 18.5 && $imc <= 25) {
                            echo "<td class=\"ideal\" title=\"Ideal&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\">" . "</td>";
                        } else if ($imc > 25 && $imc <= 30) {
                            echo "<td class=\"sobrepeso\" title=\"Sobre-peso&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\">" . "</td>";
                        } else if ($imc > 30 && $imc <= 35) {
                            echo "<td class=\"obesidadenivel1\" title=\"Obesidade Nível 1&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\">" . "</td>";
                        } else if ($imc > 35 && $imc <= 40) {
                            echo "<td class=\"obesidadenivel2\" title=\"Obesidade Nível 2&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\">" . "</td>";
                        } else if ($imc > 40) {
                            echo "<td class=\"obesidadenivel3\" title=\"Obesidadede Nível 3&#10;$j kg&#10;$i cm&#10;IMC: " . number_format($imc, 1) . "\">" . "</td>";
                        }
                    }
                echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        
        <br>
        <a href="./index.php">Retornar a Página Inicial</a>

    </main>

    <footer>
        <p> Equipe: Bruno Ferreirra e Rafaell Maurício - &copy; 2023</p>
    </footer>
</body>

</html>
