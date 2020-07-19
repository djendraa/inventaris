<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('PurchaseModel','PM');
}

    public function index()
    {
        $a = $this->PM->getData();
        $b = $this->PM->OR();
        $c = $this->PM->ITEM();
        $d = $this->PM->REQ();
        $e = $this->PM->STREQ();
        $data = array(
            'dataPurchase' => $a,
            'orders' => $b,
            'item' => $c,
            'requests' => $d,
            'statusreq' => $e
        );

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar');
        $this->load->view('Template/topbar');
        $this->load->view('Purchase/home', $data);
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

/* End of file Purchase.php */

?>