<?php
	/**
	 * 
	 */
	class Register extends CI_Controller
	{
		
		function __construct(){
        	parent:: __construct();
        
    	}

    	function index(){
    		$this->load->view('v_header');
        	$this->load->view('v_register');
    	}
	}
?>