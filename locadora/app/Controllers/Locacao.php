<?php

namespace App\Controllers;

use App\Models\TableLocacao;

class Locacao extends BaseController
{
	public function index()
	{
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_locacao');
        $builder->select('tb_locacao.TB_LOCACAO_ID, tb_locacao.TB_LOCACAO_TIPO, tb_locacao.TB_LOCACAO_VALOR, tb_locacao.TB_LOCACAO_DT_INICIO, tb_locacao.TB_LOCACAO_DT_FIM, tb_cliente.TB_CLIENTE_NOME, tb_funcionario.TB_FUNCIONARIO_NOME, tb_automovel.TB_AUTOMOVEL_NOME');
        $builder->join('tb_cliente', 'tb_locacao.TB_CLIENTE_ID = tb_cliente.TB_CLIENTE_ID');
        $builder->join('tb_funcionario', 'tb_locacao.TB_FUNCIONARIO_ID = tb_funcionario.TB_FUNCIONARIO_ID');
        $builder->join('tb_automovel', 'tb_locacao.TB_AUTOMOVEL_ID = tb_automovel.TB_AUTOMOVEL_ID');
        $query = $builder->get()->getResultArray();

        foreach ($query as $key => $value) {
            $query[$key]['alterar'] = '<a href="view_alterar/' . $value['TB_LOCACAO_ID'] . '">Alterar</a>';
            $query[$key]['excluir'] = '<a href="excluir/' . $value['TB_LOCACAO_ID'] . '">Excluir</a>';
        }
        $table['tabela'] = $query;
        
		return view('locacao/locacao', $table);
	}

    public function view_alterar($id = null)
    {
        $bd = new TableLocacao;

        $data = $bd->find($id);

        $dados['dados'] = $data;

        echo view('locacao/alterLocacao', $dados);
    }

    public function alterar()
    {
        $bd = new TableLocacao;

        if(isset($this->request->getPost()['ID']))
        { 
            $this->id = $this->request->getPost()['ID'];
        } else
        {
            $this->id = FALSE;
        }
        $this->tipo = $this->request->getPost()['tipo'];
        $this->valor = $this->request->getPost()['valor'];
        $this->dtinicio = $this->request->getPost()['dtinicio'];
        $this->dtfim = $this->request->getPost()['dtfim'];
        $this->cliente = $this->request->getPost()['cliente'];
        $this->funcionario = $this->request->getPost()['funcionario'];
        $this->automovel = $this->request->getPost()['automovel'];

        $data = [
            'TB_LOCACAO_ID' => $this->id,
            'TB_LOCACAO_TIPO' => $this->tipo, 
            'TB_LOCACAO_VALOR' => $this->valor,
            'TB_LOCACAO_DT_INICIO' => $this->dtinicio,
            'TB_LOCACAO_DT_FIM' => $this->dtfim,
            'TB_CLIENTE_ID' => $this->cliente,
            'TB_FUNCIONARIO_ID' => $this->funcionario,
            'TB_AUTOMOVEL_ID' => $this->automovel
		];	

        $data = $bd->save($data);

        return redirect()->to('locacao/index');
    }

    public function excluir($id = null)
    {
        $bd = new TableLocacao;

        $data = $bd->delete($id);

        return redirect()->to('locacao/index');
    }

    public function cadastrar()
    {
        return view('locacao/cadLocacao');  
    }
}
