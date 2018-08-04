
<?php
// model untuk load data user
class M_data extends CI_Model{

    function ambil_data(){
        return $this->db->get('user'); // get('NAMA TABEL')
    }
}