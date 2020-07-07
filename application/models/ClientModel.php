<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {

    public function getData()
    {
        $this->db->select('*');
        return $this->db->get('client')->result();
    }

}

/* End of file ClientModel.php */

?>