<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StorageModel extends CI_Model {

    public function ITEM(){
        return $this->db->get('item')->result();
    }

    public function TSTG(){
        return $this->db->get('tipestorage')->result();
    }

    public function PCS(){
        return $this->db->get('purchase')->result();
    }

    public function getData()
    {
        $this->db->select('a.id,a.qty,b.item,c.tipestorage,d.purchase');
        $this->db->from('storage a');
        $this->db->join('item b', 'b.id = a.item_id');
        $this->db->join('tipestorage c', 'c.id = a.tipestorage_id');
        $this->db->join('purchase d', 'd.id = a.purchase_id');
        $query = $this->db->get();
        return $query->result(); 
    }

    public function tambahData($data)
    {
        $query = $this->db->insert('storage', $data);
        return $this->db->affected_rows();
    }

    public function select_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('storage')->result();
    }

    public function updateData($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('storage', $data);
        return $this->db->affected_rows();
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('storage');
        
        return $this->db->affected_rows();
    }
    

}

/* End of file StorageModel.php */
?>