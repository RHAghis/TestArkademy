<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function getDataProduk()
	{
		$query=$this->db->query("SELECT p.id as id, cas.name as cashier, p.name as product, c.name as category, p.price as price FROM product p JOIN category c ON p.id_category = c.id_category JOIN cashier cas ON p.id_cashier = cas.id_cashier");
		return $query->result();
	}

	public function getDataCategory()
	{
		$this->db->select("*");
		$query = $this->db->get('category');
		return $query->result();
	}

	public function getDataCashier()
	{
		$this->db->select("*");
		$query = $this->db->get('cashier');
		return $query->result();
	}

	public function getDataProductWithId($id)
	{
		$query=$this->db->query("SELECT p.id as id, cas.name as cashier, p.name as product, c.name as category, p.price as price FROM product p JOIN category c ON p.id_category = c.id_category JOIN cashier cas ON p.id_cashier = cas.id_cashier where id = $id");
		return $query->result();
	}

	public function addProd()
	{
		$data = array(
                'id'     		=>  $this->input->post('id'),
				'name'    		=>  $this->input->post('name'),
				'price'   		=>  $this->input->post('price'),
				'id_category'   =>  $this->input->post('id_category'),
				'id_cashier'    =>  $this->input->post('id_cashier')
			);
		$this->db->insert('product', $data);
	}

	public function editProd($id)
	{
		$data = array(
				'id'     		=>  $this->input->post('id'),
				'name'    		=>  $this->input->post('name'),
				'price'   		=>  $this->input->post('price'),
				'id_category'   =>  $this->input->post('id_category'),
				'id_cashier'    =>  $this->input->post('id_cashier')
			);
		$this->db->where('id', $id);
		$this->db->update('product', $data);
	}

	public function delProd($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('product');
	}

	

}

/* End of file M_Home.php */
/* Location: ./application/models/M_Home.php */