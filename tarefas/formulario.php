<form>
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>" />
    <fieldset>
        <legend>Nova Tarefa</legend>
        <label>
            Tarefa:
            <input type="text" name="nome" value="<?php echo $tarefa['nome'];?>"/>
        </label>
        <label>
            Descrição (Opcional):
            <textarea name="descricao">

            </textarea>
        </label>
        <label>
            Prazo (Opcional):
            <input type="date" name="prazo" value="<?php echo $tarefa['prazo']; ?>"/>
        </label>

        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : '' ?> />
                Baixa

                <input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : '' ?>>
                Média

                <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : '' ?>>
                Alta
            </label>
        </fieldset>
        <label>
            Tarefa Concluída:
            <input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'checked' : '' ?>>
        </label>
        <input type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar' ?>">
    </fieldset>
</form>