<h1>Alteração de dados do automóvel selecionado</h1>
<?php
    helper('form');
    echo form_open('automovel/alterar');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_AUTOMOVEL_ID'], 'readonly');
        echo '<br><br>';
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', $dados['TB_AUTOMOVEL_NOME']);
        echo '<br><br>';
        echo form_label('Ano de fabricação');
        echo '<br>';
        echo form_input('ano',  $dados['TB_AUTOMOVEL_ANO_FAB']);
        echo '<br><br>';
        echo form_label('Cor');
        echo '<br>';
        echo form_input('cor',  $dados['TB_AUTOMOVEL_COR']);
        echo '<br><br>';
        echo form_label('KM');
        echo '<br>';
        echo form_input('km',  $dados['TB_AUTOMOVEL_KM']);
        echo '<br><br>';
        echo form_label('Valor');
        echo '<br>';
        echo form_input('valor',  $dados['TB_AUTOMOVEL_VALOR_D']);
        echo '<br><br>';
        echo form_label('Status');
        echo '<br>';
        echo form_input('status',  $dados['TB_AUTOMOVEL_STATUS']);
        echo '<br><br>';
        echo form_label('Marca');
        echo '<br>';
        echo form_input('marca',  $dados['TB_MARCA_ID']);
        echo '<br><br>';
        echo form_label('Modelo');
        echo '<br>';
        echo form_input('modelo',  $dados['TB_MODELO_ID']);
        echo '<br><br>';
        echo form_submit('mysubmit', 'Alterar dados',);
    echo form_close();

?>