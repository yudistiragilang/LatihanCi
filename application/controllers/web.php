
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(url);
    }

    function index(){
        $data['judul'] = "halaman depan";
        $this->load->view('v_index',$data);
    }
}