<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
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

        $this->db->where('demo_id', $this->session->userdata('demo_id'));
        $this->db->delete('demo');
        $this->session->unset_userdata('demo_id');

        $data['habit'] = $this->search_model->get_habit();
        $data['bark_texture'] = $this->search_model->get_bark_texture();
        $data['bole'] = $this->search_model->get_bole();
        $data['thorn'] = $this->search_model->get_thorn();
        $data['leaf_persistence'] = $this->search_model->get_leaf_persistence();
        $data['petiole'] = $this->search_model->get_petiole();
        $data['stipules'] = $this->search_model->get_stipules();
        $data['leaf_type'] = $this->search_model->get_leaf_type();
        $data['leaf_arrangement'] = $this->search_model->get_leaf_arrangement();
        $data['leaf_venation'] = $this->search_model->get_leaf_venation();
        $data['inflorescence'] = $this->search_model->get_inflorescence();
        $data['floral_symmetry'] = $this->search_model->get_floral_symmetry();
        $data['floral_type'] = $this->search_model->get_floral_type();
        $data['floral_attachment'] = $this->search_model->get_floral_attachment();
        $data['corolla_aestivation'] = $this->search_model->get_corolla_aestivation();
        $data['fruit'] = $this->search_model->get_fruit();
        $data['sexual_Reproductive_Unit'] = $this->search_model->get_sexual_Reproductive_Unit();
        $this->load->view('header/header1');
        $this->load->view('search/search', $data);
        $this->load->view('footer/footer1');
    }


    public function search()
    {
        $this->load->model('search_model');

        $search_term = array(
            'family' => $this->input->post('family_name'),
            'genus' => $this->input->post('genus_name'),
            'species' => $this->input->post('species_name'),
            'local_name' => $this->input->post('local_name'));

        $data['query'] = $this->search_model->search_data($search_term);

        if ($data) {
            $this->load->view('header/header2');
            $this->load->view('search/search_result', $data);
            $this->load->view('footer/footer1');
        } else
            redirect('search');
    }

    public function search_project()
    {
        $this->db->where('demo_id', $this->session->userdata('demo_id'));
        $this->db->delete('demo');
        $this->session->unset_userdata('demo_id');

        $family_name = $this->uri->segment(3);
        $genus_name = $this->uri->segment(4);
        $species_name = $this->uri->segment(5);
        $local_name = $this->uri->segment(6);


        // echo "<br>Search_Project Called with $union_pouroshova/$economical_year/$implementar/$sector";

        $data['title'] = 'Search Result';

        if ($family_name == '' && $genus_name == '' && $species_name == '' && $local_name == '') {  //come from submit button
            //echo "  All empty";
            $family_name = $this->input->post('family_name');
            $genus_name = $this->input->post('genus_name');
            $species_name = $this->input->post('species_name');
            $local_name = $this->input->post('local_name');
            //echo "<br>From input $union_pouroshova/$economical_year/$implementar/$sector";
        }
        if ($family_name == '') $family_name = 'default';
        if ($genus_name == '') $genus_name = 'default';
        if ($species_name == '') $species_name = 'default';
        if ($local_name == '') $local_name = 'default';

        $args = array();
        $args['family_name'] = $family_name;
        $args['genus_name'] = $genus_name;
        $args['species_name'] = $species_name;
        $args['local_name'] = $local_name;

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("search/search_project/$family_name/$genus_name/$species_name/$local_name/");
        $config['total_rows'] = $this->search_model->search_result_count($args);
        $config['per_page'] = 50;
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

        $data['search_result'] = $this->search_model->search_project($config['per_page'], $data['page'], $args);
        if ($data == FALSE) {
            $data['message'] = "No data matched";
            $this->load->view('search', $data);
        } else {
            $data['links'] = $this->pagination->create_links();


            $this->load->view('search_result', $data);
        }


    }


    public function add_string($a, $b)
    {

        static $genus_data = 1;
        $dd = '';
        if ($genus_data == 1) {
            $genus_data = 2;
//            $this->session->set_userdata('kk', $genus_data);
            //$this->session->set_userdata($genus_data);
            $dd = "(" . "'" . $a . "'" . "," . "'" . $b . "'" . ")";
        } else {
            $dd = "," . "(" . "'" . $a . "'" . "," . "'" . $b . "'" . ")";
        }
//        $genus_data = $this->session->userdata('kk');

        return $dd;

    }


    public function search_project_with_key_character()
    {

        $habit = $this->input->post('habit');
        $bark_texture = $this->input->post('bark_texture');
        $bole = $this->input->post('bole');
        $thorn = $this->input->post('thorn');
        $leaf_persistence = $this->input->post('leaf_persistence');
        $petiole = $this->input->post('petiole');
        $stipules = $this->input->post('stipules');
        $leaf_type = $this->input->post('leaf_type');
        $leaf_arrangement = $this->input->post('leaf_arrangement');
        $leaf_venation = $this->input->post('leaf_venation');
        $inflorescence = $this->input->post('inflorescence');
        $floral_symmetry = $this->input->post('floral_symmetry');
        $floral_type = $this->input->post('floral_type');
        $floral_attachment = $this->input->post('floral_attachment');
        $corolla_aestivation = $this->input->post('corolla_aestivation');
        $fruit = $this->input->post('fruit');

        $sexual_Reproductive_Unit = $this->input->post('sexual_Reproductive_Unit');
        if ($habit || $bark_texture || $bole || $thorn || $leaf_persistence || $petiole || $stipules || $leaf_type || $leaf_arrangement || $leaf_venation
            || $inflorescence || $floral_symmetry || $floral_type || $floral_attachment || $corolla_aestivation || $fruit || $sexual_Reproductive_Unit
        ) {


//        $c = "SELECT `reference_of_common` FROM `tbl_taxonomic_character` WHERE (root_character,character_sub1)IN( $sub_data ) group by reference_of_common having COUNT(DISTINCT root_character)>1 ";

            $sub_data = ' SELECT `reference_of_common` FROM `tbl_taxonomic_character` 
	WHERE (root_character,character_sub1)
	IN(';

            if (!empty($habit)) {
                $a = 'habit';
                $b = $habit;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($bark_texture)) {
                $a = 'bark texture';
                $b = $bark_texture;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($bole)) {
                $a = 'bole';
                $b = $bole;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($thorn)) {
                $a = 'thorn';
                $b = $thorn;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($leaf_persistence)) {
                $a = 'leaf persistence';
                $b = $leaf_persistence;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($petiole)) {
                $a = 'petiole';
                $b = $petiole;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($stipules)) {
                $a = 'stipules';
                $b = $stipules;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($leaf_type)) {
                $a = 'leaf type';
                $b = $leaf_type;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($leaf_arrangement)) {
                $a = 'leaf arrangement';
                $b = $leaf_arrangement;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($leaf_venation)) {
                $a = 'leaf venation';
                $b = $leaf_venation;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($inflorescence)) {
                $a = 'inflorescence';
                $b = $inflorescence;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($floral_symmetry)) {
                $a = 'floral symmetry';
                $b = $floral_symmetry;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($floral_type)) {
                $a = 'floral type';
                $b = $floral_type;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($floral_attachment)) {
                $a = 'floral attachment';
                $b = $floral_attachment;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($corolla_aestivation)) {
                $a = 'corolla aestivation';
                $b = $corolla_aestivation;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($fruit)) {
                $a = 'fruit';
                $b = $fruit;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }

            if (!empty($sexual_Reproductive_Unit)) {
                $a = 'sexual Reproductive Unit';
                $b = $sexual_Reproductive_Unit;
                $s = $this->add_string($a, $b);
                $sub_data = $sub_data . $s;
            }


            $r = 0;
            $sub_data1 = ')group by reference_of_common
	having COUNT(DISTINCT root_character)>' . $r;

            $sql1 = $sub_data . $sub_data1;


            $query = $this->db->query($sql1);


            while ($query->num_rows() >= 0) {
                // echo $sql1;

                if ($query->num_rows() == 0) {
                    $r = $r - 1;
                    $sub_data1 = ')group by reference_of_common
	having COUNT(DISTINCT root_character)>' . $r;
                    $sql1 = $sub_data . $sub_data1;

                    $query = $this->db->query($sql1);

                    $data['reference'] = $query->result();

                    $this->load->view('header/header1');
                    $this->load->view('search/search_key_view', $data);
                    $this->load->view('footer/footer1');

//                foreach ($query->result() as $row) {
//
//                    echo $row->reference_of_common . "<br>";
//
//                }


                    break;
                }


                $r++;

                $sub_data1 = ')group by reference_of_common
	having COUNT(DISTINCT root_character)>' . $r;
                $sql1 = $sub_data . $sub_data1;

                $query = $this->db->query($sql1);

            }


//        SELECT `reference_of_common` FROM `tbl_taxonomic_character`
//	WHERE (root_character,character_sub1)
//	IN( ('habit','Climber'), ('floral type','pentamerous') )
//	group by reference_of_common
//	having COUNT(DISTINCT root_character)>1
        } else {
            $data['habit'] = $this->search_model->get_habit();
            $data['bark_texture'] = $this->search_model->get_bark_texture();
            $data['bole'] = $this->search_model->get_bole();
            $data['thorn'] = $this->search_model->get_thorn();
            $data['leaf_persistence'] = $this->search_model->get_leaf_persistence();
            $data['petiole'] = $this->search_model->get_petiole();
            $data['stipules'] = $this->search_model->get_stipules();
            $data['leaf_type'] = $this->search_model->get_leaf_type();
            $data['leaf_arrangement'] = $this->search_model->get_leaf_arrangement();
            $data['leaf_venation'] = $this->search_model->get_leaf_venation();
            $data['inflorescence'] = $this->search_model->get_inflorescence();
            $data['floral_symmetry'] = $this->search_model->get_floral_symmetry();
            $data['floral_type'] = $this->search_model->get_floral_type();
            $data['floral_attachment'] = $this->search_model->get_floral_attachment();
            $data['corolla_aestivation'] = $this->search_model->get_corolla_aestivation();
            $data['fruit'] = $this->search_model->get_fruit();
            $data['sexual_Reproductive_Unit'] = $this->search_model->get_sexual_Reproductive_Unit();
            $this->load->view('header/header1');
            $this->load->view('search/search', $data);
            $this->load->view('footer/footer1');
        }
    }


    public function family_name_autocomplete()
    {

        $keyword1 = $this->input->post('term');

        $this->db->select('family_name');
        $this->db->distinct();
        $this->db->like('family_name', $keyword1);
        $result = $this->db->get('tbl_common_character')->result();
        $data['response'] = 'false';
        if (!empty($result)) {
            $data['response'] = 'true';
            foreach ($result as $row) {
                $data['message'][] = $row->family_name;
            }
        }

        echo json_encode($data); //echo json string if ajax request

    }

    public function get_genus_by_family($familly)
    {
        $demo_id = $this->session->userdata('demo_id');

        if (empty($demo_id)) {
            $data = array(
                'demo_family' => $familly
            );
            $this->db->insert('demo', $data);


            $this->db->select('*');
            $result = $this->db->get('demo');
            $result = $result->result_array();
            $sdata['demo_id'] = $result[0]['demo_id'];
            $this->session->set_userdata($sdata);

        } else {

            $data = array(

                'demo_family' => $familly

            );

            $kopa = $this->session->userdata('demo_id');
            $this->db->where('demo_id', $kopa);
            $this->db->update('demo', $data);


        }

    }

    public function genus_name_autocomplete()
    {

        if ($this->session->userdata('demo_id')) {

            $this->db->select('*');
            $this->db->from('demo');
            $this->db->where('demo_id', $this->session->userdata('demo_id'));
            $query = $this->db->get();
            $res = $query->result_array();

            $family_demo = $res[0]['demo_family'];
        }


        if (empty($family_demo)) {

            $keyword = $this->input->post('term');
            $this->db->select('genus');
            $this->db->distinct();
            $this->db->like('genus', $keyword);
//            $this->db->where('family_name', $family_data);

            $this->db->from('tbl_common_character');
            $result = $this->db->get();
            $result = $result->result();

            //   $result = $this->db->get('tbl_common_character')->result();

            $data['response'] = 'false';

            if (!empty($result)) {
                $data['response'] = 'true';
                foreach ($result as $row) {
                    $data['message'][] = $row->genus;
                }
            }
            echo json_encode($data); //echo json string if ajax request

        } else {
            $keyword = $this->input->post('term');
            $this->db->select('genus');
            $this->db->distinct();
            $this->db->like('genus', $keyword);
            $this->db->where('family_name', $family_demo);

            $result = $this->db->get('tbl_common_character')->result();
            $data['response'] = 'false';
            if (!empty($result)) {
                $data['response'] = 'true';
                foreach ($result as $row) {
                    $data['message'][] = $row->genus;
                }
            }
            echo json_encode($data); //echo json string if ajax request
//            $this->session->unset_userdata('family_data');
        }
    }

    public function get_species_by_genus($genus1)
    {
        $demo_id = $this->session->userdata('demo_id');


        if (empty($demo_id)) {
            $data = array(
                'demo_genus' => $genus1
            );
            $this->db->insert('demo', $data);


            $this->db->select('*');
            $result = $this->db->get('demo');
            $result = $result->result_array();
            $sdata['demo_id'] = $result[0]['demo_id'];
            $this->session->set_userdata($sdata);

        } else {

            $data = array(

                'demo_genus' => $genus1

            );

            $kopa = $this->session->userdata('demo_id');
            $this->db->where('demo_id', $kopa);
            $this->db->update('demo', $data);


        }


    }

    public function species_name_autocomplete()
    {

        if ($this->session->userdata('demo_id')) {

            $this->db->select('*');
            $this->db->from('demo');
            $this->db->where('demo_id', $this->session->userdata('demo_id'));
            $query = $this->db->get();
            $res = $query->result_array();

            $genus_demo = $res[0]['demo_genus'];
        }


        if (empty($genus_demo)) {
            $keyword = $this->input->post('term');
            $this->db->select('species');
            $this->db->distinct();
            $this->db->like('species', $keyword);
//            $this->db->where('genus', $genus_data);
            $result = $this->db->get('tbl_common_character')->result();
            $data['response'] = 'false';
            if (!empty($result)) {
                $data['response'] = 'true';
                foreach ($result as $row) {
                    $data['message'][] = $row->species;
                }
            }
            echo json_encode($data); //echo json string if ajax request

        } else {
            $keyword = $this->input->post('term');
            $this->db->select('species');
            $this->db->distinct();
            $this->db->like('species', $keyword);

            $this->db->where('genus', $genus_demo);

            $result = $this->db->get('tbl_common_character')->result();
            $data['response'] = 'false';
            if (!empty($result)) {
                $data['response'] = 'true';
                foreach ($result as $row) {
                    $data['message'][] = $row->species;
                }
            }
            echo json_encode($data); //echo json string if ajax request
            $this->session->unset_userdata('genus_data');
        }
    }

    public function get_local_by_species($species1)
    {
        $demo_id = $this->session->userdata('demo_id');

        if (empty($demo_id)) {
            $data = array(
                'demo_species' => $species1
            );
            $this->db->insert('demo', $data);


            $this->db->select('*');
            $result = $this->db->get('demo');
            $result = $result->result_array();
            $sdata['demo_id'] = $result[0]['demo_id'];
            $this->session->set_userdata($sdata);

        } else {

            $data = array(

                'demo_species' => $species1

            );

            $kopa = $this->session->userdata('demo_id');
            $this->db->where('demo_id', $kopa);
            $this->db->update('demo', $data);


        }
    }

    public function get_tree_data($refer)
    {

        $this->db->select('*');
        $this->db->from('tbl_common_character');
        $this->db->where('id', $refer);
        $query = $this->db->get();
        return $query->result();
    }

    public function local_name_autocomplete()
    {
        if ($this->session->userdata('demo_id')) {

            $this->db->select('*');
            $this->db->from('demo');
            $this->db->where('demo_id', $this->session->userdata('demo_id'));
            $query = $this->db->get();
            $res = $query->result_array();

            $species_demo = $res[0]['demo_species'];
            $genus_demo = $res[0]['demo_genus'];
        }

        if (empty($species_demo)) {

            $keyword = $this->input->post('term');
            $this->db->select('local_name');
            $this->db->distinct();
            $this->db->like('local_name', $keyword);
            $result = $this->db->get('tbl_local_name')->result();
            $data['response'] = 'false';
            if (!empty($result)) {
                $data['response'] = 'true';
                foreach ($result as $row) {
                    $data['message'][] = $row->local_name;
                }
            }
            echo json_encode($data); //echo json string if ajax request
        } else {

            $keyword = $this->input->post('term');
//            $this->db->select('*');
//            $this->db->distinct();
//            $this->db->from('tbl_common_character');
//            $this->db->where('species',$keyword);
//            $result1=$this->db->get()->result_array();
//
//            $ref_id=$result1[0]['id'];

            $this->db->select('*');
            $this->db->from('tbl_common_character');
            $this->db->join('tbl_local_name', 'tbl_local_name.common_reference = tbl_common_character.id');
//            if ($family_name != 'default') $this->db->where('tbl_common_character.family_name', $family_name);
//            if ($genus_name != 'default') $this->db->where('tbl_common_character.genus', $genus_name);
//            if ($species_name != 'default') $this->db->where('tbl_common_character.species', $species_name);
//            if ($local_name != 'default') $this->db->where('tbl_local_name.local_name', $local_name);
            $this->db->like('local_name', $keyword);
            $this->db->where('tbl_common_character.species', $species_demo);

            $result = $this->db->get()->result();

            //$result = $this->db->query("SELECT `local_name` FROM `tbl_local_name` WHERE `common_reference`='.$ref_id.' AND `local_name` like '%.$keyword.%'");
            $data['response'] = 'false';
            if (!empty($result)) {
                $data['response'] = 'true';
                foreach ($result as $row) {
                    $data['message'][] = $row->local_name;
                }
            }
            echo json_encode($data); //echo json string if ajax request
        }
    }

    public function getdata($param = '')
    {
        $param = $this->input->post('family_name');
        // Get data from db
        $result = $this->search_model->search($param);

        $this->load->view('header/header2');
        $this->load->view('search/search', $result);
        $this->load->view('footer/footer1');


    }

    public function auto_search()
    {
        if (isset($_GET['term'])) {
            $result = $this->search_model->search($_GET['term']);

            if (count($result) > 0) {
                foreach ($result as $item) {
                    $arr_result[] = $item->family_name;
                    echo json_encode($arr_result);
                }
            }
        }
    }

}
