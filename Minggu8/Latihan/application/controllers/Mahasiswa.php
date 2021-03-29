<?php class Mahasiswa extends CI_Controller { function __construct() { parent::__construct(); $this->load->model('mahasiswa_m');
    }
 
    function index()
    {
        $data['data'] = $this->mahasiswa_m->tampil_mahasiswa();
        $this->template->load('template', 'mahasiswa/index', $data);
    }
}