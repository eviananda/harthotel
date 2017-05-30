<?php
class Member_Model extends CI_Model {
	function getData() {
		$query = $this->db->get('member');
		return $query->result_array();
	}
	function addData($data) {
		$this->db->insert('member', $data);
	}

	public function delete_member($id_member){
	    $this->db->where('id_member', $id_member);
	    return $this->db->delete('member');
    }

    public function update_member($id_member, $data){
    
	    $this->db->where('id_member', $id_member);
	    return $this->db->update('member', $data); //insert ke database 'barang' data yg ada di dalam $data
	}

	public function getMember($where="") {
		$data = $this->db->query('select * from member ' . $where);
		return $data->result_array();
	}

	public function UpdateData($tabelName , $data, $where) {
		$res = $this->db->update($tabelName , $data, $where);
		return $res;

	}

	function getAll($config, $database){  
        $hasilquery=$this->db->get( $database, $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }


}	
?>