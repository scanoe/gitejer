<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {
	public function index()
	{
				$this->load->helper('form');
			$this->load->view("header");
			$this->load->view("registro");
			$this->load->view("footer");

	}
		public function validar()
	{
		$nombre=$this->input->post('nombre');
		$apellido=$this->input->post('apellido');
		$sexo=$this->input->post('sexo');
		$correo=$this->input->post('correo');
		$nacimineto=$this->input->post('nacimiento');
		if ($nombre and $apellido and $sexo and $correo ) {

			if ($sexo=="Masculino" or $sexo=="Femenino") {
				if (strlen($nombre) >50 or strlen($apellido)>50) {
					echo "<p> nombre u apellido demasiado largos</p>";
				}else{echo"<p> Registro correcto</p>";}

				
			} else{echo "<p> sexo no valido</p>";}

			
		}
		else {echo "<p> faltan datos obligaorios</p>";}

	}

		
}