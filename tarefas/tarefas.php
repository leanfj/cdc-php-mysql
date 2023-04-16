<?php session_start(); ?>
<html lang="pt-br">
<head>
    <title>Gerenciador de tarefas</title>
    <style>
        .container {
            width: 500px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        fieldset {
            border-radius: 5px;
            border-style: double;
            border-color: #434eff;
            border-width: 5px;
        }
        label {
            font-size: 20px;
        }
        input[type=text] {
            width: 100%;
            margin: 10px 0;
            height: 30px;
            padding: 5px;
        }
        input[type=submit] {
            width: 100%;
            height: 30px;
            font-size: 20px;
            font-weight: 900;
            border: none;
            border-radius: 5px;
        }
        table, th, td {
            width: 100%;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
            padding: 5px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid;
            font-family: sans-serif;
        }

    </style>
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
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <?php
    if (isset($_GET['nome'])) {
        $_SESSION['$lista_tarefas'][] = $_GET['nome'];
    }
    $lista_tarefas = array();
    if (isset($_SESSION['$lista_tarefas'])) {
        $lista_tarefas = $_SESSION['$lista_tarefas'];
    }

    ?>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>