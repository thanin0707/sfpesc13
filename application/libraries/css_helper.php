<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Resource {

    function __construct()
    {
        $css_path = "css/";
        $js_path = "js/";
    }


    function link_css($files = array()) {
        foreach ((array) $files as $file) {
            $this->load->view('css', $file);
            }
    }
}