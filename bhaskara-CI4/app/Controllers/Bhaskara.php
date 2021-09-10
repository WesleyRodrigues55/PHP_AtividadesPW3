<?php

namespace App\Controllers;

class Bhaskara extends BaseController
{
	public function index()
	{
		return view('create');
	}

	public function recebe_dados()
	{
		//recebendo dados via array post
		$this->a_vlr = $this->request->getPost()['valor_a'];
		$this->b_vlr = $this->request->getPost()['valor_b'];
		$this->c_vlr = $this->request->getPost()['valor_c'];
		// $this->codigo = $this->request->getPost()['ID'];

	}


	public function calc_delta()
	{
		$this->delta_ret = ($this->b_vlr * $this->b_vlr) - (4 * $this->a_vlr * $this->c_vlr);

		return $this->delta_ret;
	}

	public function calc_x1()
	{
		$this->x1_ret = (-$this->b_vlr + sqrt($this->calc_delta())) / (2 * $this->a_vlr);

		return $this->x1_ret;
	}

	public function calc_x2()
	{
		$this->x2_ret = (-$this->b_vlr - sqrt($this->calc_delta())) / (2 * $this->a_vlr);

		return $this->x2_ret;
	}

	public function calc_bhaskara()
	{
		$this->recebe_dados();

		if ($this->a_vlr == 0)
		{
			echo "A não pode ser igual a Zero.";
			exit;
		}

		if($this->calc_delta() < 0) 
		{
			echo 'Se o delta for menor que zero, a equação não possuirá valores reais.';
		} 
		else if ($this->calc_delta() == 0)
		{
			echo 'Se o delta for igual a zero, a equação terá somente um valor real ou dois resultados iguais';
		} 
		else 
		{
			$this->a_vlr ;
			$this->b_vlr;
			$this->c_vlr;
			$this->calc_delta();
			$this->calc_x1();
			$this->calc_x2();
			$this->insert_db($id = null);
			$this->consultar();
		}	
		
	}

	public function consultar()
    {
        //instancia model
		$bhaskaraModel = new \App\Models\BhaskaraModel();

        $todos = $bhaskaraModel->findAll();
        $data['tabela'] = $todos;

        echo view('dados', $data);

    }

	public function insert_db()
	{
		$bhaskaraModel = new \App\Models\BhaskaraModel();

		$this->primaryKey = 'id';

		$data = [
			'a' => $this->a_vlr,
			'b' => $this->b_vlr,
			'c' => $this->c_vlr,
			'delta' => $this->calc_delta(),
			'x1' => $this->calc_x1(),
			'x2' => $this->calc_x2()
		];	
		$bhaskaraModel->save($data);
	}

	public function excluir()
    {
        //instancia model
        $bhaskaraModel = new \App\Models\BhaskaraModel();

		$this->codigo = $this->request->getPost()['codigo'];

        $result = $bhaskaraModel->delete($this->codigo);

		$this->consultar();
    }

	public function ListarAlteracao()
	{
		$this->codigo = $this->request->getPost()['codigo'];
		

		//instancia model
		$bhaskaraModel = new \App\Models\BhaskaraModel();

		$todos = $bhaskaraModel->find($this->codigo);

		$dados['dados'] = $todos;

		if ($dados['dados'] == false) {
			echo "<script> alert('Esse id não existe, digite um id real');</script>";
			$this->consultar();
			exit;
		}

		echo view('alterar', $dados);
	}

	public function update()
	{
		$bhaskaraModel = new \App\Models\BhaskaraModel();

		$this->codigo = $this->request->getPost()['ID'];

		$this->primaryKey = 'id';

		$data = [
			'id' => $this->codigo,
			'a' => $this->a_vlr,
			'b' => $this->b_vlr,
			'c' => $this->c_vlr,
			'delta' => $this->calc_delta(),
			'x1' => $this->calc_x1(),
			'x2' => $this->calc_x2()
		];	
		$bhaskaraModel->save($data);
	}
}
