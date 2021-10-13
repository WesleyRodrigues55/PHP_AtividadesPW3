<div class="container">
<h1>Alteração de dados do Funcionário selecionado</h1>
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
    echo form_open('funcionario/alterar');
        echo $row;
        echo $divAbreID;
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_FUNCIONARIO_ID'], $id);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', $dados['TB_FUNCIONARIO_NOME'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Telefone');
        echo '<br>';
        echo form_input('tell',  $dados['TB_FUNCIONARIO_TEL'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de contrato');
        echo '<br>';
        echo form_input('data',  $dados['TB_FUNCIONARIO_DT_CONTRATO'], $input, 'date');
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cargo');
        echo '<br>';
        echo form_input('cargo',  $dados['TB_CARGO_ID'], $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Alterar dados', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>