<h1>Alteração de dados do Marca selecionado</h1>
<?php

    helper('form');
    echo form_open('marca/alterar');
        echo form_label('Nome da marca');
        echo '<br>';
        echo form_input('marca', '', 'required');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>