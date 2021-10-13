<div class="container">
<h1>Alteração de dados do Cliente selecionado</h1>
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


    $estados = ['AC'=> 'AC','AL'=> 'AL','AP'=> 'AP','AM'=> 'AM','BA'=> 'BA','CE'=> 'CE','DF'=> 'DF','ES'=> 'ES','GO'=> 'GO','MA'=> 'MA','MT'=> 'MT','MS'=> 'MS','MG'=> 'MG','PA'=> 'PA','PB'=> 'PB','PR'=> 'PR','PE'=> 'PE','PI'=> 'PI','RJ'=> 'RJ','RN'=> 'RN','RS'=> 'RS','RO'=> 'RO','RR'=> 'RR','SC'=> 'SC','SP'=> 'SP','SE'=> 'SE','TO'=> 'TO'];
    $sexo = ['M' => 'Masculino', 'F' => 'Feminino'];

    helper('form');
    echo form_open('cliente/alterar');
        echo $row;
        echo $divAbre;
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Telefone');
        echo '<br>';
        echo form_input('tel', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Sexo');
        echo '<br>';
        echo form_dropdown('sexo', $sexo, '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('E-mail');
        echo '<br>';
        echo form_input('email', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Senha');
        echo '<br>';
        echo form_password('senha', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Endereco');
        echo '<br>';
        echo form_input('endereco', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Complemento');
        echo '<br>';
        echo form_input('complemento', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Bairro');
        echo '<br>';
        echo form_input('bairro', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cidade');
        echo '<br>';
        echo form_input('cidade', '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Estado');
        echo '<br>';
        echo form_dropdown('uf', $estados, '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de nascimento');
        echo '<br>';
        echo form_input('nasc', '', $input, 'date');
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de cadastro');
        echo '<br>';
        echo form_input('dtcad', '', $input, 'date');
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Cadastrar', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>