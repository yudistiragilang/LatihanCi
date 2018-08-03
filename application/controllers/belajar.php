
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        echo "Ini Method Index Belajar";
    }

    public function halo(){
        // $this->load->view('File yang dipanggil');
        // $this->load->view('view_belajar');

        // $this->load->view('Folder/File yang dipanggil');

        //menggunakan array
        // $data['nama_web'] = "MalasNgoding.com Halo Halo Solo";
        // //$data adalah array parameter nama_web
        // $this->load->view('view_belajar',$data);

        //coontoh lain perhatikan koma pada judul
        $datas = array(
            'judul' => "Belajar Code Igniter",
            'tutorial' => "pasing data"
        );
        $this->load->view('view_belajar',$datas);
    }
}