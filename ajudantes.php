<?php
function traduz_prioridade($codigo){
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
function traduz_data_para_exibir($data){
    if ($data == "") {
        return "00/00/000";
    }
    $dados = explode("-", $data);
    $data_mysql = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    return $data_mysql;
}
function traduz_concluida($concluida){
    if ($concluida == 1) {
       
        return 'Sim';
    }
    return 'Não';
}

function traduz_data_para_banco($data){
    if ($data == "") {
        return "";
    }
    $dados = explode("/", $data);

    if (count($dados) != 3) {
        return $data;
    }
    $data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
return $data_mysql;
}
