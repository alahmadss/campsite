<?php
class Panel extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['tspot'] = $this->Model_camp->tampilcampspot()->num_rows();
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
		$this->load->view('panel/userview',$data);
	}
	public function bookingview(){
		$data['tbooking'] = $this->Model_camp->tampilbooking();
		$this->load->view('panel/bookingview',$data);
	}
	public function editbooking($id){
		$data['bookingedit'] = $this->Model_camp->bookingedit($id);
		$data['tcamp'] = $this->Model_camp->tampilcampspot();
		$this->load->view('panel/booking_edit',$data);
	}
	public function editcamp($id){
		$data['campedit'] = $this->Model_camp->campedit($id);
		$this->load->view('panel/campedit',$data);
	}
	public function updatebooking(){
		$result = $this->Model_camp->updatebooking();
		redirect(base_url('panel/bookingview'));
	}
	public function updatecamp(){
		$result = $this->Model_camp->updatecamp();
		redirect(base_url('panel/campspotview'));
	}
	public function deletebooking($id){
		$result = $this->Model_camp->deletebooking($id);
		redirect(base_url('panel/bookingview'));
	}
	public function deletecamp($id){
		$result = $this->Model_camp->deletespot($id);
		redirect(base_url('panel/campspotview'));
	}
	public function deleteuser($id){
		$result = $this->Model_camp->deleteuser($id);
		redirect(base_url('panel/userview'));
	}
	public function campspotview(){
		$data['tspot'] = $this->Model_camp->tampilcampspot()->num_rows();
		$data['tcamp'] = $this->Model_camp->tampilcampspot();
		$this->load->view('panel/campspotview',$data);
	}
	public function addcampspot(){
		$this->load->view('panel/addcampspot');
	}
	public function campspotsimpan(){
		$this->Model_camp->campspotsimpan();
		redirect('panel/campspotview');
	}
}