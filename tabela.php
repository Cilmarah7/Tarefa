<table class="table table-striped">
    <thead>
        <tr>
            <th>Tarefa</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_tarefas as $tarefa): ?>
        <tr>
            <td>
                <?php echo $tarefa['nome']; ?>
            </td>
            <td>
                <?php echo $tarefa['descricao']; ?>
            </td>
            <td>
                <?php echo traduz_data_para_exibir($tarefa['prazo']); ?>
            </td>
            <td>
                <?php echo traduz_prioridade($tarefa['prioridade']); ?>
            </td>
            <td>
                <?php echo traduz_concluida($tarefa['concluida']); ?>
            </td>
            <td> <!-- O campo com os links para editar e remover -->
                <a href="editar.php?id=<?php echo $tarefa['id']; ?> ">
                        Editar
                </a>
            </td>
            <td> <!-- O campo com os links para editar e remover -->
                <a href="excluir.php?id=<?php echo $tarefa['id']; ?> ">
                        Excluir
                </a>
            </td>

        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>