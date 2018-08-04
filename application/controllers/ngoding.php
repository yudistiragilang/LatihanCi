
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller{

    // function __construct(){
    //     parent::__construct();
    //     $this->load->library('sinaukoding');
    // }

    
    function index(){
		$this->load->library('sinaukoding');
		$this->sinaukoding->nama_saya();
                echo "<br/>";
                $this->sinaukoding->nama_kamu("Andi");
	}
}