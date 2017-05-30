<?php
class Buzz_Model extends CI_Model {
	function getData() { //read database
		$query = $this->db->get('buzz'); //mengambil data dari table buzz
		return $query->result_array(); //data disimpan dalam array
	}


	public function getData_id($where="") {
		$data = $this->db->query('select * from buzz ' . $where);
		return $data->result_array();
	}
	function getDataBuzz($where = "", $dabes){
		$data = $this->db->query('select * from '.$dabes ." ".$where);
		return $data -> result_array();
	}
	public function get_buzz_id($id_artikel){ //read database
	    $this->db->where('id_artikel', $id_artikel);
	    $query = $this->db->get('buzz'); //mengambil data dari table barang dimana kode_barang = $kode_barang
	    return $query->row_array(); //data disimpan dalam row
  	}


	public function set_barang($data){
   
    	return $this->db->insert('buzz', $data); //insert ke database 'barang' data yg ada di dalam $data
  	}

	function addData($data) {
		$this->db->insert('buzz', $data);
	}

//	public function UpdateData($id_artikel , $data) {
//		$this->db->where('id_artikel', $id_artikel);
//		return $this->db->update('buzz' , $data);	}

	public function updateData($nama_tabel, $data, $where){
		$res = $this->db->update($nama_tabel, $data, $where);
		return $res;
	}


	public function delete_item($id_artikel){
    	$this->db->where('id_artikel', $id_artikel);
    	return $this->db->delete('buzz');
  }


}
?>