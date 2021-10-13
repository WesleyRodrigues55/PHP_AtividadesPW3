<div class="container">
<h1>Alteração de dados do Modelo selecionado</h1>
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
    echo form_open('modelo/alterar');
        echo $row;
        echo $divAbreID;
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_MODELO_ID'], $id);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Descrição');
        echo '<br>';
        echo form_input('desc', $dados['TB_MODELO_DESC'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data');
        echo '<br>';
        echo form_input('data', $dados['TB_MODELO_DATA'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Observação');
        echo '<br>';
        echo form_textarea('obs', $dados['TB_MODELO_OBS'], $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Cadastrar', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>

</div>