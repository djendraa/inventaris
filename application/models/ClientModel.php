<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {

    public function getData()
    {
        $this->db->select('*');
        return $this->db->get('client')->result();
    }

    public function tambahData($data)
    {
        $query = $this->db->insert('client', $data);
        return $this->db->affected_rows();
    }

}

/* End of file ClientModel.php */

?>