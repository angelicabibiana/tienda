<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}


	public function index(){
		
		$dato['nombre']= $this->cliente->traer_ultimo();
		$dato['cedula']= $this->cliente->lista();

