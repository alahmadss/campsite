<?php
class Model_camp extends CI_Model{
    function cari_user($username, $password){
		$query = $this->db->query("select * from user where username='$username' and password= '$password'");
		return $query;
	}
    function tampilspot(){
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
		$arraydata = array ('id_user'  => $this->input->post('iduser'),
							'username' => $this->input->post('username'),
							'email' => $this->input->post('email'),
							'password' => md5($this->input->post('password')),
							'level' => $this->input->post('level'));
		$this->db->insert('user',$arraydata);
	}
	function edituser($id){
		$this->db->where('id_user', $id);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	function updateuser(){
		$id = $this->input->post('hiddenorder');
		$arraydata = array('no_meja' => $this->input->post('nomeja'),
						   'tanggal_order' => $this->input->post('tanggalorder'),
						   'keterangan' =>$this->input->post('keterangan'));
		$this->db->where('id_order',$id);
		$this->db->insert('t1_order',$arraydata);
		//echo $this->db->last_query();
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
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
}