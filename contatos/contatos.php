<?php session_start(); ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de contatos</title>
    <style>
        body {
            box-sizing: border-box;
        }

        .container {
            max-width: 500px;
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
            padding: 20px;
        }

        label {
            font-size: 20px;
        }

        input[type=text] {
            width: 100%;
            display: inline-block;
            height: 25px;
            margin: 5px 0;
        }

        input[type=submit] {
            width: 100%;
            height: 30px;
            font-size: 20px;
            font-weight: 900;
            border: none;
            border-radius: 5px;
            margin: 0 auto;
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
    <h1>Gerenciador de Contatos</h1>
    <form>
        <fieldset>
            <legend>Nova Contato</legend>
            <label>
                Nome:
                <input type="text" name="nome"/>
            </label>
            <label>
                Telefone:
                <input type="text" name="telefone"/>
            </label>
            <label>
                Email:
                <input type="text" name="email"/>
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <?php
    if (!empty($_GET['nome']) && !empty($_GET['telefone']) && !empty($_GET['email'])) {

        $contatos = array(
            'nome' => $_GET['nome'],
            'telefone' => $_GET['telefone'],
            'email' => $_GET['email']
        );

        if (isset($_COOKIE['lista_contatos'])) {
            $lista_contatos = unserialize($_COOKIE['lista_contatos']);
            $lista_contatos[] = $contatos;
            setcookie('lista_contatos', serialize($lista_contatos), time() + 3600);
        } else {
            setcookie('lista_contatos', serialize(array($contatos)), time() + 3600);
        }
    } else {
        echo('Todos os campos são obrigatórios');
    }

    if (isset($_COOKIE['lista_contatos'])) {
        $lista_contatos = unserialize($_COOKIE['lista_contatos']);
    }

    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
        <?php foreach ($lista_contatos as $contato) : ?>
            <tr>
                <td><?php echo $contato['nome']; ?></td>
                <td><?php echo $contato['telefone']; ?></td>
                <td><?php echo $contato['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>