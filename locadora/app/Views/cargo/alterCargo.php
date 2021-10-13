<div class="container">
<h1>Cadastro de Cargo</h1>
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
    echo form_open('cargo/alterar');
        echo $row;
        echo $divAbreID;
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_CARGO_ID'], $id);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Nome do cargo');
        echo '<br>';
        echo form_input('cargo', $dados['TB_CARGO_NOME'], $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Alterar dados', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>