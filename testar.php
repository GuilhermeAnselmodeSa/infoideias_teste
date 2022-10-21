<?php
include_once('src/funcoes.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

<div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">Primeira fase do processo seletivo</h4>
    Guilherme Anselmo de Sa
</div>

    <div class="jumbotron">
        <form method="post">
            <div class="form-group">
                <label for="ano">
                <h3>Exercicío 1</h3>
                    Digite um número(de preferencia 1905 ou 1700):
                    <?php if (isset($_POST['metodo']) && $_POST['metodo'] == 'seculo_ano') { ?>
                        <?= Funcoes::SeculoAno($_POST['ano']) ?>
                    <?php } ?>
                </label>

                <input type="hidden" name="metodo" value="seculo_ano" />

                <input type="ano" name="ano" class="form-control" />
                <button class="btn btn-primary" type="submit">Enviar</button>


            </div>
        </form>

        <hr />

        <form method="post">
            <div class="form-group">
                <label for="numero">
                <h3>Exercicío 2</h3>
                    Primo Anterior(preferencia:10 ou 19):
                    <?php if (isset($_POST['metodo']) && $_POST['metodo'] == 'primo_anterior') { ?>
                        <?= Funcoes::PrimoAnterior($_POST['numero']) ?>
                    <?php } ?>
                </label>

                <input type="hidden" name="metodo" value="primo_anterior" />

                <input type="numero" name="numero" class="form-control" />
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>

        <hr />

        <b class="form-group">
        <h3>Exercicío 3</h3>
            <?= Funcoes::SegundoMaior(); ?>
        </b>

        <hr />

        <!-- Arrays -->
        <form method="post">
            <div class="form-group">
                <label>
                    <h3>Exercicío 4</h3>
                    <b>Sequencia Crescente:</b> <br />
                    <?php
                    $valores = array(
                        [1, 3, 2, 1],
                        [1, 3, 2],
                        [1, 2, 1, 2],
                        [3, 6, 5, 8, 10, 20, 15],
                        [1, 1, 2, 3, 4, 4],
                        [1, 4, 10, 4, 2],
                        [10, 1, 2, 3, 4, 5],
                        [1, 1, 1, 2, 3],
                        [0, -2, 5, 6],
                        [1, 2, 3, 4, 5, 3, 5, 6],
                        [40, 50, 60, 10, 20, 30],
                        [1, 1],
                        [1, 2, 5, 3, 5],
                        [1, 2, 5, 5, 5],
                        [10, 1, 2, 3, 4, 5, 6, 1],
                        [1, 2, 3, 4, 3, 6],
                        [1, 2, 3, 4, 99, 5, 6],
                        [123, -17, -5, 1, 2, 3, 12, 43, 45],
                        [3, 5, 67, 98, 3]
                    );

                    foreach ($valores as $arr) {
                        echo  '[' . join(', ', $arr) . ']' . ' -> ' . Funcoes::SequenciaCrescente($arr) . '<br/>';
                    }
                    ?>
                </label>
            </div>
        </form>
    </div>

    <script>

    </script>
</body>

</html>