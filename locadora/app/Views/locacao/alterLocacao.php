<div class="container">
<h1>Alteração de dados do Locação selecionado</h1>
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
    echo form_open('locacao/alterar');
        echo $row;
        echo $divAbreID;
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_LOCACAO_ID'], $id);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Tipo');
        echo '<br>';
        echo form_input('tipo', $dados['TB_LOCACAO_TIPO'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('valor');
        echo '<br>';
        echo form_input('valor',  $dados['TB_LOCACAO_VALOR'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de início');
        echo '<br>';
        echo form_input('dtinicio',  $dados['TB_LOCACAO_DT_INICIO'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data fim');
        echo '<br>';
        echo form_input('dtfim',  $dados['TB_LOCACAO_DT_FIM'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cliente');
        echo '<br>';
        echo form_input('cliente',  $dados['TB_CLIENTE_ID'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Funcionário');
        echo '<br>';
        echo form_input('funcionario',  $dados['TB_FUNCIONARIO_ID'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Automovel');
        echo '<br>';
        echo form_input('automovel',  $dados['TB_AUTOMOVEL_ID'], $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Alterar dados', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>