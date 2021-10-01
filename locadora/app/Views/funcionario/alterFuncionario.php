<h1>Alteração de dados do Funcionário selecionado</h1>
<?php
    helper('form');
    echo form_open('funcionario/alterar');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_FUNCIONARIO_ID'], 'readonly');
        echo '<br><br>';
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', $dados['TB_FUNCIONARIO_NOME'], 'required');
        echo '<br><br>';
        echo form_label('Telefone');
        echo '<br>';
        echo form_input('tell',  $dados['TB_FUNCIONARIO_TEL'], 'required');
        echo '<br><br>';
        echo form_label('Data de contrato');
        echo '<br>';
        echo form_input('data',  $dados['TB_FUNCIONARIO_DT_CONTRATO'], 'required', 'date');
        echo '<br><br>';
        echo form_label('Cargo');
        echo '<br>';
        echo form_input('cargo',  $dados['TB_CARGO_ID'], 'required');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Alterar dados',);
    echo form_close();

?>