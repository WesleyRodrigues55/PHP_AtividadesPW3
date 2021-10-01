<?php

namespace App\Controllers;

use App\Models\TableCargo;


class Cargo extends BaseController
{
	public function index()
	{
        $bd = new TableCargo;
        $data = $bd->findAll();

        foreach ($data as $key => $value) {
            $data[$key]['alterar'] = '<a href="view_alterar/' . $value['TB_CARGO_ID'] . '">Alterar</a>';
            $data[$key]['excluir'] = '<a href="excluir/' . $value['TB_CARGO_ID'] . '">Excluir</a>';
        }
        $table['tabela'] = $data;
        
		return view('cargo/cargo', $table);
	}

    public function view_alterar($id = null)
    {
        $bd = new TableCargo;

        $data = $bd->find($id);

        $dados['dados'] = $data;

        echo view('cargo/alterCargo', $dados);
    }

    public function alterar()
    {
        $bd = new TableCargo;

        if(isset($this->request->getPost()['ID']))
        { 
            $this->id = $this->request->getPost()['ID'];
        } else
        {
            $this->id = FALSE;
        }
        $this->cargo = $this->request->getPost()['cargo'];

        $data = [
			'TB_CARGO_ID' => $this->id, 
            'TB_CARGO_NOME' => $this->cargo, 
		];	

        $data = $bd->save($data);

        return redirect()->to('CARGO/index');
    }

    public function excluir($id = null)
    {
        $bd = new TableCargo;

        $data = $bd->delete($id);

        return redirect()->to('cargo/index');
    }

    public function cadastrar()
    {
        return view('cargo/cadCargo');  
    }
}
