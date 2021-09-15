
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="container">

<?php

helper('form');
    echo form_open('Bhaskara/calc_bhaskara');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['id'], 'readonly class="form-control w-25"');
        echo '<br><br>';
        echo form_label('Digite o valor de A');
        echo '<br>';
        echo form_input('valor_a', $dados['a'], 'class="form-control w-25"');
        echo '<br><br>';
        echo form_label('Digite o valor de B');
        echo '<br>';
        echo form_input('valor_b',  $dados['b'], 'class="form-control w-25"');
        echo '<br><br>';
        echo form_label('Digite o valor de C');
        echo '<br>';
        echo form_input('valor_c',  $dados['c'], 'class="form-control w-25"');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Alterar dados', 'class="btn btn-primary"');
    echo form_close();



?>


</div>
<!-- fim container -->