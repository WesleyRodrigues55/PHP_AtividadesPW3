<?php

namespace App\Controllers;

use App\Models\TableMarca;


class Marca extends BaseController
{
	public function index()
	{
        $bd = new TableMarca;
        $data = $bd->findAll();

        foreach ($data as $key => $value) {
            $data[$key]['alterar'] = '<a href="view_alterar/' . $value['TB_MARCA_ID'] . '">Alterar</a>';
            $data[$key]['excluir'] = '<a href="excluir/' . $value['TB_MARCA_ID'] . '">Excluir</a>';
        }
        $table['tabela'] = $data;
        
		return view('marca/marca', $table);
	}

    public function view_alterar($id = null)
    {
        $bd = new TableMarca;

        $data = $bd->find($id);

        $dados['dados'] = $data;

        echo view('marca/alterMarca', $dados);
    }

    public function alterar()
    {
        $bd = new TableMarca;

        if(isset($this->request->getPost()['ID']))
        { 
            $this->id = $this->request->getPost()['ID'];
        } else
        {
            $this->id = FALSE;
        }
        $this->marca = $this->request->getPost()['marca'];

        $data = [
			'TB_MARCA_ID' => $this->id, 
            'TB_MARCA_NOME' => $this->marca, 
		];	

        $data = $bd->save($data);

        return redirect()->to('marca/index');
    }

    public function excluir($id = null)
    {
        $bd = new TableMarca;

        $data = $bd->delete($id);

        return redirect()->to('marca/index');
    }

    public function cadastrar()
    {
        return view('marca/cadMarca');  
    }
}
