<?php
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			
		
		}

		function talent(){
			$this->load->view('v_header');
			$this->load->view('v_talent');
			$this->load->view('v_footer');
		}

		function company(){
			$this->load->view('v_header');
			$this->load->view('v_company');
			$this->load->view('v_footer');
		}	
	}
?>