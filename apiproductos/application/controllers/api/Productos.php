<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/Rest_controller.php';

class Productos extends Rest_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('productos_model');
	}
	
	public function index_get()
	{
		//Todos los productos
	}

	public function find_get($id)
	{
		//Un producto con id
	}

	public function index_post()
	{
		//Crea
	}

	public function index_put($id)
	{
		//Actualiza
	}

	public function index_delete($id)
	{
		//Elimina
	}
}
