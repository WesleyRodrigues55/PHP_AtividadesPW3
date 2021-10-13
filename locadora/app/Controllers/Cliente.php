<?php

namespace App\Controllers;

use App\Models\TableCliente;

class Cliente extends BaseController
{
	public function index()
	{
        $bd = new TableCliente;
        $data = $bd->findAll();

        foreach ($data as $key => $value) {
            $data[$key]['alterar'] = '<a href="view_alterar/' . $value['TB_CLIENTE_ID'] . '" class="btn btn-dark">Alterar</a>';
            $data[$key]['excluir'] = '<a href="excluir/' . $value['TB_CLIENTE_ID'] . '" class="btn btn-danger">Excluir</a>';

            unset($data[$key]['TB_CLIENTE_SENHA']);
        }
        $table['tabela'] = $data;
        
		return view('head') .
            view('cliente/cliente', $table) .
            view('footer');
	}

    public function view_alterar($id = null)
    {
        $bd = new TableCliente;

        $data = $bd->find($id);

        $dados['dados'] = $data;

        echo view('head') .
            view('cliente/alterCliente', $dados) . 
            view('footer');
    }

    public function alterar()
    {
        $bd = new TableCliente;

        if(isset($this->request->getPost()['ID']))
        { 
            $this->id = $this->request->getPost()['ID'];
        } else
        {
            $this->id = FALSE;
        }

        $this->nome = $this->request->getPost()['nome'];
        $this->tel = $this->request->getPost()['tel'];
        $this->sexo = $this->request->getPost()['sexo'];
        $this->email = $this->request->getPost()['email'];
        $this->senha = $this->request->getPost()['senha'];
        $this->endereco = $this->request->getPost()['endereco'];
        $this->complemento = $this->request->getPost()['complemento'];
        $this->bairro = $this->request->getPost()['bairro'];
        $this->cidade = $this->request->getPost()['cidade'];
        $this->uf = $this->request->getPost()['uf'];
        $this->nasc = $this->request->getPost()['nasc'];
        $this->dtcad = $this->request->getPost()['dtcad'];

        $data = [
			'TB_CLIENTE_ID' => $this->id, 
            'TB_CLIENTE_NOME' => $this->nome, 
            'TB_CLIENTE_TEL' => $this->tel, 
            'TB_CLIENTE_SEXO' => $this->sexo, 
            'TB_CLIENTE_EMAIL' => $this->email, 
            'TB_CLIENTE_SENHA' => $this->senha, 
            'TB_CLIENTE_ENDERECO' => $this->endereco, 
            'TB_CLIENTE_COMPLEMENTO' => $this->complemento, 
            'TB_CLIENTE_BAIRRO' => $this->bairro, 
            'TB_CLIENTE_CIDADE' => $this->cidade, 
            'TB_CLIENTE_UF' => $this->uf, 
            'TB_CLIENTE_DT_NASC' => $this->nasc, 
            'TB_CLIENTE_DT_CAD' => $this->dtcad, 
		];	

        $data = $bd->save($data);

        return redirect()->to('cliente/index');
    }

    public function excluir($id = null)
    {
        $bd = new TableCliente;

        $data = $bd->delete($id);

        return redirect()->to('cliente/index');
    }

    public function cadastrar()
    {
        return view('head') .
            view('cliente/cadCliente') . 
            view('footer');  
    }
}
