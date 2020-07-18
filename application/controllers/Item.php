<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('ItemModel','IM');
}

    public function index()
    {
        $d = $this->IM->getData();
        $data = array(
            'dataItem' => $d
        );

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar');
        $this->load->view('Template/topbar');
        $this->load->view('Item/home', $data);
        $this->load->view('Template/footer');
    }

    public function insertData()
    {
        $item = $this->input->post('item');

        $data = array(
            'item' => $item
        );

        $tambah = $this->IM->tambahData($data);
        if($tambah > 0){
            redirect(base_url('Item'));
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

/* End of file Item.php */

?>