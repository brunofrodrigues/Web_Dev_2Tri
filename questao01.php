<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="./css/global.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>

    <main>

    <?php

        $quantidade = 1;
        $elemento = "caixa_texto";


        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $quantidade = $_POST['quantidade'];
            $elemento = $_POST['elemento'];
        }
    ?>

    <h2>Exemplos de Elementos HTML</h2>
    <form method="post">
        <label for="quantidade">Quantidade de elementos (1 a 15):</label>
        <input type="number" id="quantidade" name="quantidade" min="1" max="15" value="<?php echo $quantidade; ?>" required>

        <h3>Selecione o tipo de elemento:</h3>
        <input type="radio" name="elemento" value="caixa_texto" <?php if ($elemento === "caixa_texto") echo "checked"; ?> onchange="this.form.submit();">Caixa de Entrada de Texto
        <input type="radio" name="elemento" value="caixa_senha" <?php if ($elemento === "caixa_senha") echo "checked"; ?> onchange="this.form.submit();">Caixa de Senha
        <input type="radio" name="elemento" value="botao" <?php if ($elemento === "botao") echo "checked"; ?> onchange="this.form.submit();">Botão
        <input type="radio" name="elemento" value="radio" <?php if ($elemento === "radio") echo "checked"; ?> onchange="this.form.submit();">Rádio
        <input type="radio" name="elemento" value="caixa_selecao" <?php if ($elemento === "caixa_selecao") echo "checked"; ?> onchange="this.form.submit();">Caixa de Seleção
        <input type="radio" name="elemento" value="faixa" <?php if ($elemento === "faixa") echo "checked"; ?> onchange="this.form.submit();">Faixa


    </form>

    <?php

        if ($quantidade >= 1 && $quantidade <= 15) {
            echo "<h3>Exemplos Gerados:</h3>";
            for ($i = 1; $i <= $quantidade; $i++) {
                switch ($elemento) {
                    case "caixa_texto":
                        echo "<h4>Exemplo $i: Caixa de Entrada de Texto</h4>";
                        echo '<input type="text" placeholder="Digite seu texto aqui">';
                        break;
                    case "caixa_senha":
                        echo "<h4>Exemplo $i: Caixa de Senha</h4>";
                        echo '<input type="password" placeholder="Digite sua senha">';
                        break;
                    case "botao":
                        echo "<h4>Exemplo $i: Botão</h4>";
                        echo '<button type="button">Clique aqui</button>';
                        break;
                    case "radio":
                        echo "<h4>Exemplo $i: Rádio</h4>";
                        echo '<input type="radio" name="elemento" value="radio">';
                        break;
                    case "caixa_selecao":
                        echo "<h4>Exemplo $i: Caixa de Seleção</h4>";
                        echo '<select><option>Opção 1</option><option>Opção 2</option><option>Opção 3</option></select>';
                        break;
                    case "faixa":
                        echo "<h4>Exemplo $i: Faixa</h4>";
                        echo '<input type="range" min="1" max="100" value="50">';
                        break;
                    default:
                        break;
                }

                echo "<h5>Código do Exemplo $i:</h5>";
                echo '<pre><code>';
                switch ($elemento) {
                    case "caixa_texto":
                        echo htmlentities('<input type="text" placeholder="Digite seu texto aqui">');
                        break;
                    case "caixa_senha":
                        echo htmlentities('<input type="password" placeholder="Digite sua senha">');
                        break;
                    case "botao":
                        echo htmlentities('<button type="button">Clique aqui</button>');
                        break;
                    case "radio":
                        echo htmlentities('<input type="radio" name="elemento" value="radio">');
                        break;
                    case "caixa_selecao":
                        echo htmlentities('<select><option>Opção 1</option><option>Opção 2</option><option>Opção 3</option></select>');
                        break;
                    case "faixa":
                        echo htmlentities('<input type="range" min="1" max="100" value="50">');
                        break;
                    default:
                        break;
                }
                echo '</code></pre>';
            }
        } else {
            echo "<p>A quantidade de elementos deve ser um valor entre 1 e 15.</p>";
        }
    ?>

    <br>
        <a href="index.php">Retornar a Página Inicial</a>
    </main>

    <footer>
        <p>Equipe: Bruno Ferreirra e Rafaell Maurício - &copy; 2023</p>
    </footer>
    
</body>
</html>