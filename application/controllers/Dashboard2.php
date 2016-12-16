<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $admin_email = $this->session->userdata('admin_email');

        if ($admin_email == NULL) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('header/header2');
        $this->load->view('dashboard/dashboard1');
        $this->load->view('footer/footer1');
    }


}
