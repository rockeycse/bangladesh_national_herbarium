<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tree_model extends CI_Model
{
    public function change_password($current_password, $new_password, $confirm_new_password, $confirm_new_password2)
    {
        $ad_id = $this->session->userdata('admin_id');
        $admin_password = $this->session->userdata('admin_password');

        if (($current_password == $admin_password) && ($new_password == $confirm_new_password) && ($confirm_new_password == $confirm_new_password2)) {
            $data = array(
                'admin_password' => $new_password
            );
            $this->db->where('admin_id',$ad_id);
            $this->db->update('tbl_admin', $data);
            return true;
        } else {
            return false;
        }
    }

    public function get_img_path($img)
    {

        $this->db->select("*");

        $this->db->from("tbl_common_character");

        $this->db->where('id', $this->input->post('id'));

        $query = $this->db->get();

        $mdata = $query->result_array();

        // print_r($mdata[0][$img]);

        // die();

        return $mdata[0][$img];

        // return $query->result();

    }

    public function insert_tree($comon_data)
    {


        $this->db->insert('tbl_common_character', $comon_data);


        //$result=mysqli_query('SELECT id FROM tbl_common_character ORDER BY `id` DESC LIMIT 1') ;

        $common_character_ref = $this->db->insert_id();

############################### submitting local name***************************
        if (!empty($_POST['local_name1'])) {
            $sdata = array(

                'local_name' => $this->input->post('local_name1'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name2'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name2'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }


        if (!empty($_POST['local_name3'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name3'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name4'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name4'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name5'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name5'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name6'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name6'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name7'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name7'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name8'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name8'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name9'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name9'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name10'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name10'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name11'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name11'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name1'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name12'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name13'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name13'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name14'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name14'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name15'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name15'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name16'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name16'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name17'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name17'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name18'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name18'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name19'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name19'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name20'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name20'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }


        // ################   1. Habit *********************************************
        if (isset($_POST['climber'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('climber'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['epiphyte'])) {

            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('epiphyte'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['herb'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('herb'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['parasite'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('parasite'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['shrub'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('shrub'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['tree'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('tree'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['undershrub'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('undershrub'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        //################## 2. Bark texture **************************************************


        if (isset($_POST['exfoliating'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('exfoliating'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['fissured'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('fissured'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['plated'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('plated'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['ringed'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('ringed'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['shreddy'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('shreddy'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['smooth'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('smooth'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['winged'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('winged'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        // ##########################   3. Bole     ************************
        if (isset($_POST['branched'])) {
            $sdata = array(
                'root_character' => 'bole',
                'character_sub1' => $this->input->post('branched'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['unbranched'])) {
            $sdata = array(
                'root_character' => 'bole',
                'character_sub1' => $this->input->post('unbranched'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        //############################### 4. Thorn **************************************************


        if (isset($_POST['absent'])) {
            $sdata = array(
                'root_character' => 'thorn',
                'character_sub1' => $this->input->post('absent'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['present'])) {
            $sdata = array(
                'root_character' => 'thorn',
                'character_sub1' => $this->input->post('present'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        //###################   5. Leaf persistence    ***************************************

        if (isset($_POST['deciduous'])) {
            $sdata = array(
                'root_character' => 'leaf persistence',
                'character_sub1' => $this->input->post('deciduous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['persistent'])) {
            $sdata = array(
                'root_character' => 'leaf persistence',
                'character_sub1' => $this->input->post('persistent'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        //######################## 6. Petiole *******************************


        if (isset($_POST['petiolate'])) {
            $sdata = array(
                'root_character' => 'petiole',
                'character_sub1' => $this->input->post('petiolate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['sessile'])) {
            $sdata = array(
                'root_character' => 'petiole',
                'character_sub1' => $this->input->post('sessile'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['subsessile'])) {
            $sdata = array(
                'root_character' => 'petiole',
                'character_sub1' => $this->input->post('subsessile'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        //###################################### 7. Stipules ***************************************

        if (isset($_POST['absent_stipulates'])) {
            $sdata = array(
                'root_character' => 'stipules',
                'character_sub1' => $this->input->post('absent_stipulates'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['present_stipulates'])) {
            $sdata = array(
                'root_character' => 'stipules',
                'character_sub1' => $this->input->post('present_stipulates'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        //################################ 8. Leaf type ********************************************

        if (isset($_POST['compound'])) {
            $sdata = array(
                'root_character' => 'leaf type',
                'character_sub1' => $this->input->post('compound'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['simple'])) {
            $sdata = array(
                'root_character' => 'leaf type',
                'character_sub1' => $this->input->post('simple'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        //############################### 9. Leaf arrangement  *************************************

        if (isset($_POST['alternate'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('alternate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['decussate'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('decussate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['distichous'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('distichous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['opposite'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('opposite'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['whorl'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('whorl'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        //###############################  10. Leaf venation *******************************


        if (isset($_POST['palmate'])) {
            $sdata = array(
                'root_character' => 'leaf venation',
                'character_sub1' => $this->input->post('palmate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['parallel'])) {
            $sdata = array(
                'root_character' => 'leaf venation',
                'character_sub1' => $this->input->post('parallel'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['pinnate'])) {
            $sdata = array(
                'root_character' => 'leaf venation',
                'character_sub1' => $this->input->post('pinnate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        //##############################   11. Inflorescence    ******************************


        if (isset($_POST['capitulum'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('capitulum'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['catkin'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('catkin'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['corymb'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('corymb'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['cymose'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('cymose'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['panicle'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('panicle'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['raceme'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('raceme'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['solitary'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('solitary'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spadix'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('spadix'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spike'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('spike'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spikelet'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('spikelet'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['umbel'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('umbel'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['verticillaster'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('verticillaster'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

//##########################    12. Floral symmetry    ************************************


        if (isset($_POST['actinomorphic'])) {
            $sdata = array(
                'root_character' => 'floral symmetry',
                'character_sub1' => $this->input->post('actinomorphic'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['amorphic'])) {
            $sdata = array(
                'root_character' => 'floral symmetry',
                'character_sub1' => $this->input->post('amorphic'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['zygomorphic'])) {
            $sdata = array(
                'root_character' => 'floral symmetry',
                'character_sub1' => $this->input->post('zygomorphic'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        //##############################    13. Floral type    *********************************


        if (isset($_POST['others'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('others'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['pentamerous'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('pentamerous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['tetramerous'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('tetramerous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['trimerous'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('trimerous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        //##############################   14. Floral attachment     *******************************


        if (isset($_POST['gamopetalous'])) {
            $sdata = array(
                'root_character' => 'floral attachment',
                'character_sub1' => $this->input->post('gamopetalous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['polypetalous'])) {
            $sdata = array(
                'root_character' => 'floral attachment',
                'character_sub1' => $this->input->post('polypetalous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        //#############################    15. Corolla aestivation     ********************************


        if (isset($_POST['contorted'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('contorted'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['descending'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('descending'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['imbricate'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('imbricate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['open'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('open'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['quincuncial'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('quincuncial'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['valvate'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('valvate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        //####################################   16. Fruit   *****************************************


        if (isset($_POST['achene'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('achene'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['berry'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('berry'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['capsule'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('capsule'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['caryopsis'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('caryopsis'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['coenocarpium'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('coenocarpium'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['cypsela'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('cypsela'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['drupe'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('drupe'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['follicle'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('follicle'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['hep'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('hep'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['hesperidium'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('hesperidium'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['legume'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('legume'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['lomentum'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('lomentum'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['nut'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('nut'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['pome'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('pome'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['pseudocarp'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('pseudocarp'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['samara'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('samara'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['silicula'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('silicula'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['silique'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('silique'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['sorosis'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('sorosis'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['syconium'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('syconium'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['utricle'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('utricle'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        //######################################    17. Sexual Reproductive Unit    **************************************


        if (isset($_POST['covered_seed'])) {
            $sdata = array(
                'root_character' => 'sexual Reproductive Unit',
                'character_sub1' => $this->input->post('covered_seed'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['naked_seed'])) {
            $sdata = array(
                'root_character' => 'sexual Reproductive Unit',
                'character_sub1' => $this->input->post('naked_seed'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spore'])) {
            $sdata = array(
                'root_character' => 'sexual Reproductive Unit',
                'character_sub1' => $this->input->post('spore'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->insert('tbl_taxonomic_character', $sdata);
        }


        return TRUE;

    }

    public function update_local_name()
    {
        $id = $this->input->post('id');

        $this->db->where('common_reference', $id);
        $this->db->delete('tbl_local_name');

        if (!empty($_POST['local_name1'])) {
            $sdata = array(

                'local_name' => $this->input->post('local_name1'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name2'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name2'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }


        if (!empty($_POST['local_name3'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name3'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name4'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name4'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name5'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name5'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name6'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name6'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name7'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name7'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name8'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name8'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name9'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name9'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name10'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name10'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name11'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name11'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name1'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name12'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name13'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name13'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name14'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name14'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name15'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name15'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name16'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name16'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name17'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name17'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name18'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name18'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name19'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name19'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name20'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name20'),

                'common_reference' => $this->input->post('id')
            );
            $this->db->insert('tbl_local_name', $sdata);
        }
        return TRUE;
    }

    public function update($comon_data)
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('tbl_common_character', $comon_data);

//        $this->db->insert('tbl_common_character', $comon_data);


        //$result=mysqli_query('SELECT id FROM tbl_common_character ORDER BY `id` DESC LIMIT 1') ;


        ############################## submitting local name***************************
        if (!empty($_POST['local_name1'])) {
            $sdata = array(

                'local_name' => $this->input->post('local_name1'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name2'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name2'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }


        if (!empty($_POST['local_name3'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name3'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name4'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name4'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name5'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name5'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name6'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name6'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name7'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name7'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name8'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name8'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name9'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name9'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name10'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name10'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name11'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name11'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name1'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name12'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name13'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name13'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name14'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name14'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name15'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name15'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name16'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name16'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name17'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name17'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name18'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name18'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name19'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name19'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }

        if (!empty($_POST['local_name20'])) {
            $sdata = array(
                'local_name' => $this->input->post('local_name20'),

                'common_reference' => $common_character_ref
            );
            $this->db->insert('tbl_local_name', $sdata);
        }


        // ################   1. Habit *********************************************
        if (isset($_POST['climber'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('climber'),
                'reference_of_common' => $common_character_ref
            );

            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'habit');
            $this->db->update('tbl_taxonomic_character', $sdata);

        }

        if (isset($_POST['epiphyte'])) {

            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('epiphyte'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'habit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['herb'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('herb'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'habit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['parasite'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('parasite'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'habit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['shrub'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('shrub'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'habit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['tree'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('tree'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'habit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['undershrub'])) {
            $sdata = array(
                'root_character' => 'habit',
                'character_sub1' => $this->input->post('undershrub'),

                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'habit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        //################## 2. Bark texture **************************************************


        if (isset($_POST['exfoliating'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('exfoliating'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bark texture');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['fissured'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('fissured'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bark texture');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['plated'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('plated'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bark texture');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['ringed'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('ringed'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bark texture');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['shreddy'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('shreddy'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bark texture');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['smooth'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('smooth'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bark texture');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['winged'])) {
            $sdata = array(
                'root_character' => 'bark texture',
                'character_sub1' => $this->input->post('winged'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bark texture');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        // ##########################   3. Bole     ************************
        if (isset($_POST['branched'])) {
            $sdata = array(
                'root_character' => 'bole',
                'character_sub1' => $this->input->post('branched'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bole');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['unbranched'])) {
            $sdata = array(
                'root_character' => 'bole',
                'character_sub1' => $this->input->post('unbranched'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'bole');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        //############################### 4. Thorn **************************************************


        if (isset($_POST['absent'])) {
            $sdata = array(
                'root_character' => 'thorn',
                'character_sub1' => $this->input->post('absent'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'thorn');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['present'])) {
            $sdata = array(
                'root_character' => 'thorn',
                'character_sub1' => $this->input->post('present'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'thorn');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        //###################   5. Leaf persistence    ***************************************

        if (isset($_POST['deciduous'])) {
            $sdata = array(
                'root_character' => 'leaf persistence',
                'character_sub1' => $this->input->post('deciduous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf persistence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['persistent'])) {
            $sdata = array(
                'root_character' => 'leaf persistence',
                'character_sub1' => $this->input->post('persistent'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf persistence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        //######################## 6. Petiole *******************************


        if (isset($_POST['petiolate'])) {
            $sdata = array(
                'root_character' => 'petiole',
                'character_sub1' => $this->input->post('petiolate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'petiole');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['sessile'])) {
            $sdata = array(
                'root_character' => 'petiole',
                'character_sub1' => $this->input->post('sessile'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'petiole');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['subsessile'])) {
            $sdata = array(
                'root_character' => 'petiole',
                'character_sub1' => $this->input->post('subsessile'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'petiole');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        //###################################### 7. Stipules ***************************************

        if (isset($_POST['absent_stipulates'])) {
            $sdata = array(
                'root_character' => 'stipules',
                'character_sub1' => $this->input->post('absent_stipulates'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'stipules');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['present_stipulates'])) {
            $sdata = array(
                'root_character' => 'stipules',
                'character_sub1' => $this->input->post('present_stipulates'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'stipules');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        //################################ 8. Leaf type ********************************************

        if (isset($_POST['compound'])) {
            $sdata = array(
                'root_character' => 'leaf type',
                'character_sub1' => $this->input->post('compound'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf type');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['simple'])) {
            $sdata = array(
                'root_character' => 'leaf type',
                'character_sub1' => $this->input->post('simple'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf type');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        //############################### 9. Leaf arrangement  *************************************

        if (isset($_POST['alternate'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('alternate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf arrangement');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['decussate'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('decussate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf arrangement');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['distichous'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('distichous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf arrangement');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['opposite'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('opposite'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf arrangement');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['whorl'])) {
            $sdata = array(
                'root_character' => 'leaf arrangement',
                'character_sub1' => $this->input->post('whorl'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf arrangement');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        //###############################  10. Leaf venation *******************************


        if (isset($_POST['palmate'])) {
            $sdata = array(
                'root_character' => 'leaf venation',
                'character_sub1' => $this->input->post('palmate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf venation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['parallel'])) {
            $sdata = array(
                'root_character' => 'leaf venation',
                'character_sub1' => $this->input->post('parallel'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf venation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['pinnate'])) {
            $sdata = array(
                'root_character' => 'leaf venation',
                'character_sub1' => $this->input->post('pinnate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'leaf venation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        //##############################   11. Inflorescence    ******************************


        if (isset($_POST['capitulum'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('capitulum'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['catkin'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('catkin'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['corymb'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('corymb'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['cymose'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('cymose'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['panicle'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('panicle'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['raceme'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('raceme'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['solitary'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('solitary'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spadix'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('spadix'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spike'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('spike'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spikelet'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('spikelet'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['umbel'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('umbel'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['verticillaster'])) {
            $sdata = array(
                'root_character' => 'inflorescence',
                'character_sub1' => $this->input->post('verticillaster'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'inflorescence');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

//##########################    12. Floral symmetry    ************************************


        if (isset($_POST['actinomorphic'])) {
            $sdata = array(
                'root_character' => 'floral symmetry',
                'character_sub1' => $this->input->post('actinomorphic'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral symmetry');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['amorphic'])) {
            $sdata = array(
                'root_character' => 'floral symmetry',
                'character_sub1' => $this->input->post('amorphic'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral symmetry');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['zygomorphic'])) {
            $sdata = array(
                'root_character' => 'floral symmetry',
                'character_sub1' => $this->input->post('zygomorphic'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral symmetry');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        //##############################    13. Floral type    *********************************


        if (isset($_POST['others'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('others'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral type');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['pentamerous'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('pentamerous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral type');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['tetramerous'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('tetramerous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral type');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['trimerous'])) {
            $sdata = array(
                'root_character' => 'floral type',
                'character_sub1' => $this->input->post('trimerous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral type');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        //##############################   14. Floral attachment     *******************************


        if (isset($_POST['gamopetalous'])) {
            $sdata = array(
                'root_character' => 'floral attachment',
                'character_sub1' => $this->input->post('gamopetalous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral attachment');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['polypetalous'])) {
            $sdata = array(
                'root_character' => 'floral attachment',
                'character_sub1' => $this->input->post('polypetalous'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'floral attachment');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        //#############################    15. Corolla aestivation     ********************************


        if (isset($_POST['contorted'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('contorted'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'corolla aestivation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['descending'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('descending'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'corolla aestivation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['imbricate'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('imbricate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'corolla aestivation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['open'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('open'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'corolla aestivation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['quincuncial'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('quincuncial'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'corolla aestivation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['valvate'])) {
            $sdata = array(
                'root_character' => 'corolla aestivation',
                'character_sub1' => $this->input->post('valvate'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'corolla aestivation');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        //####################################   16. Fruit   *****************************************


        if (isset($_POST['achene'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('achene'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['berry'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('berry'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['capsule'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('capsule'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['caryopsis'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('caryopsis'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        if (isset($_POST['coenocarpium'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('coenocarpium'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['cypsela'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('cypsela'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['drupe'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('drupe'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['follicle'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('follicle'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['hep'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('hep'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['hesperidium'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('hesperidium'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['legume'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('legume'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['lomentum'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('lomentum'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }
        if (isset($_POST['nut'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('nut'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['pome'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('pome'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['pseudocarp'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('pseudocarp'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['samara'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('samara'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['silicula'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('silicula'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['silique'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('silique'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['sorosis'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('sorosis'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['syconium'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('syconium'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['utricle'])) {
            $sdata = array(
                'root_character' => 'fruit',
                'character_sub1' => $this->input->post('utricle'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'fruit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        //######################################    17. Sexual Reproductive Unit    **************************************


        if (isset($_POST['covered_seed'])) {
            $sdata = array(
                'root_character' => 'sexual Reproductive Unit',
                'character_sub1' => $this->input->post('covered_seed'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'sexual Reproductive Unit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['naked_seed'])) {
            $sdata = array(
                'root_character' => 'sexual Reproductive Unit',
                'character_sub1' => $this->input->post('naked_seed'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'sexual Reproductive Unit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }

        if (isset($_POST['spore'])) {
            $sdata = array(
                'root_character' => 'sexual Reproductive Unit',
                'character_sub1' => $this->input->post('spore'),
                'reference_of_common' => $common_character_ref
            );
            $this->db->where('reference_of_common', $common_character_ref);
            $this->db->where('root_character', 'sexual Reproductive Unit');
            $this->db->update('tbl_taxonomic_character', $sdata);
        }


        return TRUE;

    }

    public function get_all_data()
    {
        $this->db->select("*");
        $this->db->from("tbl_common_character");

        $query = $this->db->get();

        return $query->result();
    }

    public function get_tree_data($refer)
    {
        $this->db->select('*');
        $this->db->from('tbl_common_character');
        $this->db->where('id', $refer);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_key_character_search_data($id_common_data)
    {
        $this->db->select('*');
        $this->db->from('tbl_common_character');
        $this->db->where('id', $id_common_data);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_all_data1($limit, $start)
    {
        //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub Query:$sub_query\n";

        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('tbl_common_character');

        $compiled_query = $this->db->get_compiled_select();
        //echo $compiled_query;

        $query = $this->db->query($compiled_query);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function delete_tree($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_common_character');

        $this->db->where('reference_of_common', $id);
        $this->db->delete('tbl_taxonomic_character');


        $this->db->where('common_reference', $id);
        $this->db->delete('tbl_local_name');

    }

}
