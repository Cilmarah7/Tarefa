<html>

<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>

<body>
<div class="container">

    <div class="jumbotron">
         <h1 class="display-4">Gerenciador de Tarefas</h1>
    </div>
    <?php include('formulario.php'); ?>
   
    <?php if ($exibir_tabela) : ?>
    <?php include('tabela.php'); ?>
    <?php endif; ?>

    </div>
    </body>
    
    </html>
