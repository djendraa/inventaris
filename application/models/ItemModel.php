<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemModel extends CI_Model {

    public function getData()
    {
        $this->db->select('*');
        return $this->db->get('item')->result();
    }

    public function tambahData($data)
    {
        $query = $this->db->insert('item', $data);
        return $this->db->affected_rows();
    }

    public function select_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('item')->result();
    }

    public function updateData($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('item', $data);
        return $this->db->affected_rows();
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('item');
        
        return $this->db->affected_rows();
    }

}

/* End of file ItemModel.php */

?>
