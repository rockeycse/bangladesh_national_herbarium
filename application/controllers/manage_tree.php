<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_tree extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $admin_email = $this->session->userdata('admin_email');
        $admin_designation = $this->session->userdata('admin_designation');
        if ($admin_email == NULL || $admin_designation == 'admin') {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('header/header1');
        $this->load->view('dashboard/insert_new_tree');
        $this->load->view('footer/footer1');
    }

    public function change_password_form()
    {
        $this->load->view('header/header1');
        $this->load->view('dashboard/change_password');
        $this->load->view('footer/footer1');
    }

    public function change_password()
    {
        $this->form_validation->set_rules('current_password', 'current password', 'required');
        $this->form_validation->set_rules('new_password', 'new password', 'required');
        $this->form_validation->set_rules('confirm_new_password', 'confirm new password', 'required');
        $this->form_validation->set_rules('confirm_new_password2', 'confirm new password again', 'required');

        if ($this->form_validation->run() == FALSE) {


            $this->load->view('header/header1');
            $this->load->view('dashboard/change_password');
            $this->load->view('footer/footer1');

        } else {


                $current_password = $this->input->post('current_password');
                $new_password = $this->input->post('new_password');
                $confirm_new_password = $this->input->post('confirm_new_password');
                $confirm_new_password2 = $this->input->post('confirm_new_password2');

            $result = $this->Tree_model->change_password($current_password,$new_password,$confirm_new_password,$confirm_new_password2);
            if ($result == true) {

                redirect('login');
            }
            else
            {
                redirect('manage_tree/change_password_form');
            }
        }

    }

    public function tree_list()
    {
        $this->load->model('Tree_model');

        $family_name = $this->uri->segment(3);
        $genus_name = $this->uri->segment(4);
        $species_name = $this->uri->segment(5);
        $local_name = $this->uri->segment(6);

        $family_name = 'default';
        $genus_name = 'default';
        $species_name = 'default';
        $local_name = 'default';


        // echo "<br>Search_Project Called with $union_pouroshova/$economical_year/$implementar/$sector";

        $data['title'] = 'Search Result';


        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";

        $args = array();
        $args['family_name'] = 'default';
        $args['genus_name'] = 'default';
        $args['species_name'] = 'default';
        $args['local_name'] = 'default';

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("manage_tree/tree_list/$family_name/$genus_name/$species_name/$local_name/");
        $config['total_rows'] = $this->search_model->search_result_count1();
        $config['per_page'] = 40;
        $config['uri_segment'] = 7;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

        $data['search_result'] = $this->Tree_model->get_all_data1($config['per_page'], $data['page']);

        $data['links'] = $this->pagination->create_links();


        $this->load->view('header/header1');
        $this->load->view('dashboard/list_of_tree', $data);
        $this->load->view('footer/footer1');

    }

    public function view_tree()
    {

        $this->load->view('header/header1');
        $this->load->view('dashboard/view_tree');
        $this->load->view('footer/footer1');
    }

    public function view_tree1($id)
    {
        $this->db->from('tbl_common_character');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data['mz'] = $results;

        $this->db->from('tbl_taxonomic_character');
        $this->db->where('reference_of_common', $id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data1['key_data'] = $results;


        $this->db->from('tbl_local_name');
        $this->db->where('common_reference', $id);
        $query = $this->db->get();
        $data['local_name_data'] = $query->result();
//
//       print_r($id);
//        die();


//      $result=$this->tree_model->get_tree_data($id);
        $this->load->view('header/header1', $data1);
        $this->load->view('dashboard/view_tree', $data);
        $this->load->view('dashboard/view_key_character', $data1);

        $this->load->view('footer/footer1');
    }

    public function do_upload($id)
    {

        //       $up_path = "uploads/";

        $config['upload_path'] = './uploads/';
        // $config['upload_path'] = $up_path;
        $config['allowed_types'] = 'gif|jpg|png';
        //   $config['file_name'] = md5($this->input->post('photographs1'));

        //  $config['max_size']	= '1000';
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';


        // echo "error";

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $image_name_for_db = array();

        for ($i = 1; $i <= 5; $i++) {

            $input_name = "photographs" . $i;

            //$result = $this->load->Tree_model->get_img_path($input_name);
            $_POST["photographs" . $i] = $this->Tree_model->get_img_path($input_name);

            if (!$this->upload->do_upload($input_name)) {
                // $error = array('error' => $this->uploads->display_errors());
                // echo "error";
            } else {

                if (file_exists(FCPATH . "uploads/" . $_POST["photographs" . $i])) {
                    unlink(FCPATH . "uploads/" . $_POST["photographs" . $i]);
                }

                $imageData = $this->upload->data();

                $image_name_for_db[$i] = $imageData["file_name"];

                $_POST["photographs" . $i] = $image_name_for_db[$i];

            }

        }

//        echo $image_name_for_db[1];
//        echo $image_name_for_db[2];
//        echo $image_name_for_db[3];
//        echo $image_name_for_db[4];
//        echo $image_name_for_db[5];
//        die();


        return $image_name_for_db;
    }

    public function do_upload_insert()
    {

        //       $up_path = "uploads/";

        $config['upload_path'] = './uploads/';
        // $config['upload_path'] = $up_path;
        $config['allowed_types'] = 'gif|jpg|png';
        //   $config['file_name'] = md5($this->input->post('photographs1'));

        //  $config['max_size']	= '1000';
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';


        // echo "error";

        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $image_name_for_db = array();
        for ($i = 1; $i <= 6; $i++) {
            $input_name = "photographs" . $i;
            $image_name_for_db[$i] = 'N/A';

            if (!$this->upload->do_upload($input_name)) {
                // $error = array('error' => $this->uploads->display_errors());
                // echo "error";
            } else {
                $imageData = $this->upload->data();
                $image_name_for_db[$i] = $imageData["file_name"];
            }

        }

        return $image_name_for_db;
    }


//    function do_upload()
//    {
//
//
//        $config['upload_path'] = './uploads/';
//        $config['allowed_types'] = 'gif|jpg|png|txt';
//       // $config['max_size']    = '1024';
////        $config['max_width']  = '1024';
//        $config['overwrite']  = FALSE;
//        $config['remove_spaces']  = TRUE;
//        $this->load->library('upload', $config);
//        if (!$this->upload->do_upload('filename'))
//        {
//            $error = array('error' => $this->upload->display_errors());
//            $this->load->view('upload_form', $error);
//
//        }
//
//
//
//        else
//        {
//            $data=$this->upload->data();
//            $dataa=array(
//                'class_name'=>$this->input->post('class_name'),
//                'routine_category'=>$this->input->post('routine_category'),
//
//                'filename'=>$data['file_name'],
//
//            );
//
//            $data = array('upload_data' =>$this->upload->data());
//            $this->upload_model->save_upload($dataa);
//
//            $this->load->view('upload_form');
//        }
//    }


    public function insert_tree_data()
    {
        $image_name_for_db = $this->do_upload_insert();

        $this->form_validation->set_rules('genus', 'genus', 'required');
        $this->form_validation->set_rules('species', 'species', 'required');
        $this->form_validation->set_rules('family_name', 'family_name', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('flowering_period', 'flowering_period', 'required');


//        $this->form_validation->set_rules('habit', 'habit', 'required');
//        $this->form_validation->set_rules('distribution', 'distribution', 'required');


        //       // $this->form_validation->set_rules('local_name', 'local_name', 'required');
        //        $this->form_validation->set_rules('english_name', 'english_name', 'required');

        if ($this->form_validation->run() == FALSE) {
            //  redirect('manage_tree');

            $this->load->view('header/header1');
            $this->load->view('dashboard/insert_new_tree');
            $this->load->view('footer/footer1');


        } else {

            //       'id' => $this->input->post(''),
            $comon_data = array(

                'genus' => $this->input->post('genus'),
                'species' => $this->input->post('species'),
                'author' => $this->input->post('author'),
                'family_name' => $this->input->post('family_name'),
                'synonyms' => $this->input->post('synonyms'),

                'english_name' => $this->input->post('english_name'),
                'description' => $this->input->post('description'),
                'flowering_period' => $this->input->post('flowering_period'),
                'habit' => $this->input->post('habit'),
                'distribution' => $this->input->post('distribution'),
                'uses' => $this->input->post('uses'),
                'photographs1_link' => $this->input->post('photographs1_link'),
                'photographs2_link' => $this->input->post('photographs2_link'),
                'photographs3_link' => $this->input->post('photographs3_link'),
                'photographs4_link' => $this->input->post('photographs4_link'),
                'photographs5_link' => $this->input->post('photographs5_link'),

                'photographs1' => $image_name_for_db[1],//$this->input->post('photographs1'),
                'photographs2' => $image_name_for_db[2],
                'photographs3' => $image_name_for_db[3],
                'photographs4' => $image_name_for_db[4],
                'photographs5' => $image_name_for_db[5]
            );
//            $this->load->model('tree_model');
            $result = $this->Tree_model->insert_tree($comon_data);
            if ($result == true) {
                $this->session->set_flashdata('msg', "Data has been submitted successfully.");
                redirect('manage_tree');
            }
        }
    }

    public function remove_photo1($id)
    {
        $this->db->from('tbl_common_character');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $results = $query->result();

        foreach ($results as $r) {
            if (!$r->photographs1 == NULL) {
                unlink(FCPATH . "uploads/" . $r->photographs1);
            }
            if (!$r->photographs2 == NULL) {
                unlink(FCPATH . "uploads/" . $r->photographs2);
            }
            if (!$r->photographs3 == NULL) {
                unlink(FCPATH . "uploads/" . $r->photographs3);
            }
            if (!$r->photographs4 == NULL) {
                unlink(FCPATH . "uploads/" . $r->photographs4);
            }
            if (!$r->photographs5 == NULL) {
                unlink(FCPATH . "uploads/" . $r->photographs5);
            }

        }
    }

    public function remove_photo($id, $photographs1, $photographs2, $photographs3, $photographs4, $photographs5)
    {
        $this->db->from('tbl_common_character');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $results = $query->result();


        foreach ($results as $r) {
            if ((!$r->photographs1 == NULL) && (!$photographs1 == NULL)) {
                unlink(FCPATH . "uploads/" . $r->photographs1);
            }
            if ((!$r->photographs2 == NULL) && (!$photographs2 == NULL)) {
                unlink(FCPATH . "uploads/" . $r->photographs2);
            }
            if ((!$r->photographs3 == NULL) && (!$photographs3 == NULL)) {
                unlink(FCPATH . "uploads/" . $r->photographs3);
            }
            if ((!$r->photographs4 == NULL) && (!$photographs4 == NULL)) {
                unlink(FCPATH . "uploads/" . $r->photographs4);
            }
            if ((!$r->photographs5 == NULL) && (!$photographs5 == NULL)) {
                unlink(FCPATH . "uploads/" . $r->photographs5);
            }

        }
    }

    public function update()
    {
        $id = $this->input->post('id');

        $this->do_upload($id);

        $this->form_validation->set_rules('genus', 'genus', 'required');
        $this->form_validation->set_rules('species', 'species', 'required');
        $this->form_validation->set_rules('family_name', 'family_name', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('flowering_period', 'flowering_period', 'required');

        if ($this->form_validation->run() == FALSE) {
            //  redirect('manage_tree');

            $this->load->view('header/header1');
            $this->load->view('dashboard/insert_new_tree');
            $this->load->view('footer/footer1');


        } else {

            $comon_data = array(

                'id' => $this->input->post('id'),
                'genus' => $this->input->post('genus'),
                'species' => $this->input->post('species'),
                'author' => $this->input->post('author'),
                'family_name' => $this->input->post('family_name'),
                'synonyms' => $this->input->post('synonyms'),

                'english_name' => $this->input->post('english_name'),
                'description' => $this->input->post('description'),
                'flowering_period' => $this->input->post('flowering_period'),
                'habit' => $this->input->post('habit'),
                'distribution' => $this->input->post('distribution'),
                'uses' => $this->input->post('uses'),

                'photographs1' => $this->input->post('photographs1'),
                'photographs2' => $this->input->post('photographs2'),
                'photographs3' => $this->input->post('photographs3'),
                'photographs4' => $this->input->post('photographs4'),
                'photographs5' => $this->input->post('photographs5'),

                'photographs1_link' => $this->input->post('photographs1_link'),
                'photographs2_link' => $this->input->post('photographs2_link'),
                'photographs3_link' => $this->input->post('photographs3_link'),
                'photographs4_link' => $this->input->post('photographs4_link'),
                'photographs5_link' => $this->input->post('photographs5_link')
            );
//            $this->load->model('Tree_model');
            $result = $this->Tree_model->update($comon_data);


            if ($result == true) {
                $this->session->set_flashdata('msg', "Data has been updated successfully.");
                redirect('manage_tree/tree_list');
            }
        }

    }

    public function update_local_name()
    {
        $result = $this->Tree_model->update_local_name();

        if ($result == true) {
            $this->session->set_flashdata('msg', "Data has been updated successfully.");
            redirect('manage_tree/tree_list');
        }
    }

    public function update_data($id)
    {
        $this->db->from('tbl_common_character');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data['common'] = $results;

        $this->db->from('tbl_taxonomic_character');
        $this->db->where('reference_of_common', $id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data['key_data'] = $results;

        $this->db->from('tbl_local_name');
        $this->db->where('common_reference', $id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data['key_data_local'] = $results;

        /*$this->db->select('*');
         $this->db->from('tbl_common_character');
         $this->db->where('id',$id);
         $result['query']= $this->db->get();
         $query = $result->result_array();
         print_r($query);

         echo $query['id'];
         die();*/

//      $result=$this->tree_model->get_tree_data($id);
        $this->load->view('header/header1');
        $this->load->view('dashboard/update', $data);
//        $this->load->view('dashboard/view_key_character');

        $this->load->view('footer/footer1');

    }

    public function delete_tree($id)
    {
        $this->remove_photo1($id);
        $this->load->model('Tree_model');
        $this->Tree_model->delete_tree($id);
        redirect('manage_tree/tree_list/');
    }
}
