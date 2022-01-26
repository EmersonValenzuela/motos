<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('rol')){
        //   redirect(base_url());
        // }
    }

	public function index()
	{
        $data = array();
        $data['page_title'] = "Contactanos";
        $data['body'] = "page-about";
		$this->load->view('sections/header', $data);
		$this->load->view('about');
		$this->load->view('sections/footer');
	}
}
?>