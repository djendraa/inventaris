<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseModel extends CI_Model {

    public function OR(){
        return $this->db->get('orders')->result();
    }

    public function ITEM(){
        return $this->db->get('item')->result();
    }

    public function REQ(){
        return $this->db->get('requests')->result();
    }

    public function STREQ(){
        return $this->db->get('statusrequests')->result();
    }

    public function getData()
    {
        $this->db->select('a.id,a.orders_id,a.item_id,a.requests_id,a.statusrequests_id,a.purchase,a.store,a.price,a.qty,b.orders,c.item,d.requests,e.statusrequests');
        $this->db->from('purchase a');
        $this->db->join('orders b', 'b.id=a.orders_id');
        $this->db->join('item c', 'c.id=a.item_id');
        $this->db->join('requests d', 'd.id=a.requests_id');
        $this->db->join('statusrequests e', 'e.id=a.statusrequests_id');
        $query = $this->db->get();
        return $query->result(); 
    }

    public function tambahData($data)
    {
        $query = $this->db->insert('purchase', $data);
        return $this->db->affected_rows();
    }

    public function select_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('purchase')->result();
    }

    public function updateData($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('purchase', $data);
        return $this->db->affected_rows();
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('purchase');
        
        return $this->db->affected_rows();
    }
    

}

/* End of file PurchaseModel.php */
?>