<h1>Alteração de dados do Marca selecionado</h1>
<?php
    helper('form');
    echo form_open('marca/alterar');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_MARCA_ID'], 'readonly');
        echo '<br><br>';
        echo form_label('Nome da marca');
        echo '<br>';
        echo form_input('marca', $dados['TB_MARCA_NOME']);
        echo '<br><br>';
        echo form_submit('mysubmit', 'Alterar dados',);
    echo form_close();

?>