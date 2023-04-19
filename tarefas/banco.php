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


function busca_tarefas($conexao)
{
    $sql = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sql);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa)
{
    $sql = "
        INSERT INTO tarefas
        (nome, descricao, prioridade)
        values 
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prioridade']}'
        )
    ";

    mysqli_query($conexao, $sql);
}