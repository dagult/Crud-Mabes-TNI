<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	function login_hadi()
	{
		$this->load->view('admin/login');
	}
}
