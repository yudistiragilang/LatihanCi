
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller{

    function __construct(){
        parent::__construct();
        // mengeload model m_data
        $this->load->model('m_data');
    }

    public function index(){
        echo "Ini Method Index Belajar";
    }

    public function halo(){
        
        $datas = array(
            'judul' => "Belajar Code Igniter",
            'tutorial' => "pasing data"
        );
        $this->load->view('view_belajar',$datas);
    }

    // select data dari database
    function user(){
        // $data['parameter'] = $this->nama model->fungsi model->mau diapakan (result berfungsi menjadikan array)
        $data['user'] = $this->m_data->ambil_data()->result();
        // menampilkan data
        $this->load->view('v_user',$data);
    }
}
