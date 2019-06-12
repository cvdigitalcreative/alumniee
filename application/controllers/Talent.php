<?php
	/**
	 * 
	 */
	class Talent extends CI_Controller
	{
		
		function __construct(){
        	parent:: __construct();
    	}

    	function index(){
    		 if($this->session->userdata('akses') == 1){
               $this->load->view('v_talentD'); 
            }else{
                redirect('Login');
            }
        	
    	}

	}
?>