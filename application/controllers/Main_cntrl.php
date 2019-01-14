<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_cntrl extends CI_Controller {

	function __construct() {
            parent::__construct();   
            $this->load->model('Main_model');

        }


	public function index()
	{
		$this->load->view('index_view');
	}
	
}
