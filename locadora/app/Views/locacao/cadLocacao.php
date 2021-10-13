<div class="container">
<h1>cadastrar uma Locação</h1>
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
    echo form_open('locacao/alterar');
        echo $row;
        echo $divAbre;
        echo form_label('Tipo');
        echo '<br>';
        echo form_input('tipo', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Valor');
        echo '<br>';
        echo form_input('valor',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de início');
        echo '<br>';
        echo form_input('dtinicio',  '', $input, 'date');
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data fim');
        echo '<br>';
        echo form_input('dtfim',  '', $input, 'date');
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cliente');
        echo '<br>';
        echo form_input('cliente',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Funcionário');
        echo '<br>';
        echo form_input('funcionario',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Automóvel');
        echo '<br>';
        echo form_input('automovel',  '', $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Cadastrar', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>