<?php
function validarLivro($livro)
{
    if (empty($livro['titulo']))
        $erros[] = "<h3>Favor preencher o campo titulo</h3>";
    if (empty($livro['autor']))
        $erros[] = "<h3>Favor preencher o campo autor</h3>";
    if ($livro['preco'] < 0.01)
        $erros[] = "<h3>Favor informar um preço maior do que 0.01 reais</h3>";
    if ($livro['quantidade'] <= 0)
        $erros[] = "<h3>Favor informar um numero inteiro maior do que 0</h3>";

    if (!isset($erros)) {
        return true;
    } else {
        foreach ($erros as $erroFatal) {
            echo $erroFatal;
        }
        echo '<a href="index.php">Voltar para pagina inicial</a>';
        return false;
    }
}

function calcularValorTotalEstoque($livro) {
    return $livro['preco'] * $livro['quantidade'];
}
