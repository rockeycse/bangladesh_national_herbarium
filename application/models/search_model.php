<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model
{

    function search_data($search_term = 'default')
    {
        $this->db->select('*');
        $this->db->from('tbl_common_character');
        $this->db->like('family_name', $search_term['family']);
        $this->db->like('genus', $search_term['genus']);
        $this->db->like('species', $search_term['species']);
        $this->db->like('local_name', $search_term['local_name']);
        $query = $this->db->get();

        return $query->result();
    }

    public function search_project($limit, $start, $args)
    {
        $family_name = $args['family_name'];
        $genus_name = $args['genus_name'];
        $species_name = $args['species_name'];
        $local_name = $args['local_name'];

        //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub Query:$sub_query\n";
        if ($local_name == 'default') {
            $this->db->select('*');
            $this->db->limit($limit, $start);
            $this->db->from('tbl_common_character');
            if ($family_name != 'default') $this->db->where('family_name', $family_name);
            if ($genus_name != 'default') $this->db->where('genus', $genus_name);
            if ($species_name != 'default') $this->db->where('species', $species_name);
            if ($local_name != 'default') $this->db->where('local_name', $local_name);
            $compiled_query = $this->db->get_compiled_select();
            //echo $compiled_query;

            $query = $this->db->query($compiled_query);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            } else {
                return FALSE;
            }

        } else {
            $this->db->select('tbl_common_character.*');
            $this->db->limit($limit, $start);
            $this->db->from('tbl_common_character');
            $this->db->join('tbl_local_name', 'tbl_local_name.common_reference = tbl_common_character.id ');
            if ($family_name != 'default') $this->db->where('tbl_common_character.family_name', $family_name);
            if ($genus_name != 'default') $this->db->where('tbl_common_character.genus', $genus_name);
            if ($species_name != 'default') $this->db->where('tbl_common_character.species', $species_name);
            $this->db->where('tbl_local_name.local_name', $local_name);
            $compiled_query = $this->db->get_compiled_select();
            //echo $compiled_query;

            $query = $this->db->query($compiled_query);

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            } else {
                return FALSE;
            }
        }

    }


    function search($family)
    {
        $this->db->like('family_name', $family, 'both');
        return $this->db->get('tbl_common_character')->result;
    }

    public function search_project_with_key_character($key_character)
    {
        if ($key_character) {

        }
    }

    public function search_result_count($args)
    {
        $family_name = $args['family_name'];
        $genus_name = $args['genus_name'];
        $species_name = $args['species_name'];
        $local_name = $args['local_name'];

//        $this->db->select('id');
//        $this->db->from('administrative_area');
//        $this->db->where('union_pouroshova', $union_poroshova);
//        $sub_query = $this->db->get_compiled_select();
        if ($local_name) {
            $this->db->select('*');
            $this->db->from('tbl_common_character');
            $this->db->join('tbl_local_name', 'tbl_local_name.common_reference = tbl_common_character.id');
            if ($family_name != 'default') $this->db->where('tbl_common_character.family_name', $family_name);
            if ($genus_name != 'default') $this->db->where('tbl_common_character.genus', $genus_name);
            if ($species_name != 'default') $this->db->where('tbl_common_character.species', $species_name);
            if ($local_name != 'default') $this->db->where('tbl_local_name.local_name', $local_name);
            $query = $this->db->get();
            return $query->num_rows();
        } else {
            $this->db->select('*');
            $this->db->from('tbl_common_character');
            if ($family_name != 'default') $this->db->where('family_name', $family_name);
            if ($genus_name != 'default') $this->db->where('genus', $genus_name);
            if ($species_name != 'default') $this->db->where('species', $species_name);
            //if ($local_name != 'default') $this->db->where('local_name', $local_name);
            $query = $this->db->get();
            return $query->num_rows();
        }
    }

    public function search_result_count1()
    {
        $this->db->select('*');
        $this->db->from('tbl_common_character');
        $query = $this->db->get();
        return $query->num_rows();

    }

    public function get_habit()
    {
        $habit = 'habit';
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', $habit);
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_bark_texture()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'bark texture');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_bole()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'bole');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_thorn()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'thorn');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_leaf_persistence()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'leaf persistence');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_petiole()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'petiole');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_stipules()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'stipules');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_leaf_type()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'leaf type');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_leaf_arrangement()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'leaf arrangement');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_leaf_venation()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'leaf venation');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_inflorescence()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'inflorescence');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_floral_symmetry()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'floral symmetry');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_floral_type()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'floral type');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_floral_attachment()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'floral attachment');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_corolla_aestivation()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'corolla aestivation');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_fruit()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'fruit');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_sexual_Reproductive_Unit()
    {
        $this->db->select('character_sub1');
        $this->db->from('tbl_taxonomic_character');

        $this->db->where('root_character', 'sexual Reproductive Unit');
        $this->db->group_by('character_sub1');
        $query = $this->db->get();
        return $query->result();
    }
}