<?php

class Model_produk extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_produk');
    }
    public function tambah_produk($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_produk($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table,$data);
    }

    public function find($id)
    {
        $result = $this->db->where('id_prd', $id)
                           ->limit(1)
                           ->get('tb_produk');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_prd($id_prd)
    {
        $result = $this->db->where('id_prd',$id_prd)->get('tb_produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
}