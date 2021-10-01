<h1>Tabela com os Funcionários registrados</h1>
<?php

    $table = new \CodeIgniter\View\Table();

    $template = [
        'table_open'         => '<table border="1" cellpadding="4" cellspacing="0">',
        'thead_open'         => '<thead>',
        'thead_close'        => '</thead>',
        'table_close'        => '</table>'
    ];

    $table->setTemplate($template);

    $table->setHeading(array('ID', 'Nome', 'Telefone', 'Data de contrato', 'Cargo', 'Alterar', 'Excluir'));
    
    echo $table->generate($tabela);


?>

<a href="cadastrar">Cadastrar outro funcionário</a>
<br>
<a href="../">voltar</a>