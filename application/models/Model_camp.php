<?php
class Model_camp extends CI_Model{
    function cari_user($username, $password){
		$query = $this->db->query("select * from user where username='$username' and password= '$password'");
		return $query;
	}
    function tampilcampspot(){
		$query = $this->db->get('spot');
		return $query;
	}
	function tampiluser(){
		$query = $this->db->get('user');
		return $query;
	}
	function tampilbooking(){
		$query = $this->db->get('booking');
		return $query;
	}
	function tampilartikel1($id){
		$this->db->where('id_spot', $id);
		$query = $this->db->get('spot');
		return $query;
	}
	function daftarsimpan(){
		$arraydata = array ('username' => $this->input->post('username'),
							'email' => $this->input->post('email'),
							'password' => md5($this->input->post('password')),
							'level' => $this->input->post('level'));
		$this->db->insert('user',$arraydata);
	}
	
	public function deleteuser($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function bookingsimpan(){
		$arraydata = array ('username' => $this->input->post('username'),
							'nama_spot' => $this->input->post('namaspot'),
							'no_ktp' => $this->input->post('noktp'),
							'alamat_user' => $this->input->post('alamat'),
							'no_telp' => $this->input->post('notelp'),
							'tgl_check_in' => $this->input->post('tglin'),
							'tgl_check_out' => $this->input->post('tglout'));
		$this->db->insert('booking',$arraydata);
	}
	function bookingedit($id){
		$this->db->where('id_booking', $id);
		$query = $this->db->get('booking');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	function campedit($id){
		$this->db->where('id_spot', $id);
		$query = $this->db->get('spot');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	function updatebooking(){
		$id = $this->input->post('hiddenbooking');
		$arraydata = array(	'username' => $this->input->post('username'),
							'nama_spot' => $this->input->post('namaspot'),
							'no_ktp' => $this->input->post('noktp'),
							'alamat_user' => $this->input->post('alamat'),
							'no_telp' => $this->input->post('notelp'),
							'tgl_check_in' => $this->input->post('tglin'),
							'tgl_check_out' => $this->input->post('tglout'));
		$this->db->where('id_booking',$id);
		$this->db->update('booking',$arraydata);
		//echo $this->db->last_query();
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function updatecamp(){
		$id = $this->input->post('hiddencamp');
		$arraydata = array(	'nama_spot' => $this->input->post('namaspot'),
							'lokasi' => $this->input->post('lokasi'),
							'artikel' => $this->input->post('artikel'),
							'foto' => $this->uploadfotospot());
		$this->db->where('id_spot',$id);
		$this->db->update('spot',$arraydata);
		//echo $this->db->last_query();
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deletebooking($id){
		$this->db->where('id_booking', $id);
		$this->db->delete('booking');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deletespot($id){
		$this->db->where('id_spot', $id);
		$this->db->delete('spot');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function campspotsimpan(){
		$arraydata = array(	'nama_spot' => $this->input->post('namaspot'),
							'lokasi' => $this->input->post('lokasi'),
							'artikel' => $this->input->post('artikel'),
							'foto' => $this->uploadfotospot());

		$this->db->insert('spot',$arraydata);
	}
	function uploadfotospot(){
		$config['upload_path'] = './assets/img/fileuploads/';
		$config['allowed_types'] = 'jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload('foto');
		$datafile = $this->upload->data();
		$link = $config['upload_path'].$datafile['file_name'];
		return $link;
	}
}