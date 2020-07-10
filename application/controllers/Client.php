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

}

/* End of file Client.php */

?>