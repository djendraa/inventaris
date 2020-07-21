<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Requests extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('RequestsModel','RM');
}

    public function index()
    {
        $a = $this->RM->getData();
        $b = $this->RM->ITEM();
        $c = $this->RM->SUP();
        $data = array(
            'dataRequests' => $a,
            'item' => $b,
            'support' => $c
        );

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar');
        $this->load->view('Template/topbar');
        $this->load->view('Requests/home', $data);
        $this->load->view('Template/footer');
    }

    public function insertData()
    {
        $requests = $this->input->post('requests');
        $item = $this->input->post('item');
        $qty = $this->input->post('qty');
        $support = $this->input->post('support');

        $data = array(
            'requests' => $requests,
            'item_id' => $item,
            'qty' => $qty,
            'support_id' => $support
        );

        $tambah = $this->RM->tambahData($data);
        if($tambah > 0){
            redirect(base_url('Requests'));
        } else {
            echo "
            <script>
            alert('Data gagal di tambahkan!');
            document.location.href = 'Requests';
            </script>
            ";
        }
    }

    public function updateData()
    {
        $id = $this->input->post('requestsID');
        $requests = $this->input->post('requests');
        $item = $this->input->post('item');
        $qty = $this->input->post('qty');
        $support = $this->input->post('support');

        $data = array(
            'requests' => $requests,
            'item_id' => $item,
            'qty' => $qty,
            'support_id' => $support
        );

        $tambah = $this->RM->updateData($data, $id);
        if($tambah > 0){
            redirect(base_url('Requests'));
        } else {
            echo "
            <script>
            alert('Data gagal di update!');
            document.location.href = 'Requests';
            </script>
            ";
        }
    }

    public function deleteData()
    {
        $id = $this->uri->segment('3');
        $delete = $this->RM->deleteData($id);
        if($delete > 0){
            redirect(base_url('Requests'));
            
        }else{
            echo "
            <script>
            alert('Data gagal di hapus!');
            document.location.href = 'Requests';
            </script>
            ";
        }
        
    }

}

/* End of file Requests.php */

?>