<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstalationModel extends CI_Model {

    public function CL(){
        return $this->db->get('client')->result();
    }

    public function PACK(){
        return $this->db->get('package')->result();
    }

    public function SUP(){
        return $this->db->get('support')->result();
    }

    public function STOR(){
        return $this->db->get('storage')->result();
    }

    public function STINST(){
        return $this->db->get('statusinstalation')->result();
    }

    public function ISTAT(){
        return $this->db->get('itemstatus')->result();
    }

    public function getData() 
    {
        $this->db->select('a.id,a.qty,b.clientname,c.package,d.support');
        $this->db->from('instalation a');
        $this->db->join('client b', 'b.id = a.client_id');
        $this->db->join('package c', 'c.id = a.package_id');
        $this->db->join('support d', 'd.id = a.support_id');
        $this->db->join('storage e', 'e.id = a.storage_id');
        $this->db->join('statusinstalation f', 'f.id = statusinstalation_id');
        $this->db->join('itemstatus g', 'g.id = itemstatus_id');
        $query = $this->db->get();
        return $query->result(); 
    }

    public function tambahData($data)
    {
        $query = $this->db->insert('instalation', $data);
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
        $this->db->update('instalation', $data);
        return $this->db->affected_rows();
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('instalation');
        
        return $this->db->affected_rows();
    }
    

}

/* End of file InstalationModel.php */
?>