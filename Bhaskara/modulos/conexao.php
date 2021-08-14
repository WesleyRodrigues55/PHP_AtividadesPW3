<?php

include 'functions.php';

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$valor_delta = calcDelta($a,$b,$c);

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($valor_delta);

$x1 = calcX1($a,$b,$c,$valor_delta);
$x2 = calcX2($a,$b,$c,$valor_delta);

var_dump($x1);
var_dump($x2);

coonect_db($a, $b, $c, $valor_delta, $x1, $x2);
?>