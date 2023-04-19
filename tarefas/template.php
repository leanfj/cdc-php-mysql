<html lang="pt-br">
<head>
    <title>Gerenciador de tarefas</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
<div class="container">
    <h1>Gerenciador de tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome"/>
            </label>
            <label>
                Descrição (Opcional):
                <textarea name="descricao"> </textarea>
            </label>
            <label>
                Prazo (Opcional):
                <input type="text" name="prazo"/>
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" value="1" checked>
                    Baixa

                    <input type="radio" name="prioridade" value="2">
                    Média

                    <input type="radio" name="prioridade" value="3">
                    Alta
                </label>
            </fieldset>
            <label>
                Tarefa Concluída:
                <input type="checkbox" name="concluida" value="sim">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>

        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?php echo $tarefa['prazo']; ?></td>
                <td><?php
//                    if ($tarefa['prioridade'] == 1) {
//                        echo 'Baixa';
//                    }
//                    if ($tarefa['prioridade'] == 2) {
//                        echo 'Média';
//                    }
//                    if ($tarefa['prioridade'] == 3) {
//                        echo 'Alta';
//                    }
                    echo traduzir_prioridade($tarefa['prioridade']);
                    ?></td>
                <td><?php echo $tarefa['concluida']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>