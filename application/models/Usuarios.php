<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes1 extends CI_Model {

	public function __construct() {

	}


	public function insertar($dato) {
		return $this->db->insert('cliente', $dato);
	}

	
}
