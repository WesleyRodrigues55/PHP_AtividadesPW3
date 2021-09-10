<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('head') . view('calc_bhaskara') . view('footer');
	}
}
