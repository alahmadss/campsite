<?php
class Panel extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['tspot'] = $this->Model_camp->tampilspot()->num_rows();
        $data['tuser'] = $this->Model_camp->tampiluser()->num_rows();
        $data['tbooking'] = $this->Model_camp->tampilbooking()->num_rows();
		$this->load->view('panel/adminpage',$data);
	}

	public function asasa
}