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
        require_once "validacoes.php";

        $livro = [
            "titulo" => $_POST['titulo'],
            "autor" => $_POST['autor'],
            "preco" => $_POST['preco'],
            "quantidade" => $_POST['quantidade']
        ];
        
        if (validarLivro($livro)) {
            echo "<h1>Informações do livro</h1>";

            $valor_total = calcularValorTotalEstoque($livro);

            echo "<h3> Titulo: ". $livro['titulo'] ."</h3>";
            echo "<h3> Autor: ". $livro['autor'] ."</h3>";
            echo "<h3> Preço unitário: ". $livro['preco'] ."</h3>";
            echo "<h3> Quantidade: ". $livro['quantidade'] ."</h3>";
            echo "<h3> Valor Total: ". $valor_total ."</h3>";
        }
        
    } else {
        echo "<h3>Preencher o formulário</h3>";
    }
    ?>
</body>

</html>