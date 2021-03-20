<?php
/**
 * 
 */
class Demo_vieww2 extends CI_Controller{
	public function __construct(){
		paren:: __construct();
			$this->load->helper('url')

	}

	public function index(){
		$this->load->view('url');
	}
}
?>