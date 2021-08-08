<?php
include 'funcoes.php';
echo '<pre>';

// $a = 12;
// $b = 1;
// $c = 12;

$a_inicio = $_POST['inicio-a'];
$a_fim = $_POST['fim-a'];
$b_inicio = $_POST['inicio-b'];
$b_fim = $_POST['fim-b'];
$c_inicio = $_POST['inicio-c'];
$c_fim = $_POST['fim-c'];

$a_valores = array();
$b_valores = array();
$c_valores = array();

for ($i = $a_inicio; $i <= $a_fim ; $i++) {
    $a_valores[] = $i;
}
for ($i = $b_inicio; $i <= $b_fim; $i++) {
    $b_valores[] = $i;
}

for ($i = $c_inicio; $i <= $c_fim; $i++) {
    $c_valores[] = $i;
}

// var_dump($a_valores);
// var_dump($b_valores);
// var_dump($c_valores);

$resultados = array();

foreach ($a_valores as $chave_a => $valor_a) {
    foreach ($b_valores as $chave_b => $valor_b) {
        foreach ($c_valores as $chave_c => $valor_c) {
            $resultado_temp = calc_bhaskara($valor_a, $valor_b, $valor_c);
            if($resultado_temp != NULL && $resultado_temp['x1'] != NULL && $resultado_temp['x2'] != NULL){
                $resultados[] = $resultado_temp;
            }
        }
    }
}

var_dump($resultados);
 ?>
