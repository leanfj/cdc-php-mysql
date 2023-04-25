<table>
    <tr>
        <th>Tarefa</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluída</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?php echo $tarefa['nome']; ?></td>
            <td><?php echo $tarefa['descricao']; ?></td>
            <td><?php echo traduzir_data_para_tela($tarefa['prazo']); ?></td>
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
            <td><?php echo traduir_concluida($tarefa['concluida']); ?></td>
            <td>
                <a href="editar.php?id=<?php echo $tarefa['id'] ?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>