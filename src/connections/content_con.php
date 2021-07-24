<?php
    include("conexao.php");

    // receber parâmetros do array post
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $calcDelta = ($b * $b) -4 * $a * $c;
    $raizmais = (- $b + sqrt($calcDelta)) / 2 * $a;
    $raizmenos = ( - $b - sqrt($calcDelta)) / 2 * $a;

    if ($calcDelta >= "0" && $calcDelta != "") {
        $sql = @mysqli_query($conexao, "insert into form values(0, '$a','$b','$c', '$calcDelta','$raizmais','$raizmenos')");
        header('Location: content.php?delta=' . $calcDelta . '&a=' .  $a. '&b=' . $b . '&c=' . $c . '&mais=' .  $raizmais . '&menos=' .  $raizmenos);
    } else {
        echo'<script> 
                alert("O resultado de delta não pode ser negativo e nem em branco :( , tente outros valores...");
                window.location = "content.php?delta=' . $calcDelta . '&a=' .  $a. '&b=' . $b . '&c=' . $c . '&mais=' .  $raizmais . '&menos=' .  $raizmenos . '"
            </script>';
    }

    mysqli_close($conexao); 

    
?>