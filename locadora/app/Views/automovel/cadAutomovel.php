<h1>Alteração de dados do automóvel selecionado</h1>
<?php

    helper('form');
    echo form_open('automovel/alterar');
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', '', 'required');
        echo '<br><br>';
        echo form_label('Ano de fabricação');
        echo '<br>';
        echo form_input('ano',  '', 'required');
        echo '<br><br>';
        echo form_label('Cor');
        echo '<br>';
        echo form_input('cor',  '', 'required');
        echo '<br><br>';
        echo form_label('KM');
        echo '<br>';
        echo form_input('km',  '', 'required');
        echo '<br><br>';
        echo form_label('Valor');
        echo '<br>';
        echo form_input('valor',  '', 'required');
        echo '<br><br>';
        echo form_label('Status');
        echo '<br>';
        echo form_input('status',  '', 'required');
        echo '<br><br>';
        echo form_label('Marca');
        echo '<br>';
        echo form_input('marca',  '', 'required');
        echo '<br><br>';
        echo form_label('Modelo');
        echo '<br>';
        echo form_input('modelo',  '', 'required');
        // echo '<br>';
        // echo form_dropdown('shirts');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>