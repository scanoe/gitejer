<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curso extends CI_Model {

	private $id;
	private $nombre;
	private $facultad;


	

	public function __construct($value = null) {
		parent::__construct();
		$this->load->database();

		if ($value != null) {
			if (is_array($value))
				settype($value, 'object');

			if (is_object($value)) {
				$this->id = isset($value->id)? $value->id : null;
				$this->facultad = isset($value->facultad)? $value->facultad : null;
				$this->nombre = isset($value->nombre)? $value->nombre : null;
			
			}
		}
	}

	public function __get($key) {
		switch ($key) {
			case 'id':
			case 'nombre':
			case 'facultad':			
				return $this->$key;
			default:
				return parent::__get($key);
		}
	}

	public function registrar() {
		$data = [
			'id' => $this->id,
			'nombre' => $this->nombre,
			'facultad' => $this->facultad

		];

		return $this->db->insert('curso', $data);
	}
		public function obtenerG($id){
		$query = $this->db->get_where('finca', ['Grangero' => $id]);

		$result = [];

		foreach ($query->result() as $key=>$finca) {
			$result[$key] = new finca($finca);
		}

		return $result;



	}
	public function obtenerdu(){
		$this->load->model('Grangero');
		$query1=$this->db->get_where('finca', ['id' => $this->id]);
		$result1=$query1->result();
		
		$query2=$this->db->get_where('grangero', ['id' => $result1[0]->grangero]);
		$result = [];

		foreach ($query2->result() as $key=>$finca) {
			$result[$key] = new Grangero($finca);
		}

		return $result[0];

		


	}
			public function obtener_todas() {
		$query = $this->db->get('curso');

		$result = [];

		foreach ($query->result() as $key=>$curso) {
			$result[$key] = new curso($curso);
		}

		return $result;
	}
	public function borrar($id){
		$this->db->delete('finca',['id'=> $id]);


	}
	public function fincavg(){
		$query=$this->db->query('SELECT finca.nombre FROM finca where finca.cantidad_vacas<5 and finca.cantidad_gallinas>3');
		$result=$query->result();

		return $result;

	}




}