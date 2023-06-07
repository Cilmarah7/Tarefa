<?php

$alunos = array("Cilmara", "Sofia", "Ana");
//echo $alunos[0];

for($x = 0; $x < 3; $x++) {
    //echo $alunos[$x];
    echo "<br>";
  }

    $listaFunc = array();
    $listaFunc['francisco'] = 5000;
    $listaFunc['ana'] = 50000;
    $listaFunc['Ismael'] = 12000;
    $listaFunc['Brandon'] = 200;
    $listaFunc['hugo'] = 12000;

    foreach($listaFunc as $f ){
        echo $f;
        echo "<br>";
    }

 
?>