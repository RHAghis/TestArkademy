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
		$data["prod_list"] = $this->M_Home->getDataProduk();
		$this->load->view('viewHome',$data);
	}

	public function addProduct()
	{
		if(isset($_POST['submit'])){
            
            $insert =  $this->M_Home->addProd();
            $this->session->set_flashdata('flash','Insert Data Berhasil');
            redirect('Home');
        }else{
        	$data["cat_list"] = $this->M_Home->getDataCategory();
        	$data["cash_list"] = $this->M_Home->getDataCashier();
        	$this->load->view('viewAddProduk', $data);
        }	
	}

	public function editProduct($id)
	{
		if(isset($_POST['submit'])){
            
            $update =  $this->M_Home->editProd($id);
            $this->session->set_flashdata('flash','Update Data Berhasil');
            redirect('Home');
        }else{
			$data['prod_list'] = $this->M_Home->getDataProductWithId($id);
			$data["cat_list"] = $this->M_Home->getDataCategory();
        	$data["cash_list"] = $this->M_Home->getDataCashier();
			$this->load->view('viewEditProduk', $data);
        }
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