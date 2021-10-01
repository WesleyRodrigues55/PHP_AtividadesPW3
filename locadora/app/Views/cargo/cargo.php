<h1>Tabela com os Cargos registrados</h1>
<?php

    $table = new \CodeIgniter\View\Table();

    $template = [
        'table_open'         => '<table border="1" cellpadding="4" cellspacing="0">',
        'thead_open'         => '<thead>',
        'thead_close'        => '</thead>',
        'table_close'        => '</table>'
    ];

    $table->setTemplate($template);

    $table->setHeading(array('ID', 'Nome', 'Alterar',  'Excluir'));
    
    echo $table->generate($tabela);


?>

<a href="cadastrar">Cadastrar outro Cargo</a>
<br>
<a href="../">voltar</a>