<?php

namespace App\Controllers;

use App\Models\TableModelo;

class Modelo extends BaseController
{
	public function index()
	{
        $bd = new TableModelo;
        $data = $bd->findAll();

        foreach ($data as $key => $value) {
            $data[$key]['alterar'] = '<a href="view_alterar/' . $value['TB_MODELO_ID'] . '">Alterar</a>';
            $data[$key]['excluir'] = '<a href="excluir/' . $value['TB_MODELO_ID'] . '">Excluir</a>';
        }
        $table['tabela'] = $data;
        
		return view('modelo/modelo', $table);
	}

    public function view_alterar($id = null)
    {
        $bd = new TableModelo;

        $data = $bd->find($id);

        $dados['dados'] = $data;

        echo view('modelo/alterModelo', $dados);
    }

    public function alterar()
    {
        $bd = new TableModelo;

        if(isset($this->request->getPost()['ID']))
        { 
            $this->id = $this->request->getPost()['ID'];
        } else
        {
            $this->id = FALSE;
        }
        $this->desc = $this->request->getPost()['desc'];
        $this->obs = $this->request->getPost()['obs'];
        $this->data = $this->request->getPost()['data'];

        $data = [
			'TB_MODELO_ID' => $this->id, 
            'TB_MODELO_DESC' => $this->desc,
            'TB_MODELO_OBS' => $this->obs,
            'TB_MODELO_DATA' => $this->data, 
		];	

        $data = $bd->save($data);

        return redirect()->to('modelo/index');
    }

    public function excluir($id = null)
    {
        $bd = new TableModelo;

        $data = $bd->delete($id);

        return redirect()->to('modelo/index');
    }

    public function cadastrar()
    {
        return view('modelo/cadModelo');  
    }
}
