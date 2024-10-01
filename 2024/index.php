<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBEST - Encontro Baiano de Estatística</title>
    <link rel="icon" href="link_para_favicon.ico" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="70">

    <!-- Barra de Navegação -->
    <?php include('./snippets/navegacao.html'); ?>

    <!-- Sessão Home -->
    <?php include('./snippets/home.html'); ?>

    <!-- Sessão Sobre -->
    <?php include('./snippets/sobre.html'); ?>

    <!-- Sessão Submissão -->
    <?php //include('./snippets/submissao.html'); ?>

    <!-- Sessão de Programação -->
    <?php include('./snippets/programacao.html'); ?>
    
     <!-- Modal de Download -->
     <?php include('./snippets/download.html'); ?>

    <!-- Seção Palestrantes -->
    <?php include('./snippets/palestrantes.html'); ?>

    <!-- Sessão dos Patrocinadores -->
    <?php include('./snippets/patrocinio.html'); ?>

    <!-- Modal de Versões Anteriores -->
    <?php include('./snippets/botao-flutuante.html'); ?>

    <!-- Footer -->
    <?php include('./snippets/rodape.html'); ?>

    <!-- Chamada dos Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
</body>