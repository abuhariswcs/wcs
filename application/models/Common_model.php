<?php

class Common_model extends CI_Model{

    public function getpost(){
        $queries=$this->db->get('tbl_post');
        if($queries->num_rows()> 0){
            return $queries->result();
        }
    }
    public function addpost($data){

        $this->db->set($data);
        $this->db->insert('tbl_post',$data);
    }
    public function edit($data,$id){
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->update('tbl_post', $data);
    }

    public function deleteRecord($id) {

        $this->db->where('id', $id);
        $this->db->delete('tbl_post');

    }
    public function update_view($id){
        $queries=$this->db->get_where('tbl_post',$id);
        if($queries->num_rows()> 0){
            return $queries->result();
        }
    }
}
