
<div class="container">
<h1>Cadastro do automóvel</h1>
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
    echo form_open('automovel/alterar');
        echo $row;
        echo $divAbre;
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Ano de fabricação');
        echo '<br>';
        echo form_input('ano',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cor');
        echo '<br>';
        echo form_input('cor',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('KM');
        echo '<br>';
        echo form_input('km',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Valor');
        echo '<br>';
        echo form_input('valor',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Status');
        echo '<br>';
        echo form_input('status',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Marca');
        echo '<br>';
        echo form_input('marca',  '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Modelo');
        echo '<br>';
        echo form_input('modelo',  '', $input);
        echo $divFecha;
        // echo '<br>';
        // echo form_dropdown('shirts');
        echo $divAbreB;
        echo form_submit('mysubmit', 'Cadastrar', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();
    

?>
</div>