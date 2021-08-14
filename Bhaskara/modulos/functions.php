<?php
function calcDelta($a,$b,$c){
    $delta = ($b * $b) -4 * $a * $c;
    if ($delta > 0) {
        $resultado = $delta;
    }else{
        $resultado = "Não existe valores reais";
    }
    return $resultado;
}

function calcX1($a,$b,$c,$delta){
    $x1 = (- $b + sqrt($delta)) / 2 * $a;
    return $x1;
}

function calcX2($a,$b,$c,$delta){
    if($delta == 0) {
        $x2 = NULL;
      } else {
    $x2 = (- $b - sqrt($delta)) / 2 * $a;
    return $x2;
      }
}

function get_insert_sql($a,$b,$c,$delta,$x1,$x2){
    $sql = "insert into form values(0,'$a','$b','$c','$delta','$x1','$x2')";
    return $sql;
}

function coonect_db($a, $b, $c, $delta, $x1, $x2) {

    $conn = mysqli_connect('localhost','root','','calc_bhaskara');

    $sql = get_insert_sql($a,$b,$c,$delta,$x1,$x2);

    $result = mysqli_query($conn, $sql);
}

?>