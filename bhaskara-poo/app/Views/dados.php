
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="container">
    <h1>Tabela de cálculos</h1>

    <?php

    //instancia a tabela
    $table = new \CodeIgniter\View\Table();


    $table->setHeading('Código', 'Valores de A', 'Valores de B', 'Valores de C', 'Valores de Delta', 'Valores de X1', 'Valores de X2');
        $template = [
            'table_open'         => '<table class="table table-dark">',
    ];
    $table->setTemplate($template);



    //chama a tabela
    echo $table->generate($tabela);


    echo '<br><br><hr><br><br>';
    helper('form');
    echo form_open('Bhaskara/excluir');
        echo form_label('Digite o código que deseja apagar');
        echo '<br>';
        echo form_input('codigo', '');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Enviar');
    echo form_close();

    echo '<br><hr><br>';
    helper('form');
    echo form_open('Bhaskara/ListarAlteracao');
        echo form_label('Digite o código que deseja alterar');
        echo '<br>';
        echo form_input('codigo', '');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Enviar');
    echo form_close();

    ?>

    <a href="../">Calcular um outro número</a>

</div>
<!-- fim container -->
