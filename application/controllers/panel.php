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


	public function adduser(){
		$this->load->view('panel/adduser');
	}
	public function usersimpan(){
		$this->Model_camp->daftarsimpan();
		redirect(base_url('panel/userview'));
	}
	public function userview(){
		$data['tuser'] = $this->Model_camp->tampiluser();
		$this->load->view('panel/user');
	}
	public function edituserview($id){
		$data['useredit'] = $this->Model_camp->edituser($id);
		$this->load->view('panel/useredit');
	}
	public function updateuser(){
		$result = $this->Model_camp->updateuser();
		redirect(base_url('panel/userview'));
	}
	public function deleteuser($id){
		$result = $this->Model_camp->deleteuser($id);
		redirect(base_url('panel/userview'));
	}
}