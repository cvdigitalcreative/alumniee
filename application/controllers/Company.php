<?php
	/**
	 * 
	 */
	class Company extends CI_Controller
	{
		
		function __construct(){
        	parent:: __construct();
    	}

    	function index(){
        
            if($this->session->userdata('akses') == 2){
               $this->load->view('v_header_C'); 
               $this->load->view('v_companyD'); 
            }else{
                redirect('Login');
            }
        	
    	}

	}
?>