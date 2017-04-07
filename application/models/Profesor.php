<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor extends CI_Model {

	private $cedula;
	private $nombre;
	private $fecha_nacimiento;
	private $lugar_nacimiento;
	private $titulo;
	private $departamento;
	
	
	

	public function __construct($value = null) {
		parent::__construct();
		$this->load->database();
		if ($value != null) {
			if (is_array($value))
				settype($value, 'object');

			if (is_object($value)) {
				$this->cedula = isset($value->cedula) ? $value->cedula : null;
				$this->nombre = isset($value->nombre) ? $value->nombre : null;
				$this->fecha_nacimiento = isset($value->fecha_nacimiento) ? $value->fecha_nacimiento : null;
				$this->lugar_nacimiento = isset($value->lugar_nacimiento) ? $value->lugar_nacimiento : null;
				$this->titulo = isset($value->titulo) ? $value->titulo : null;
				$this->departamento = isset($value->departamento) ? $value->departamento : null;

			}
		}
	}

	public function __get($key) {
		switch ($key) {
			case 'cedula':
			case 'nombre':
			case 'fecha_nacimiento':
			case 'lugar_nacimiento':
			case 'titulo':
			case 'departamento':


			return $this->$key;
			default:
			return parent::__get($key);
		}
	}



	public function registrar() {
		$data = [
			'cedula' => $this->cedula,
			'nombre' => $this->nombre,
			'fecha_nacimiento' => $this->fecha_nacimiento,
			'lugar_nacimiento' => $this->lugar_nacimiento,
			'titulo' => $this->titulo,
			'departamento' => $this->departamento
			
		];

		return $this->db->insert('profesor', $data);
	}
		public function obtener_todas() {
		$query = $this->db->get('profesor');

		$result = [];

		foreach ($query->result() as $key=>$profesor) {
			$result[$key] = new Profesor($profesor);
		}

		return $result;
	}
	public function FiltrarE($edad){
		$query = $this->db->get_where('estudiante', "edad >=".$edad);

		$result = [];

		foreach ($query->result() as $key=>$estudiante) {
			$result[$key] = new estudiante($estudiante);
		}

		return $result;



	}

		public function maxgallinas(){
		$query=$this->db->query("select * from (select grangero.nombre as nombre , SUM(finca.cantidad_gallinas) as suma from grangero INNER JOIN finca on finca.grangero=grangero.id GROUP by grangero.nombre) as j order by suma DESC LIMIT 1");
		$result=$query->result();

		return $result;
	

	}
			public function maxvacas(){
		$query=$this->db->query("select * from (select grangero.nombre as nombre , SUM(finca.cantidad_vacas) as suma from grangero INNER JOIN finca on finca.grangero=grangero.id GROUP by grangero.nombre) as j order by suma DESC LIMIT 1");
		$result=$query->result();

		return $result;
	

	}
	

}
