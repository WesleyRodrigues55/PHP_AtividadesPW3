<?php


helper('form');
    echo form_open('Bhaskara/calc_bhaskara');
        echo form_label('ID');
        echo '<br>';
        echo form_input('ID', $dados['id'], 'readonly');
        echo '<br><br>';
        echo form_label('Digite o valor de A');
        echo '<br>';
        echo form_input('valor_a', $dados['a']);
        echo '<br><br>';
        echo form_label('Digite o valor de B');
        echo '<br>';
        echo form_input('valor_b',  $dados['b']);
        echo '<br><br>';
        echo form_label('Digite o valor de C');
        echo '<br>';
        echo form_input('valor_c',  $dados['c']);
        echo '<br><br>';
        echo form_submit('mysubmit', 'Enviar dados');
    echo form_close();



?>