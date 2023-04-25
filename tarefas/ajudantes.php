<?php
function traduzir_prioridade($codigo): string
{
    $prioridade = '';

    switch ($codigo) {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }

    return $prioridade;

}

function traduzir_data_para_banco($data): string
{
    if($data == "") {
        return "";
    }

    $dados = explode("/", $data);

    return "{$dados[2]}-{$dados[1]}-{$dados[0]}";
}

function traduzir_data_para_tela($data): string
{
    if($data == "" || $data == "1900-01-01") {
        return "";
    }

    $dados = explode("-", $data);

    return "{$dados[2]}/{$dados[1]}/{$dados[0]}";
}

function traduir_concluida($concluida): string
{
    if($concluida == 1) {
        return "Sim";
    } else {
        return "Não";
    }
}