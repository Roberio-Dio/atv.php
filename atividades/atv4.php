<!DOCTYPE html>
    <html>
        <body>
            
            <?php
                $listaAlunoIdade = array (
                    "Leonardo" => 31,
                    "Gabriella" => 27,
                    "Bianca" => 07
                );

                $listaCores = array (
                    "Vermelho",
                    "Amarelo",
                    "Verde",
                    "Laranja"
                );

                echo $listaAlunoIdade ["Leonardo"];

                echo "</br>";

                echo $listaCores [2];

                echo "</br>";

                var_dump($listaAlunoIdade);

                echo "</br>";

                var_dump($listaCores);
            ?>
        </body>
    </html>