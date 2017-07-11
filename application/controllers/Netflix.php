<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Netflix extends CI_Controller 
{

	public function index()
	{
		
		$total = 2000+6000;

		//Imprimir variables
		$this->load->view('netflix', 
			[
				'title' => 'bla bla',
				'ghj' => 'que onda',
				'total'=> $total
			]);
	}

	public function asdas()
	{}

}
