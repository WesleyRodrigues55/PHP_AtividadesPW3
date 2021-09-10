FORMULÁRIO DE ENTRADA
<?php

    helper('form');
    echo form_open('Bhaskara/calc_bhaskara');
        echo form_label('Digite o valor de A');
        echo '<br>';
        echo form_input('valor_a', '');
        echo '<br><br>';
        echo form_label('Digite o valor de B');
        echo '<br>';
        echo form_input('valor_b', '');
        echo '<br><br>';
        echo form_label('Digite o valor de C');
        echo '<br>';
        echo form_input('valor_c', '');
        echo '<br><br>';
        echo form_submit('mysubmit', 'Enviar dados');
    echo form_close();

?>

<a href="bhaskara/consultar">Ver dados já cálculados</a>

<h1>Falta definir update e  o botão na tabela</h1>

