<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupportModel extends CI_Model {

    public function getData()
    {
        $this->db->select('*');
        return $this->db->get('support')->result();
    }

    public function tambahData($data)
    {
        $query = $this->db->insert('support', $data);
        return $this->db->affected_rows();
    }

    public function select_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('support')->result();
    }

    public function updateData($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('support', $data);
        return $this->db->affected_rows();
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('support');
        
        return $this->db->affected_rows();
    }

}

/* End of file SupportModel.php */

?>
