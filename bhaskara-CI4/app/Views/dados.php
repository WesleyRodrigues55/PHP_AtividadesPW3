
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="container">
    <h1>Tabela de cálculos</h1>

    <a href="../" class="btn btn-primary">Calcular um outro número</a>
    <!-- <script>
        function x()
        {
            var a = confirm("Deseja excluir?");

            if (a == false)
            {
                alert("aaaaa");
                
            }
        
        }
    </script> -->
    <?php

    //instancia a tabela
    $table = new \CodeIgniter\View\Table();


    $table->setHeading('Código', 'Valores de A', 'Valores de B', 'Valores de C', 'Valores de Delta', 'Valores de X1', 'Valores de X2');
        $template = [
            'table_open'         => '<table class="table">',
    ];
    $table->setTemplate($template);



    //chama a tabela
    echo $table->generate($tabela);

    ?>
   

    

</div>
<!-- fim container -->
