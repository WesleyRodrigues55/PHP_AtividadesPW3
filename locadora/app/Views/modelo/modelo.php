<div class="container">
<h1>Tabela com os Modelos registrados</h1>
<?php

    $table = new \CodeIgniter\View\Table();

    $template = [
        'table_open'         => '<table cellpadding="4" cellspacing="0" class="table">',
        'thead_open'         => '<thead>',
        'thead_close'        => '</thead>',
        'table_close'        => '</table>'
    ];

    $table->setTemplate($template);

    $table->setHeading(array('ID', 'Descrição', 'Observção', 'Data', 'Alterar',  'Excluir'));
    
    echo $table->generate($tabela);


?>

<a href="cadastrar" class="btn btn-info my-2">Cadastrar outro Modelo</a>
<br>
<a href="../" class="btn btn-danger">voltar</a>
</div>