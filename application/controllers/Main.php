<?php
class Main extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['tcamp'] = $this->Model_camp->tampilcampspot();
		$this->load->view('lp/mainview',$data);
	}

	public function daftar(){
		$this->load->view('lp/daftar');
	}

	public function daftarsimpan(){
		$this->Model_camp->daftarsimpan();
		redirect('login');
	}
	public function booking(){
		$data['tcamp'] = $this->Model_camp->tampilcampspot();
		$this->load->view('lp/booking',$data);
	}
	public function bookingsimpan(){
		$this->Model_camp->bookingsimpan();
		redirect('main');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('main'));
	}
}