<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    //get registration index ;return index (int)
    function get_register_id() {
        $maxid = $this->db->select('MAX(id)')->get('account')->row();
        $maxid_arr = (array)$maxid;
        if (isset($maxid_arr['MAX(id)'])) {
            $id_result = substr($maxid_arr['MAX(id)'], 0);
            return intval($id_result)+1;
        } else {
            return 1;
        }
        
    }

    //insert data to database ;return insert_id()
    function insert($data) {

        $this->db->insert('account', $data);
        return $this->db->insert_id();
    }
}