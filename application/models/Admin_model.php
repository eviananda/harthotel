<?php
class Admin_model extends CI_Model {
	function getData() {
		$query = $this->db->get('admin');
		return $query->result_array();
	}
	function addData($data) {
		$this->db->insert('admin', $data);
	}

	public function delete_member($id_admin){
	    $this->db->where('id_admin', $id_admin);
	    return $this->db->delete('admin');
    }

    public function update_member($id_admin, $data){
    
	    $this->db->where('id_admin', $id_admin);
	    return $this->db->update('admin', $data); //insert ke database 'barang' data yg ada di dalam $data
	}

	public function getAdmin($where="") {
		$data = $this->db->query('select * from admin ' . $where);
		return $data->result_array();
	}

	public function UpdateData($tabelName , $data, $where) {
		$res = $this->db->update($tabelName , $data, $where);
		return $res;

	}

	function cek($username , $password){
		$this->db->where('username',$username);
		$this->db->where('password', $password);
		return $this->db->get('admin');
	}
}	
?>