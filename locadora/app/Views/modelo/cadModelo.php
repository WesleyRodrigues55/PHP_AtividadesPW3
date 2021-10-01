<h1>Alteração de dados do Modelo selecionado</h1>
<?php

    helper('form');
    echo form_open('modelo/alterar');
        echo form_label('Descrição');
        echo '<br>';
        echo form_input('desc', '', 'required');
        echo '<br><br>';
        echo form_label('Observação');
        echo '<br>';
        echo form_textarea('obs', '', 'required');
        echo '<br><br>';
        echo form_label('Data');
        echo '<br>';
        echo form_input('data', '', 'required');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>