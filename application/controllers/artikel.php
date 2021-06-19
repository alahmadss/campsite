<?php
class Artikel extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	function tampilartikel(){
		$id = $this->uri->segment(3);
		$data['tartikel'] = $this->model_camp->tampilartikel1($id);
		$this->load->view('lp/artikel.php',$data);
	}
}