<div class="container">
<h1>Alteração de dados do Cliente selecionado</h1>
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

    $estados = [$dados['TB_CLIENTE_UF'] => $dados['TB_CLIENTE_UF'], 'AC'=> 'AC','AL'=> 'AL','AP'=> 'AP','AM'=> 'AM','BA'=> 'BA','CE'=> 'CE','DF'=> 'DF','ES'=> 'ES','GO'=> 'GO','MA'=> 'MA','MT'=> 'MT','MS'=> 'MS','MG'=> 'MG','PA'=> 'PA','PB'=> 'PB','PR'=> 'PR','PE'=> 'PE','PI'=> 'PI','RJ'=> 'RJ','RN'=> 'RN','RS'=> 'RS','RO'=> 'RO','RR'=> 'RR','SC'=> 'SC','SP'=> 'SP','SE'=> 'SE','TO'=> 'TO'];
    $sexo = [$dados['TB_CLIENTE_SEXO'] => $dados['TB_CLIENTE_SEXO'], 'M' => 'Masculino', 'F' => 'Feminino'];

    helper('form');
    echo form_open('cliente/alterar');
        echo $row;
        echo $divAbreID;
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['TB_CLIENTE_ID'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', $dados['TB_CLIENTE_NOME'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Telefone');
        echo '<br>';
        echo form_input('tel',  $dados['TB_CLIENTE_TEL'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Sexo');
        echo '<br>';
        echo form_dropdown('sexo',$sexo, '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('E-mail');
        echo '<br>';
        echo form_input('email',  $dados['TB_CLIENTE_EMAIL'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Senha');
        echo '<br>';
        echo form_input('senha',  $dados['TB_CLIENTE_SENHA'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Endereco');
        echo '<br>';
        echo form_input('endereco',  $dados['TB_CLIENTE_ENDERECO'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Complemento');
        echo '<br>';
        echo form_input('complemento',  $dados['TB_CLIENTE_COMPLEMENTO'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Bairro');
        echo '<br>';
        echo form_input('bairro',  $dados['TB_CLIENTE_BAIRRO'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Cidade');
        echo '<br>';
        echo form_input('cidade',  $dados['TB_CLIENTE_CIDADE'], $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('UF');
        echo '<br>';
        echo form_dropdown('uf', $estados, '', $input);
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de nascimento');
        echo '<br>';
        echo form_input('nasc',  $dados['TB_CLIENTE_DT_NASC'], $input, 'date');
        echo $divFecha;
        echo $divAbre;
        echo form_label('Data de cadastro');
        echo '<br>';
        echo form_input('dtcad',  $dados['TB_CLIENTE_DT_CAD'], $input, 'date');
        echo $divFecha;
        echo $divAbreB;
        echo form_submit('mysubmit', 'Alterar dados', $submit);
        echo $divFecha;
        echo $divFecha;
    echo form_close();

?>
</div>