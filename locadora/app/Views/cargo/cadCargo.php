<h1>Alteração de dados do Cargo selecionado</h1>
<?php

    helper('form');
    echo form_open('cargo/alterar');
        echo form_label('Nome do cargo');
        echo '<br>';
        echo form_input('cargo', '', 'required');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>