<h1>Alteração de dados do Cliente selecionado</h1>
<?php
    $estados = ['AC'=> 'AC','AL'=> 'AL','AP'=> 'AP','AM'=> 'AM','BA'=> 'BA','CE'=> 'CE','DF'=> 'DF','ES'=> 'ES','GO'=> 'GO','MA'=> 'MA','MT'=> 'MT','MS'=> 'MS','MG'=> 'MG','PA'=> 'PA','PB'=> 'PB','PR'=> 'PR','PE'=> 'PE','PI'=> 'PI','RJ'=> 'RJ','RN'=> 'RN','RS'=> 'RS','RO'=> 'RO','RR'=> 'RR','SC'=> 'SC','SP'=> 'SP','SE'=> 'SE','TO'=> 'TO'];
    $sexo = ['M' => 'Masculino', 'F' => 'Feminino'];

    helper('form');
    echo form_open('cliente/alterar');
        echo form_label('Nome');
        echo '<br>';
        echo form_input('nome', '', 'required');
        echo '<br><br>';
        echo form_label('Telefone');
        echo '<br>';
        echo form_input('tel', '', 'required');
        echo '<br><br>';
        echo form_label('Sexo');
        echo '<br>';
        echo form_dropdown('sexo', $sexo);
        echo '<br><br>';
        echo form_label('E-mail');
        echo '<br>';
        echo form_input('email', '', 'required');
        echo '<br><br>';
        echo form_label('Senha');
        echo '<br>';
        echo form_password('senha', '', 'required');
        echo '<br><br>';
        echo form_label('Endereco');
        echo '<br>';
        echo form_input('endereco', '', 'required');
        echo '<br><br>';
        echo form_label('Complemento');
        echo '<br>';
        echo form_input('complemento', '', 'required');
        echo '<br><br>';
        echo form_label('Bairro');
        echo '<br>';
        echo form_input('bairro', '', 'required');
        echo '<br><br>';
        echo form_label('Cidade');
        echo '<br>';
        echo form_input('cidade', '', 'required');
        echo '<br><br>';
        echo form_label('Estado');
        echo '<br>';
        echo form_dropdown('uf', $estados);
        echo '<br><br>';
        echo form_label('Data de nascimento');
        echo '<br>';
        echo form_input('nasc', '', 'required', 'date');
        echo '<br><br>';
        echo form_label('Data de cadastro');
        echo '<br>';
        echo form_input('dtcad', '', 'required', 'date');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Cadastrar');
    echo form_close();

?>
