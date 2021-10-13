<div class="container">
<h1>Cadastro de Marca</h1>
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
    echo form_open('marca/alterar');
        echo $row;
        echo $divAbre;
        echo form_label('Nome da marca');
        echo '<br>';
        echo form_input('marca', '', $input);
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Cadastrar', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>