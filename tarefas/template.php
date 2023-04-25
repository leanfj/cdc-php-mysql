<html lang="pt-br">
<head>
    <title>Gerenciador de tarefas</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
<div class="container">
    <h1>Gerenciador de tarefas</h1>
    <?php include("formulario.php"); ?>
    <?php if($exibir_tabela) : ?>
        <?php include("tabela.php"); ?>
    <?php endif; ?>

</div>

</body>
</html>