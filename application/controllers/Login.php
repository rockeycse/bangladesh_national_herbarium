<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        

    }
    public function index()
    {
        $this->load->view('admin/admin_login');
    }

    public function check_login()
    {
        $admin_email_address = $this->input->post('admin_email', true);
        $admin_password = $this->input->post('admin_password', true);

        $result = $this->admin_login_model->check_login_info($admin_email_address, $admin_password);
        $sdata=array();

        if ($result) {

            $sdata['admin_email']=$result->admin_email;
            $sdata['admin_id']=$result->admin_id;
            $sdata['admin_name']=$result->admin_name;
            $sdata['admin_password']=$result->admin_password;
            $sdata['admin_designation']=$result->admin_designation;
            $this->session->set_userdata($sdata);
            if ($result->admin_designation=='master_admin') {
                redirect('super_admin');
            }
            elseif ($result->admin_designation=='admin')
            {
                redirect('Dashboard2');
            }
        }
        else
        {
            $data['exception']=" User id or password is invalid";
            $this->session->set_userdata($data);
            redirect('login');
        }
    }

    public function master_admin()
    {
        $this->load->view('header/header1');
        $this->load->view('admin/add_admin');
        $this->load->view('footer/footer1');
    }

    public function user_profile()
    {
        $this->load->view('header/header1');
        $this->load->view('admin/admin_profile');
        $this->load->view('footer/footer1');
    }


}
