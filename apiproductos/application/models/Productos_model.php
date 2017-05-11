<?php


class Productos_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	function get($id = null)
	{
		if (!is_null($id))
		{
			$query = $this->db->select('*')->from('tbl_productos')->where('id', $id)->order_by('titulo_producto', 'DESC')->get();

			if ($query->num_rows() === 1) 
			{
				return $query->row_array();
			}

			return false;
		}
		else
		{
			$query = $this->db->select('*')->from('tbl_productos')->get();

			if ($query->num_rows() > 0) 
			{
				return $query->result_array();
			}

			return false;
		}
	}

	public function save()
	{
		$data = array(
	         'titulo_producto' => $this->input->post('titulo_producto'),
	         'ds_producto' => $this->input->post('ds_producto'),
	         'foto' => $this->input->post('foto')
	    );

	    $this->db->insert('tbl_productos',$data);

		if ($this->db->affected_rows() === 1)
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}

	public function update($id, $producto)
	{
		$this->db->set($this->_setProduct($producto))->update('tbl_productos');

		if ($this->db->affected_rows() === 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id)->delete('tbl_productos');

		if ($this->db->affected_rows() === 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	private function _setProduct($producto)
	{
		return array(
			'id' => $producto['id'],
			'titulo_producto' => $producto['titulo_producto'],
			'ds_producto' => $producto['ds_producto'],
			'foto' => $producto['foto']
		);
	}
	
}