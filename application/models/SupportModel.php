<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupportModel extends CI_Model {

    public function JK(){
        return $this->db->get('tbljeniskelamin')->result();
    }

    public function USR(){
        return $this->db->get('user')->result();
    }

    public function getData(){
        $this->db->select('*');
        $this->db->join('tbljeniskelamin', 'tblanggota.idJenisKelamin = tbljeniskelamin.idJenisKelamin');
        $this->db->join('user', 'tblanggota.idUser = user.idUser');
        $query = $this->db->get_where('tblanggota', array(
            'status' => 1
        ));
        return $query->result();
    }

    public function tambahData($data){
        $query = $this->db->insert('tblanggota', $data);
        return $this->db->affected_rows();
    }

    public function select_by_id($id){
        $this->db->where('idAnggota', $id);
        return $this->db->get('tblanggota')->result();
    }

    public function updateData($data,$id){
        $this->db->where('idAnggota', $id);
        $this->db->update('tblanggota', $data);
        return $this->db->affected_rows();
    }

    public function gantiStatus($data,$id){
        $this->db->where('idAnggota', $id);
        $this->db->update('tblanggota', $data);
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
