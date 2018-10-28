<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/* public function __construct(){
    parent::__construct();
    if (!$this->session->userdata("login")) {
      redirect(base_url());
    }
  } */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('vista_login');
		$this->load->view('footer');
	}
}