<form> 
<input type="hidden" name="id" value="<?php echo $tarefa['id']; ?> " />

  
        <fieldset>
            <legend><?php echo ($tarefa['id'] > 0) ? 'Atualizar tarefa' : 'Cadastrar tarefa';?></legend>
            <div class="input-group mb-3">                
                <input type="text" class="form-control" placeholder="Tarefa" aria-label="tarefa" aria-describedby="basic-addon1" name="nome"value="<?php echo $tarefa['nome']; ?> ">
            </div>

            <div class="input-group mb-3">  
                <textarea class="form-control" placeholder="Descrição" aria-label="descricao" name="descricao"><?php echo $tarefa['descricao']; ?></textarea>
            </div>
               
            <div class="input-group mb-3">                
                <input type="text" class="form-control" placeholder="Prazo (Opcional)" aria-label="prazo" name="prazo"aria-describedby="basic-addon1" name="nome"value= "<?php echo traduz_data_para_exibir($tarefa['prazo']);?>">
            </div>          

            <fieldset>
                <legend>

                <label>
                    <input type="radio" name="prioridade"  value="1" <?php echo ($tarefa['prioridade'] == 1)? 'checked': '';?> /> 
                    Baixa
                    <input type="radio" name="prioridade"  value="2" <?php echo ($tarefa['prioridade'] == 2)? 'checked': '';?>/>
                    Média
                    <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3)? 'checked': '';?>/>
                    Alta
                </label>
             </fieldset>
             <label>
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="1"<?php echo ($tarefa['concluida'] == 1)? 'checked': '';?> />
                </label></br>
            <input type="submit" value= "<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" />

        </fieldset>   
    </form>