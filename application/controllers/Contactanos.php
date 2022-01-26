<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactanos extends CI_Controller {

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
        $data['body'] = "page-contacts";
		$this->load->view('sections/header',$data);
		$this->load->view('contactanos');
		$this->load->view('sections/footer');
	}
}
?>