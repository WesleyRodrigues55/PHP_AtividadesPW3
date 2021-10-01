<h1>Alteração de dados do Cargo selecionado</h1>
<?php
    helper('form');
    echo form_open('cargo/alterar');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_CARGO_ID'], 'readonly');
        echo '<br><br>';
        echo form_label('Nome do cargo');
        echo '<br>';
        echo form_input('cargo', $dados['TB_CARGO_NOME']);
        echo '<br><br>';
        echo form_submit('mysubmit', 'Alterar dados',);
    echo form_close();

?>