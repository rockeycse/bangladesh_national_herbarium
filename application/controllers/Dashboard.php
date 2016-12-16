<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $admin_email = $this->session->userdata('admin_email');
        $admin_designation = $this->session->userdata('admin_designation');
        if ($admin_email == NULL||$admin_designation=='admin') {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('header/header1');
        $this->load->view('dashboard/dashboard1');
        $this->load->view('footer/footer1');
    }


}
