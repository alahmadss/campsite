<?php
class Main extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['listcampspot'] = $this->Model_camp->tampilspot();
		$this->load->view('lp/mainview',$data);
	}

}