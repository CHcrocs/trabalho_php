<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade prática</title>
</head>

<body>
    <h1>Estoque de Livros</h1>

    <form action="estoque.php" method="post">
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo" required>
        <br>
        <label for="autor">Autor: </label>
        <input type="text" name="autor" id="autor" required>
        <br>
        <label for="preco">Preço unitário: </label>
        <input type="number" name="preco" id="preco" required step=".01">
        <br>
        <label for="quantidade">Quantidade em Estoque: </label>
        <input type="number" name="quantidade" id="quantidade" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>