<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Instalation extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('InstalationModel','IM');
}

    public function index()
    {
        $a = $this->IM->getData();
        $b = $this->IM->CL();
        $c = $this->IM->PACK();
        $d = $this->IM->SUP();
        $e = $this->IM->STOR();
        $f = $this->IM->STINST();
        $g = $this->IM->ISTAT();
        $data = array(
            'dataInstalation' => $a,
            'client' => $b,
            'package' => $c,
            'support' => $d,
            'storage' => $e,
            'statusinstalation' => $f,
            'itemstatus' => $g
        );

        $this->load->view('Template/header');
        $this->load->view('Template/sidebar');
        $this->load->view('Template/topbar');
        $this->load->view('Instalation/home', $data);
        $this->load->view('Template/footer');
    }

    public function insertData()
    {
        $purchase = $this->input->post('purchase');
        $orders = $this->input->post('orders');
        $store = $this->input->post('store');
        $item = $this->input->post('item');
        $price = $this->input->post('price');
        $qty = $this->input->post('qty');
        $request = $this->input->post('requests');
        $status = $this->input->post('status');

        $data = array(
            'purchase' => $purchase,
            'orders_id' => $orders,
            'store' => $store,
            'item_id' => $item,
            'price' => $price,
            'qty' => $qty,
            'requests_id' => $request,
            'statusrequests_id' => $status
        );

        $tambah = $this->PM->tambahData($data);
        if($tambah > 0){
            redirect(base_url('Purchase'));
        } else {
            echo "
            <script>
            alert('Data gagal di tambahkan!');
            document.location.href = 'Purchase';
            </script>
            ";
        }
    }

    public function updateData()
    {
        $id = $this->input->post('purchaseID');
        $purchase = $this->input->post('purchase');
        $orders = $this->input->post('orders');
        $store = $this->input->post('store');
        $item = $this->input->post('item');
        $price = $this->input->post('price');
        $qty = $this->input->post('qty');
        $request = $this->input->post('requests');
        $status = $this->input->post('status');

        $data = array(
            'purchase' => $purchase,
            'orders_id' => $orders,
            'store' => $store,
            'item_id' => $item,
            'price' => $price,
            'qty' => $qty,
            'requests_id' => $request,
            'statusrequests_id' => $status
        );

        $tambah = $this->PM->updateData($data, $id);
        if($tambah > 0){
            redirect(base_url('Purchase'));
        } else {
            echo "
            <script>
            alert('Data gagal di update!');
            document.location.href = 'Purchase';
            </script>
            ";
        }
    }

    public function deleteData()
    {
        $id = $this->uri->segment('3');
        $delete = $this->PM->deleteData($id);
        if($delete > 0){
            redirect(base_url('Purchase'));
            
        }else{
            echo "
            <script>
            alert('Data gagal di hapus!');
            document.location.href = 'Purchase';
            </script>
            ";
        }
        
    }

}

/* End of file Instalation.php */

?>