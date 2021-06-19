<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//$this->load->view('admin/view_login');
		$this->load->view('adminlte/view_login');
	}

	function autentikasi_user(){
		$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		echo $username."<br>";
		$password = md5($password);
		echo $password;


		$cek_user = $this->model_camp->cari_user($username, $password);

		if ($cek_user->num_rows() > 0){
			$data = $cek_user->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['level'] == '0'){
				$this->session->set_userdata('level','0');
				$this->session->set_userdata('ses_username',$data['username']);
				$this->session->set_userdata('ses_password', $data['password']);
				redirect('panel');
			}elseif ($data['level'] == '1') {
				$this->session->set_userdata('level','1');
				$this->session->set_userdata('ses_username',$data['username']);
				$this->session->set_userdata('ses_password', $data['password']);
				redirect('panel');
			}
		}else{
			redirect('login');
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}