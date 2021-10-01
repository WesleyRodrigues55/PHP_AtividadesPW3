<h1>Alteração de dados do Locação selecionado</h1>
<?php
    helper('form');
    echo form_open('locacao/alterar');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_LOCACAO_ID'], 'readonly');
        echo '<br><br>';
        echo form_label('Tipo');
        echo '<br>';
        echo form_input('tipo', $dados['TB_LOCACAO_TIPO']);
        echo '<br><br>';
        echo form_label('valor');
        echo '<br>';
        echo form_input('valor',  $dados['TB_LOCACAO_VALOR']);
        echo '<br><br>';
        echo form_label('Data de início');
        echo '<br>';
        echo form_input('dtinicio',  $dados['TB_LOCACAO_DT_INICIO']);
        echo '<br><br>';
        echo form_label('Data fim');
        echo '<br>';
        echo form_input('dtfim',  $dados['TB_LOCACAO_DT_FIM']);
        echo '<br><br>';
        echo form_label('Cliente');
        echo '<br>';
        echo form_input('cliente',  $dados['TB_CLIENTE_ID']);
        echo '<br><br>';
        echo form_label('Funcionário');
        echo '<br>';
        echo form_input('funcionario',  $dados['TB_FUNCIONARIO_ID']);
        echo '<br><br>';
        echo form_label('Automovel');
        echo '<br>';
        echo form_input('automovel',  $dados['TB_AUTOMOVEL_ID']);
        echo '<br><br>';
        echo form_submit('mysubmit', 'Alterar dados',);
    echo form_close();

?>