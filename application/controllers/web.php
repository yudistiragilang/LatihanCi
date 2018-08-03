
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    // untuk web statis .. header section sama footer masih jadi 1 file
    // function index(){
    //     $data['judul'] = "halaman depan";
    //     $this->load->view('v_index',$data);
    // }
    
    // fungsi index dengan laman dinamis .. jadi header sendiri. konten sendiri footer sendiri dengan memanggil file sesuai urutan
    function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    function about(){
        $data['judul'] = "Halaman About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
}