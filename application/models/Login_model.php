<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    //get database info where username matches ;return data
    function get_query($username,$data) {
        $query = $this->db->select($data)->where('username', $username)->get('account')->row();
        $result =  (array)$query;
        if ($result[$data]) {
            return $result[$data];
        } else {
            return FALSE;
        }
    }

    function can_login($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('password_hash', $data['password_hash']);
        $query = $this->db->get('account');

        if($query->num_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
}