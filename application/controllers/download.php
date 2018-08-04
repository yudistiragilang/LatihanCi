
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','download'));
    }

    function index(){
        $this->load->view('v_download');
    }

    function aksi_download(){
        force_download('gambar/malasngoding.png',NULL); //fungsi download dan parammeternya adalah direktori yang akan di download
    }
}