<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestsModel extends CI_Model {

    public function ITEM(){
        return $this->db->get('item')->result();
    }

    public function SUP(){
        return $this->db->get('support')->result();
    }

    public function getData()
    {
        $this->db->select('a.id,a.requests,a.qty,b.item,c.support');
        $this->db->from('requests a');
        $this->db->join('item b', 'b.id=a.item_id');
        $this->db->join('support c', 'c.id=a.support_id');
        $query = $this->db->get();
        return $query->result(); 
    }

    public function tambahData($data)
    {
        $query = $this->db->insert('requests', $data);
        return $this->db->affected_rows();
    }

    public function updateData($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('requests', $data);
        return $this->db->affected_rows();
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('requests');
        
        return $this->db->affected_rows();
    }
    

}

/* End of file RequestsModel.php */
?>