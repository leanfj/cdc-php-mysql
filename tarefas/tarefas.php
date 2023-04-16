<html>
    <head>
        <title>Gerenciador de tarefas</title>
    </head>
    <body>
        <h1>Gerenciador de tarefas</h1>
        <form>
            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" />
                </label>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
        <?php
            if(isset($_GET['nome'])) {
                echo "Nome informado: " . $_GET['nome'];
            }
        ?>
    </body>
</html>