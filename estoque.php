<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade prática</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['titulo']))
            $erros[] = "<p>Favor preencher o campo titulo</p>";
        if (empty($_POST['autor']))
            $erros[] = "<p>Favor preencher o campo autor</p>";
        if ($_POST['preco'] < 0.01)
            $erros[] = "<p>Favor informar um preço maior do que 0.01 reais</p>";
        if ($_POST['quantidade'] < 0)
            $erros[] = "<p>Favor informar um numero inteiro maior do que 0</p>";

        if (!isset($erros)) {

            

        }
        else {
            foreach ($erros as $erroFatal){
                echo $erroFatal;
            }
        }


    } else {
        echo "<p>Preencher o formulário</p>";
    }
    ?>
</body>

</html>