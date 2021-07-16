<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamp extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Lok_Model');
		// $this->load->model('Cir_Model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('index');
		$this->load->view('template/foot');
	}
	public function map2()
	{	
		$data['data'] = $this->Lok_Model->getloc();
		$this->load->view('template/head');
		$this->load->view('index');
		$this->load->view('template/foot2',$data);
	}

	public function form()
	{	
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('coord','coord','required');
	
		if ($this->form_validation->run()==false){
			$this->load->view('template/head');
			$this->load->view('form');
			$this->load->view('template/foot');
		}else{
			$this->Lok_Model->tambahDatalokasi();
			redirect('Tamp/form');
		}
	}

	public function form1()
	{	
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('coord','coord','required');
		$this->form_validation->set_rules('size','size','required');
		$this->form_validation->set_rules('opacity','opacity','required');
		$this->form_validation->set_rules('ring','ring','required');
		$this->form_validation->set_rules('fill','fill','required');
	
		if ($this->form_validation->run()==false){
			$this->load->view('template/head');
			$this->load->view('form2');
			$this->load->view('template/foot');
		}else{
			$this->Lok_Model->tambahDatalokasi();
			redirect('Tamp/form');
		}
	}

	public function form3()
	{	

		$data['data'] = $this->Lok_Model->getloc();
	
	
			$this->load->view('template/head');
			$this->load->view('form3',$data);
			$this->load->view('template/foot');
	}

	public function tambah_data(){
		$data['data'] = $this->Lok_Model->getloc();
		$this->load->view('template/head');
		
		$this->load->view('Tamp/form',$data);
		$this->load->view('template/foot');
	}

	public function hapus_data($id){
		$this->Lok_Model->hapusDatalokasi($id);
		redirect('Tamp/form3');

		$this->load->view('template/head');
		$this->load->view('template/foot');
	}

}
