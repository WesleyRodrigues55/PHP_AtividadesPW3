<h1>Tabela com os Cliente registrados</h1>
<?php

    $table = new \CodeIgniter\View\Table();

    $template = [
        'table_open'         => '<table border="1" cellpadding="4" cellspacing="0">',
        'thead_open'         => '<thead>',
        'thead_close'        => '</thead>',
        'table_close'        => '</table>'
    ];

    $table->setTemplate($template);

    $table->setHeading(array('ID', 'Nome', 'Telefone', 'Sexo', 'Email', 'Endereco', 'Complemento', 'Bairro', 'Cidade', 'UF', 'Data nascimento', 'Data de cadastro', 'Alterar', 'Excluir'));
    
    echo $table->generate($tabela);


?>

<a href="cadastrar">Cadastrar outro Cliente</a>
<br>
<a href="../">voltar</a>