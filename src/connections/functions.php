<?php
    function calcDelta($conexao){
        // receber parâmetros do array post e converte , em .
        $a = $_POST['a'] = str_replace(',', '.', $_POST['a']);
        $b = $_POST['b'] = str_replace(',', '.', $_POST['b']);
        $c= $_POST['c'] = str_replace(',', '.', $_POST['c']);

        // verifica se tem algum campo em branco
        if (!empty($_POST) AND (empty($_POST['a']) OR empty($_POST['b']) OR empty($_POST['c']))) {
            echo "Valor em branco, refaça os cálculos...";
        } else {
            //calcula o delta
            $calcDelta = ($b * $b) -4 * $a * $c;
            //verifica se o valor de delta é negativo
            if ($calcDelta < 0) {
                echo "O valor de delta não pode ser negativo, refaça os cálculos...";
            } else {
                echo "<b>O valor de Delta é = $calcDelta</b>";
                // criando calc x1 e x2 apenas para armazenar no banco
                $raizmais= (- $b + sqrt($calcDelta)) / 2 * $a;
                echo "<b>O valor de X2 é = $raizmais</b>";
                $raizmenos = (- $b - sqrt($calcDelta)) / 2 * $a;
                echo "<b>O valor de X2 é = $raizmenos</b>";

                $sql = @mysqli_query($conexao, "insert into form values(0, '$a','$b','$c', '$calcDelta','$raizmais','$raizmenos')");
                if (!$sql) {
                    die("Query inválida: " . @mysqli_error($conexao));
                }
                mysqli_close($conexao);
            } 
        }
    }
    function a(){
        $a = $_POST['a'] = str_replace(',', '.', $_POST['a']);
        echo "Valor de A=$a";
    }
    function b(){
        $b = $_POST['b'] = str_replace(',', '.', $_POST['b']);
        echo "Valor de B= $b";
    }
?>