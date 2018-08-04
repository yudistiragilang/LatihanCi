
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
    }

    //membuat form upload disini
    function index(){
        $this->load->view('v_upload',array('error' => '')); // menampilkan view v_upload
    }

    // fungsi upload
    function aksi_upload(){
        $config['upload_path']          = './gambar/'; //direktori gambar akan disimpan
		$config['allowed_types']        = 'gif|jpg|png'; //format gambar yang dapat di upload
		$config['max_size']             = 1000; //ukuran maksimal gambar (Kb)
		$config['max_width']            = 10240; //ukuran gambar
        $config['max_height']           = 7680; // ukuran gambar
        
        $this->load->library('upload',$config);

        // $this->upload->do_upload('NAME dari form'))
        if ( ! $this->upload->do_upload('berkas')) { 
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error); //jika data tidak ada redirect ke v_upload 
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('v_upload_sukses', $data); //jika upload berhasil
        }

    }
}