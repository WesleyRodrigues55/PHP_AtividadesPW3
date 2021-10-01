<h1>Alteração de dados do Locação selecionado</h1>
<?php

    helper('form');
    echo form_open('locacao/alterar');
        echo form_label('Tipo');
        echo '<br>';
        echo form_input('tipo', '', 'required');
        echo '<br><br>';
        echo form_label('Valor');
        echo '<br>';
        echo form_input('valor',  '', 'required');
        echo '<br><br>';
        echo form_label('Data de início');
        echo '<br>';
        echo form_input('dtinicio',  '', 'required', 'date');
        echo '<br><br>';
        echo form_label('Data fim');
        echo '<br>';
        echo form_input('dtfim',  '', 'required', 'date');
        echo '<br><br>';
        echo form_label('Cliente');
        echo '<br>';
        echo form_input('cliente',  '', 'required');
        echo '<br><br>';
        echo form_label('Funcionário');
        echo '<br>';
        echo form_input('funcionario',  '', 'required');
        echo '<br><br>';
        echo form_label('Automóvel');
        echo '<br>';
        echo form_input('automovel',  '', 'required');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>