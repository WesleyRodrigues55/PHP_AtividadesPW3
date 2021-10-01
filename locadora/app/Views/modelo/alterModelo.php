<h1>Alteração de dados do Modelo selecionado</h1>
<?php

    helper('form');
    echo form_open('modelo/alterar');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_MODELO_ID'], 'required');
        echo '<br><br>';
        echo form_label('Descrição');
        echo '<br>';
        echo form_input('desc', $dados['TB_MODELO_DESC'], 'required');
        echo '<br><br>';
        echo form_label('Observação');
        echo '<br>';
        echo form_textarea('obs', $dados['TB_MODELO_OBS'], 'required');
        echo '<br><br>';
        echo form_label('Data');
        echo '<br>';
        echo form_input('data', $dados['TB_MODELO_DATA'], 'required');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>