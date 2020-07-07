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

}

/* End of file Client.php */

?>