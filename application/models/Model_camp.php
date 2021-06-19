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
}