<?php
$servidor="127.0.0.1";
$usuario="root";
$senha = "sebrae123";
$banco = "etecds3";

$conexao = new  mysqli($servidor,$usuario,$senha,$banco);
if($conexao ->connect_error){
    //
    echo "Não foi possível conectar";
}else{
    //echo "Conectado com o banco";
}

function buscar_tarefas($conexao){
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $tarefas = array();
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;       
    }
    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa){
    $sqlGravar = "INSERT INTO tarefas(nome, descricao, prioridade,prazo)
    VALUES('{$tarefa['nome']}',
    '{$tarefa['descricao']}',
    {$tarefa['prioridade']},
    '{$tarefa['prazo']}')";
    mysqli_query($conexao, $sqlGravar);
}

function buscar_tarefa($conexao, $id) {
$sqlBusca = 'SELECT * FROM tarefas WHERE id = ' . $id;
$resultado = mysqli_query($conexao, $sqlBusca);
return mysqli_fetch_assoc($resultado);
}
function editar_tarefa($conexao, $tarefa)
{
    
$sql = "
UPDATE tarefas SET
nome = '{$tarefa['nome']}',
descricao = '{$tarefa['descricao']}',
prioridade = {$tarefa['prioridade']},
prazo = '{$tarefa['prazo']}',
concluida = {$tarefa['concluida']}
WHERE id = {$tarefa['id']}";
mysqli_query($conexao, $sql);
}
function  remover_tarefa($conexao, $id){
    $sqlRemover = "DELETE FROM tarefas WHERE id = ($id)";
    mysqli_query($conexao, $sqlRemover);
}
   
?>

