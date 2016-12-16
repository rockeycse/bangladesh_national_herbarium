<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller
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
        $this->load->view('admin/admin_master');
        $this->load->view('footer/footer1');
   }

    public function logout()
    {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_email');
        $this->session->unset_userdata('admin_designation');
        $sdata['message']="You are successfully logged out.....!";
        $this->session->set_userdata($sdata);
        redirect('login', 'refresh');
    }

}
