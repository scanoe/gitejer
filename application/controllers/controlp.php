<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlp extends CI_Controller {

	public function MregistroE()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('registroprofesor');
		$this->load->view('footer');
	}


	
	public function registro(){
		$this->load->model('Persona');
		$data['nombre']=$this->input->post('nombre');
		$data['apellido']=$this->input->post('apellido');
		$data['sexo']=$this->input->post('sexo');
		$data['email']=$this->input->post('correo');
		$data['fecha_nacimiento']=$this->input->post('nacimiento');
		$data['tipo_documento']=$this->input->post('tipodoc');
		$data['numero_documento']=$this->input->post('numdoc');
		$data['direccion']=$this->input->post('direccion');
		$data['ciudad']=$this->input->post('ciudad');
		$data['nacionalidad']=$this->input->post('nacionalidad');
		$data['telefono']=$this->input->post('telefono');
		$persona=$this->Persona->__construct($data);
		$this->Persona->registrar($data);
		echo "<p>Registro exitoso</p>";

	}

	public function regprofesor(){
		$this->load->model('Profesor');
		$data['cedula']=$this->input->post('cedula');
		$data['nombre']=$this->input->post('nombre');
		$data['fecha_nacimiento']=$this->input->post('fecha_nacimiento');
		$data['lugar_nacimiento']=$this->input->post('lugar_nacimiento');
		$data['titulo']=$this->input->post('titulo');
		$data['departamento']=$this->input->post('departamento');

		$profesor = new Profesor($data);
		$profesor->registrar();

	}
		public function regcur(){
		$this->load->model('curso');
		$data['id']=$this->input->post('id');
		$data['nombre']=$this->input->post('nombre');
		$data['facultad']=$this->input->post('facultad');
		$curso = new curso($data);
		$curso->registrar();

	}
			public function matricular($curso){
		$this->load->model('Matricula');
		$data['id']=$this->input->post('id');
		$data['nota_final']=$this->input->post('nota_final');
		$estudiante=$this->input->post('estudiante');
	
		$matricula = new Matricula($data);
		$matricula->registrar($curso,$estudiante);

	}
	public function listarE(){
		$this->load->helper('form');
		$this->load->model('Estudiante');
		$data['elemento']=$this->Estudiante->obtener_todas();
		
		$this->load->view('header');
		$this->load->view('estudiantes',$data);
		$this->load->view('footer');
	}
	public function FiltrarE(){
		$this->load->helper('form');
		$this->load->model('Estudiante');
		$edad=$this->input->post('edad');
		$data['elemento']=$this->Estudiante->FiltrarE($edad);
		$this->load->view('header');
		$this->load->view('estudiantes',$data);
		$this->load->view('footer');




	}
	public function extG($id){
		$this->load->model('finca');
		$this->load->model('Grangero');
		$data['grangero']=$this->Grangero->obtenerG($id);
		$data['finca']=$this->finca->obtenerG($id);

		$this->load->view('header');
		$this->load->view('infG',$data);
		$this->load->view('footer');

	}

	public function info(){
		$this->load->model('Persona');
		$data1=$this->Persona->obtener_todas();
		$a=$this->uri->segment(3);
		$b=$this->uri->segment(4);
		foreach ($data1 as $key) {
			if ($key->__get('numero_documento')==$a and $key->__get('tipo_documento')==$b) {
				$dat['ele']=$key;

				$this->load->view('header');
				$this->load->view('infor',$dat);
				$this->load->view('footer');
			}
		}
		
	}
		
	public function listarC(){
		$this->load->model('curso');
		$data['curso']=$this->curso->obtener_todas();
		$this->load->view('header');
		$this->load->view('cursos',$data);
		$this->load->view('footer');

	}
	public function MregistroM($id)
	{	$data["curso"]=$id;
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('registromatricula',$data);
		$this->load->view('footer');

	}
	public function maxG(){
		$this->load->model('Grangero');
		$data['elemento']=$this->Grangero->maxgallinas();
		$data['elemento2']=$this->Grangero->maxvacas();
		$this->load->view('header');
		$this->load->view('maxG',$data);
		$this->load->view('footer');

	}




	public function fincavg(){
		$this->load->model('finca');
		$data['elemento']=$this->finca->fincavg();
				$this->load->view('header');
		$this->load->view('fincavg',$data);
		$this->load->view('footer');


	}


	}



	


