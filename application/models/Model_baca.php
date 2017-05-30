<?php
 class Model_baca extends ci_model
    {
    function tampil()
    {
    $query=$this->db->get('buzz');
    if($query ->num_rows()>0)
    {
    return $query->result();
    }
    else
    {
    return array();
    }
    }

    function per_id($id)
    {
    $this->db->where('id_artikel',$id);
    $query=$this->db->get('buzz');
    return $query->result();
    }

function updateprupil($id)
    {
    $this->db->where('id_member',$id);
    $query=$this->db->get('member');
    return $query->result_array();
    }

    
    public function updateDataPro($nama_tabel, $data, $where){
        $res = $this->db->update($nama_tabel, $data, $where);
        return $res;
    }
    }