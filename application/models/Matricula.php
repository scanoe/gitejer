<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matricula extends CI_Model {

	private $id;
	private $nota_final;

	

	public function __construct($value = null) {
		parent::__construct();
		$this->load->database();
		if ($value != null) {
			if (is_array($value))
				settype($value, 'object');

			if (is_object($value)) {
				$this->id = isset($value->id) ? $value->id : null;
				$this->nota_final = isset($value->nota_final) ? $value->nota_final : null;


			}
		}
	}

	public function __get($key) {
		switch ($key) {
			case 'id':
			case 'nota_final':
			

			return $this->$key;
			default:
			return parent::__get($key);
		}
	}



	public function registrar($curso,$estudiante) {
		$data = [
			'id' => $this->id,
			'nota_final' => $this->nota_final,
			'curso' => $curso,
			'estudiante' => $estudiante
			
		];

		return $this->db->insert('matricula', $data);
	}
		public function obtener_todas() {
		$query = $this->db->get('grangero');

		$result = [];

		foreach ($query->result() as $key=>$grangero) {
			$result[$key] = new grangero($grangero);
		}

		return $result;
	}
	public function obtenerG($id){
		$query = $this->db->get_where('Grangero', ['id' => $id]);

		$result = [];

		foreach ($query->result() as $key=>$grangero) {
			$result[$key] = new grangero($grangero);
		}

		return $result[0];



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
