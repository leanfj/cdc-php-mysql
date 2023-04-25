<?php
$dbServidor = '127.0.0.1';
$dbUsuario = "leanfj";
$dbSenha = "leanfj";
$dbBanco = "tarefas";

$conexao = mysqli_connect($dbServidor, $dbUsuario, $dbSenha, $dbBanco);
if (mysqli_errno($conexao)) {
    echo "Problemas para conectar no banco";
    die();
}


function buscar_tarefas($conexao): array
{
    $sql = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sql);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa): void
{
    $sql = "
        INSERT INTO tarefas
        (nome, descricao, prioridade, prazo, concluida)
        values 
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prioridade']}',
            '{$tarefa['prazo']}',
            '{$tarefa['concluida']}'
        )
    ";

    mysqli_query($conexao, $sql);
}

function editar_tarefa($conexao, $tarefa): void
{
    $sql = "
        UPDATE tarefas
        VALUES(nome, descricao, prioridade, prazo, concluida)
        SET 
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prioridade']}',
            '{$tarefa['prazo']}',
            '{$tarefa['concluida']}'
        ) WHERE id = '{$tarefa['id']}'
    ";

    mysqli_query($conexao, $sql);
}

function buscar_tarefa($conexao, $id): array
{
    $sql = 'SELECT * FROM tarefas WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sql);
    $tarefa = mysqli_fetch_assoc($resultado);
    return $tarefa;
}