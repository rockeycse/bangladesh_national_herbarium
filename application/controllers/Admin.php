<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $admin_email=$this->session->userdata('admin_email');
        if ($admin_email==NULL)
        {
            redirect('login','refresh');
        }

    }
    public function index()
    {
        $this->load->view('header/header2');
        $this->load->view('admin/add_admin');
        $this->load->view('footer/footer1');
    }

    public function add_admin()
    {
        $this->load->view('header/header2');
        $this->load->view('admin/add_admin');
        $this->load->view('footer/footer1');
    }

    public function master_admin()
    {
        $this->load->view('header/header2');
        $this->load->view('admin/add_admin');
        $this->load->view('footer/footer1');
    }

    public function user_profile()
    {
        $this->load->view('header/header2');
        $this->load->view('admin/admin_profile');
        $this->load->view('footer/footer1');
    }

    public function admin_list()
    {
        $this->load->view('header/header2');
        $this->load->view('admin/admin_profile');
        $this->load->view('footer/footer1');
    }

    public function search_tree()
    {
        $this->load->view('header/header2');
        $this->load->view('search/search');
        $this->load->view('footer/footer1');
}

}
