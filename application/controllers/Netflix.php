<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Netflix extends CI_Controller 
{

	public function index()
	{
		//Arreglos normal y asociativo
        $asociativo = array('zapato' => 'botas','color' =>'azules','tamaño' =>'grandes', 'numero' => 123);

		$arreglo = array('botas',"azul",'grandes','tacon');
		
		$total = 2000+6000;

		//Imprimir variables
		$this->load->view('netflix', 
			[
				'arreglo'=>$arreglo,
				'title' => 'bla bla',
				'ghj' => 'que onda',
				'total'=> $total,
				'asociativo' =>$asociativo
			]);
	}

}
