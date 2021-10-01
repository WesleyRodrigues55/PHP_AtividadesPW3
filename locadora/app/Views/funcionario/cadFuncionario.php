<h1>Cadastrar um funcionário</h1>
<?php
    helper('form');
    echo form_open('funcionario/alterar');
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', '', 'required');
        echo '<br><br>';
        echo form_label('Telefone');
        echo '<br>';
        echo form_input('tell', '', 'required');
        echo '<br><br>';
        echo form_label('Data de contrato');
        echo '<br>';
        echo form_input('data', '', 'required', 'date');
        echo '<br><br>';
        echo form_label('Cargo');
        echo '<br>';
        echo form_input('cargo', '', 'required');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>