<?php
class Artikel extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['tartikel'] = $this->Model_camp->tampilartikel();
	}
	function tampilartikel(){
		$id = $this->uri->segment(3);
		$data['tartikel1'] = $this->Model_camp->tampilartikel1($id);
		$this->load->view('lp/artikel.php',$data);
	}
}