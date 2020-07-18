<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Storage extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('StorageModel','SM');
}

    public function index()
    {
        $a = $this->SM->getData();
        $b = $this->SM->ITEM();
        $c = $this->SM->TSTG();
        $d = $this->SM->PCS();
        $data = array(
            'dataStorage' => $a,
            'item' => $b,
            'tipestorage' => $c,
            'purchase' => $d
        );

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar');
        $this->load->view('Template/topbar');
        $this->load->view('Storage/home', $data);
        $this->load->view('Template/footer');
    }

    public function insertData()
    {
        $item = $this->input->post('item');
        $storage = $this->input->post('storage');
        $purchase = $this->input->post('purchase');
        $qty = $this->input->post('qty');


        $data = array(
            'id' => $item,
            'id' => $storage,
            'id' => $purchase,
            'qty' => $qty
        );

        $tambah = $this->SM->tambahData($data);
        if($tambah > 0){
            redirect(base_url('Storage'));
        } else {
            echo "
            <script>
            alert('Data gagal di tambahkan!');
            document.location.href = 'Item';
            </script>
            ";
        }
    }

    public function updateData()
    {
        $id = $this->input->post('itemID');
        $item = $this->input->post('item');

        $data = array(
            'item' => $item
        );

        $tambah = $this->IM->updateData($data, $id);
        if($tambah > 0){
            redirect(base_url('item'));
        } else {
            echo "
            <script>
            alert('Data gagal di update!');
            document.location.href = 'index';
            </script>
            ";
        }
    }

    public function deleteData()
    {
        $id = $this->uri->segment('3');
        $delete = $this->IM->deleteData($id);
        if($delete > 0){
            redirect(base_url('item'));
            
        }else{
            echo "
            <script>
            alert('Data gagal di hapus!');
            document.location.href = 'index';
            </script>
            ";
        }
        
    }

}

/* End of file Storage.php */

?>