<div class="container">
<h1>Alteração de dados do automóvel selecionado</h1>
<?php

    $id = [
        'class' => 'form-control w-25',
        'readonly' => 'readonly'
    ];

    $input = [
        'required' => 'required',
        'class' => 'form-control'
    ];

    $submit = [
        'class' => 'btn btn-primary mt-3'
    ];

    $row = '<div class="row">';

    $divAbreID = '<div class="form-group col-md-12 my-3">';
    $divAbreB = '<div class="form-group col-md-12 my-3">';
    $divAbre = '<div class="form-group col-md-6 my-3">';
    $divFecha = '</div>';

    helper('form');
    echo form_open('automovel/alterar');
        echo $row;
        echo $divAbreID;
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_AUTOMOVEL_ID'], $id);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', $dados['TB_AUTOMOVEL_NOME'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Ano de fabricação');
        echo '<br>';
        echo form_input('ano',  $dados['TB_AUTOMOVEL_ANO_FAB'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cor');
        echo '<br>';
        echo form_input('cor',  $dados['TB_AUTOMOVEL_COR'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('KM');
        echo '<br>';
        echo form_input('km',  $dados['TB_AUTOMOVEL_KM'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Valor');
        echo '<br>';
        echo form_input('valor',  $dados['TB_AUTOMOVEL_VALOR_D'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Status');
        echo '<br>';
        echo form_input('status',  $dados['TB_AUTOMOVEL_STATUS'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Marca');
        echo '<br>';
        echo form_input('marca',  $dados['TB_MARCA_ID'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Modelo');
        echo '<br>';
        echo form_input('modelo',  $dados['TB_MODELO_ID'], $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Alterar dados', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>