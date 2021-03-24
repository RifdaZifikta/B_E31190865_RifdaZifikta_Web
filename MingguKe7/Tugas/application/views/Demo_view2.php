<?php
	class Demo_view2 extends CI_Controller{

		public function_construct(){
			parent::_construct();
			$this->load->helper('url')
		}
		
		public function index(){
			$this->load->view('Demoview');
		}
	}
?>