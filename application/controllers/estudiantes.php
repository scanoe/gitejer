<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estudiantes extends CI_Controller {
	public function index()
	{
		$cursos["stu"]=array("estudiante1"=> array("nacimiento"=>"02-08-1997","sexo"=>"Masculino","nombre"=>"carlos","apellido"=>"slim","correo"=>"a@unal.com","semestre"=>"1"),
			"estudiante2"=> array("nacimiento"=>"03-08-1997","sexo"=>"Masculino","nombre"=>"Sebastian","apellido"=>"cano","correo"=>"cano@unal.com","semestre"=>"9"),
			"estudiante3"=> array("nacimiento"=>"04-08-1997","sexo"=>"Masculino","nombre"=>"carl","apellido"=>"sagan","correo"=>"sagan@unal.com","semestre"=>"4"),
			"estudiante4"=> array("nacimiento"=>"05-08-1997","sexo"=>"Femenino","nombre"=>"andrea","apellido"=>"mesa","correo"=>"noSoyAndresMesa@unal.com","semestre"=>"10"),
			"estudiante5"=> array("nacimiento"=>"06-08-1997","sexo"=>"Masculino","nombre"=>"peludo","apellido"=>"arboleda","correo"=>"YaNoSoyPeludo@unal.com","semestre"=>"9"),
			"estudiante6"=> array("nacimiento"=>"07-08-1997","sexo"=>"Masculino","nombre"=>"pepe","apellido"=>"papa","correo"=>"ppp@unal.com","semestre"=>"2"),
			"estudiante7"=> array("nacimiento"=>"08-08-1997","sexo"=>"Masculino","nombre"=>"ana","apellido"=>"pepe","correo"=>"pepa@unal.com","semestre"=>"3"),
			"estudiante8"=> array("nacimiento"=>"09-08-1997","sexo"=>"Masculino","nombre"=>"pacho","apellido"=>"algo","correo"=>"pachom@unal.com","semestre"=>"3")

			);
			$this->load->view("header");
			$this->load->view("estudiantes",$cursos);
			$this->load->view("footer");


	}

		
}