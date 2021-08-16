<?php
class Dados{
    //método
    public function __construct()
    {
        //dados entrada
        $this->a = 1;
        $this->b = 12;
        $this->c = -13;
        //dados saída
        $this->delta = null;
        $this->x1 = null;
        $this->x2 = null;
    }
}

class CalculoDelta extends Dados
{
    //método
    public function calc_delta()
    {
        $this->delta_ret = ($this->b * $this->b) - (4 * $this->a * $this->c);
    }
}

class CalculoX1X2 extends Dados
{
    //métodos
    public function calc_x1()
    {
        $this->x1_ret = (-$this->b + sqrt($this->delta)) / (2 * $this->a);
    }

    public function calc_x2()
    {
        $this->x2_ret = (-$this->b - sqrt($this->delta)) / (2 * $this->a);
    }
}
# -------------------------------------------
echo '<pre>';
# -------------------------------------------
//instanciar
$dados = new Dados;
$delta = new CalculoDelta;
$xs = new CalculoX1X2;
# -------------------------------------------
// calcula delta
$delta->calc_delta();
# -------------------------------------------
//incluir em xs o valor de delta e calcula x1 e x2
$xs->delta = $delta->delta_ret;
$xs->calc_x1();
$xs->calc_x2();
# -------------------------------------------
//adiciona os valores de saída nas propriedas da classe dados
$dados->delta = $delta->delta_ret;
$dados->x1 = $xs->x1_ret;
$dados->x2 = $xs->x2_ret;
# -------------------------------------------
//exibe
var_dump($dados->a);
var_dump($dados->b);
var_dump($dados->c);
var_dump($dados->delta);
var_dump($dados->x1);
var_dump($dados->x2);








?>