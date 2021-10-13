<div class="container">
<h1>Cadastrar um funcionário</h1>
<?php

    $input = [
        'required' => 'required',
        'class' => 'form-control'
    ];

    $submit = [
        'class' => 'btn btn-primary mt-3'
    ];

    $row = '<div class="row">';

    $divAbreB = '<div class="form-group col-md-12 my-3">';
    $divAbre = '<div class="form-group col-md-6 my-3">';
    $divFecha = '</div>';

    helper('form');
    echo form_open('funcionario/alterar');
        echo $row;
        echo $divAbre;
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Telefone');
        echo '<br>';
        echo form_input('tell', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de contrato');
        echo '<br>';
        echo form_input('data', '', $input, 'date');
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cargo');
        echo '<br>';
        echo form_input('cargo', '', $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Cadastrar',  $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>