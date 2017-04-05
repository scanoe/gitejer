<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cursos extends CI_Controller {
	public function index()
	{
		$cursos["cursos"]=array("curso1"=> array("codigo"=>"123","nombre"=>"construccion","aula"=>"123","profesor"=>"carlos","apellido"=>"slim","dpto"=>"computacion"),
			"curso2"=> array("codigo"=>"12","nombre"=>"pan","aula"=>"12","profesor"=>"carlos","apellido"=>"slim","dpto"=>"computacion"),
			"curso3"=> array("codigo"=>"1","nombre"=>"pan2","aula"=>"121","profesor"=>"peludo","apellido"=>"arboleda","dpto"=>"computacion"),
			"curso4"=> array("codigo"=>"112","nombre"=>"pan3","aula"=>"122","profesor"=>"andres","apellido"=>"mesa","dpto"=>"computacion"),
			"curso5"=> array("codigo"=>"126","nombre"=>"pan","aula"=>"12","profesor"=>"carlos","apellido"=>"slim","dpto"=>"computacion"));
			$this->load->view("header");
			$this->load->view("cursos",$cursos);
			$this->load->view("footer");


	}

		
}