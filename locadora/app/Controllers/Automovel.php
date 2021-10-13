<?php

namespace App\Controllers;

use App\Models\TableAutomovel;
use App\Models\TableMarca;

class Automovel extends BaseController
{
	public function index()
	{
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_automovel');
        $builder->select('*');
        $builder->join('tb_marca', 'tb_automovel.TB_MARCA_ID = tb_marca.TB_MARCA_ID');
        $builder->join('tb_modelo', 'tb_automovel.TB_MODELO_ID = tb_modelo.TB_MODELO_ID');
        $query = $builder->get()->getResultArray();

        foreach ($query as $key => $value) {
            $query[$key]['alterar'] = '<a href="view_alterar/' . $value['TB_AUTOMOVEL_ID'] . '" class="btn btn-dark">Alterar</a>';
            $query[$key]['excluir'] = '<a href="excluir/' . $value['TB_AUTOMOVEL_ID'] . '" class="btn btn-danger">Excluir</a>';

            unset($query[$key]['TB_MARCA_ID']);
            unset($query[$key]['TB_MODELO_ID']);
            unset($query[$key]['TB_MODELO_DATA']);
            unset($query[$key]['TB_MODELO_OBS']);
        }
        $table['tabela'] = $query;
        
		return view('head') .
                view('automovel/automovel', $table) .
                view('footer');
	}

    public function view_alterar($id = null)
    {
        $bd = new TableAutomovel;

        $data = $bd->find($id);

        $dados['dados'] = $data;

        echo view('head') .
            view('automovel/alterAutomovel', $dados) .
            view('footer');
    }

    public function alterar()
    {
        $bd = new TableAutomovel;

        if(isset($this->request->getPost()['ID']))
        { 
            $this->id = $this->request->getPost()['ID'];
        } else
        {
            $this->id = FALSE;
        }

        $this->nome = $this->request->getPost()['nome'];
        $this->ano = $this->request->getPost()['ano'];
        $this->cor = $this->request->getPost()['cor'];
        $this->km = $this->request->getPost()['km'];
        $this->valor = $this->request->getPost()['valor'];
        $this->status = $this->request->getPost()['status'];
        $this->marca = $this->request->getPost()['marca'];
        $this->modelo = $this->request->getPost()['modelo'];

        $data = [
			'TB_AUTOMOVEL_ID' => $this->id, 
            'TB_AUTOMOVEL_NOME' => $this->nome, 
            'TB_AUTOMOVEL_ANO_FAB' => $this->ano, 
            'TB_AUTOMOVEL_COR' => $this->cor, 
            'TB_AUTOMOVEL_KM' => $this->km, 
            'TB_AUTOMOVEL_VALOR_D' => $this->valor, 
            'TB_AUTOMOVEL_STATUS' => $this->status, 
            'TB_MARCA_ID' => $this->marca, 
            'TB_MODELO_ID' => $this->modelo
		];	

        $data = $bd->save($data);

        return redirect()->to('automovel/index');
    }

    public function excluir($id = null)
    {
        $bd = new TableAutomovel;

        $data = $bd->delete($id);

        return redirect()->to('automovel/index');
    }

    public function cadastrar()
    {
        return view('head') .
            view('automovel/cadAutomovel') .
            view('footer');  
    }
}
