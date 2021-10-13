<?php

namespace App\Controllers;

use App\Models\TableFuncionario;
use App\Models\TableCargo;

class Funcionario extends BaseController
{
	public function index()
	{
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_funcionario');
        $builder->select('*');
        $builder->join('tb_cargo', 'tb_funcionario.TB_CARGO_ID = tb_cargo.TB_CARGO_ID');
        $query = $builder->get()->getResultArray();

        foreach ($query as $key => $value) {
            $query[$key]['alterar'] = '<a href="view_alterar/' . $value['TB_FUNCIONARIO_ID'] . '" class="btn btn-dark">Alterar</a>';
            $query[$key]['excluir'] = '<a href="excluir/' . $value['TB_FUNCIONARIO_ID'] . '" class="btn btn-danger">Excluir</a>';

            unset($query[$key]['TB_CARGO_ID']); 
        }
        $table['tabela'] = $query;
        
		return view('head') .
            view('funcionario/funcionario', $table) . 
            view('footer');
	}

    public function view_alterar($id = null)
    {
        $bd = new TableFuncionario;

        $data = $bd->find($id);

        $dados['dados'] = $data;

        echo view('head') .
            view('funcionario/alterfuncionario', $dados) . 
            view('footer');
    }

    public function alterar()
    {
        $bd = new TableFuncionario;

        if(isset($this->request->getPost()['ID']))
        { 
            $this->id = $this->request->getPost()['ID'];
        } else
        {
            $this->id = FALSE;
        }

        $this->nome = $this->request->getPost()['nome'];
        $this->tell = $this->request->getPost()['tell'];
        $this->data = $this->request->getPost()['data'];
        $this->cargo = $this->request->getPost()['cargo'];

        $data = [
			'TB_FUNCIONARIO_ID' => $this->id, 
            'TB_FUNCIONARIO_NOME' => $this->nome, 
            'TB_FUNCIONARIO_TEL' => $this->tell, 
            'TB_FUNCIONARIO_DT_CONTRATO' => $this->data, 
            'TB_CARGO_ID' => $this->cargo, 
		];	

        $data = $bd->save($data);

        return redirect()->to('funcionario/index');
    }

    public function excluir($id = null)
    {
        $bd = new TableFuncionario;

        $data = $bd->delete($id);

        return redirect()->to('funcionario/index');
    }

    public function cadastrar()
    {
        return view('head') .
            view('funcionario/cadFuncionario') . 
            view('footer');  
    }
}
