<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 3</title>
    <link rel="stylesheet" href="../questao03.css" />
    <?php
        $r1 = isset($_GET["r1"]) ? $_GET["r1"] : 0;
        $r2 = isset($_GET["r2"]) ? $_GET["r2"] : 0;
        $r3 = isset($_GET["r3"]) ? $_GET["r3"] : 0;
    ?>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <div class="questionario">
            <h2>Questão 3 - Pergunta 4</h2>

            <div class="div_perguntas">
                <h3>Q4: Lorem ipsum dolor sit amet consectetur.</h3>
                    <form id="questao" action="questao03.php" method="get">
                        <div class="resposta">
                            <ol type="A">
                                <a id="resp" href="./questao03ver.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r3 ?>&r4=1">
                                    <li>Lorem, ipsum.</li>
                                </a>
                                <a href="./questao03ver.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r3 ?>&r4=2">
                                    <li>Lorem, ipsum dolor.</li>
                                </a>
                                <a href="./questao03ver.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r3 ?>&r4=3">
                                    <li>Lorem.</li>
                                </a>
                                <a href="./questao03ver.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r3 ?>&r4=4">
                                    <li>Lorem ipsum dolor sit amet.</li>
                                </a>
                                <a href="./questao03ver.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r3 ?>&r4=5">
                                    <li>Lorem, ipsum dolor.</li>
                                </a>
                            </ol>
                    </form>
            </div>
        </div>


        </ol>

        <a href="./questao03.php">Cancelar<a>
        <br>
        <a href="./index.php">Retornar a Página Inicial</a>
        </div>
    </main>
    <footer>
    <p> Equipe: Bruno Ferreira e Rafaell Maurício - &copy; 2023</p>
    </footer>
</body>

</html>