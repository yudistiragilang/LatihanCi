
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
    }

    //membuat form upload disini
    function index(){
        $this->load->view('v_upload',array('error' => ''));
    }

    // fungsi upload
    function aksi_upload(){
        $config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 10240;
        $config['max_height']           = 7680;
        
        $this->load->library('upload',$config);

        // $this->upload->do_upload('NAME dari form'))
        if ( ! $this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('v_upload_sukses', $data);
        }

    }
}