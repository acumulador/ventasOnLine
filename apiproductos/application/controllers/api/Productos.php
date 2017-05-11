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
		$productos = $this->productos_model->get();

		if (!is_null($productos)) 
		{
			$this->response(array('productos' => $productos), 200);
		}
		else
		{
			$this->response(array('error' => 'No se encuentran productos en la base de datos...'), 404);
		}
		
	}

	public function find_get($id)
	{
		//Un producto con id
		if (!$id) 
		{
			$this->response(array('error' => null), 404);
		}

		$producto = $this->productos_model->get($id);

		if (!is_null($producto))
		{
			$this->response(array('producto' => $producto), 200);
		}
		else
		{
			$this->response(array('error' => 'Producto no encontrado...'), 404);
		}
	}

	public function index_post()
	{
		//Crea		
		$id = $this->productos_model->save();

		if (!is_null($id)) 
		{
			$this->response(array('response' => $id), 200);
		}
		else
		{
			$this->response(array('error' => 'Error en el servidor, No se agrego el producto...'), 404);
		}
	}

	public function index_put($id)
	{
		//Actualiza
		if (!($this->post('producto')) || !$id) 
		{
			$this->response(array('error' => null), 404);
		}

		$update = $this->productos_model->update($id, $this->post('producto'));

		if (!is_null($update)) 
		{
			$this->respondse(array('response' => 'Producto actualizado correctamente'), 200);
		}
		else
		{
			$this->response(array('error' => 'Error en el servidor, No se actualizó el producto...'), 404);
		}
	}

	public function index_delete($id)
	{
		//Elimina
		if (!$id) 
		{
			$this->response(array('error' => null), 404);
		}

		$del = $this->productos_model->delete($id);

		if (!is_null($del)) 
		{
			$this->respondse(array('response' => 'Producto eliminado correctamente'), 200);
		}
		else
		{
			$this->response(array('error' => 'Error en el servidor, No se eliminó el producto...'), 404);
		}
	}
}
