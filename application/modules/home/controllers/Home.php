<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
	
        
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Log_model');
        // $this->load->library('form_validation');
		// $this->load->model('Pengaduan2_model');	
		
		
    }

    public function index()
    {
		$data['title']		= "Log Whatsapp Center";
        $this->template->load('template_front/template','home',$data);
        
	}


}

