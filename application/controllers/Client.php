<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('ClientModel','CM');
}

    public function index()
    {
        $d = $this->CM->getData();
        // $d1 = $this->CM->select_by_id($id);
        $data = array(
            'dataClient' => $d
        );

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar');
        $this->load->view('Template/topbar');
        $this->load->view('Client/home', $data);
        $this->load->view('Template/footer');
    }

    public function insertData()
    {
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact');

        $data = array(
            'clientname' => $name,
            'address' => $address,
            'contact' => $contact
        );

        $tambah = $this->CM->tambahData($data);
        if($tambah > 0){
            redirect(base_url('Client'));
        } else {
            echo "
            <script>
            alert('Data gagal di tambahkan!');
            document.location.href = 'Client';
            </script>
            ";
        }
    }

    public function updateData()
    {
        $id = $this->input->post('clientID');
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact');

        $data = array(
            'clientname' => $name,
            'address' => $address,
            'contact' => $contact
        );

        $tambah = $this->CM->updateData($data, $id);
        if($tambah > 0){
            redirect(base_url('Client'));
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
        $delete = $this->CM->deleteData($id);
        if($delete > 0){
            redirect(base_url('client'));
            
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

/* End of file Client.php */

?>