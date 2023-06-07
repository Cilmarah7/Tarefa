<?php
session_start();
include "conexao.php";
include "ajudantes.php";
$exibir_tabela =true;

if (isset($_GET['nome'])) {
    
    $tarefa = array();
 
    $tarefa['nome'] = $_GET['nome'];
    
    if(isset($_GET['descricao'])){
        $tarefa['descricao'] = $_GET['descricao'];       
    }else{
        $tarefa['descricao'] = ""; 
    }

    if(isset($_GET['prazo'])){
        $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);        
    }else{
        $tarefa['prazo'] = "";    
    }

    $tarefa['prioridade'] = $_GET['prioridade'];   

    if(isset($_GET['concluida'])){
        $tarefa['concluida'] = $_GET['concluida'];   
    }else{
        $tarefa['concluida'] = "Não"; 
    } 
    gravar_tarefa($conexao, $tarefa);
 }

    $lista_tarefas = buscar_tarefas($conexao);
    $tarefa = array(
        'id' => 0,
        'nome' => '',
        'descricao' => '',
        'prazo' => '',
        'prioridade' => 1,
        'concluida' => ''
        );
include "template.php";