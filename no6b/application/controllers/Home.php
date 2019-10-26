<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Home');
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('viewHome');
	}

	public function addProduct()
	{
		$this->session->set_flashdata('flash','Insert Data Berhasil');
        redirect('Home');	
	}

	public function editProduct()
	{
		$this->session->set_flashdata('flash','Update Data Berhasil');
		$this->load->view('viewEditProduk');
	}

	public function delProduct($id)
	{
		$this->M_Home->delProd($id);
        $this->session->set_flashdata('flash','Hapus Data Berhasil');
        redirect('Home', 'refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */