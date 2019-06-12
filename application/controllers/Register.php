<?php
	/**
	 * 
	 */
	class Register extends CI_Controller
	{
		
		function __construct(){
        	parent:: __construct();
        	$this->load->model('m_account');
    	}

    	function index(){
    		$this->load->view('v_header_LR');
        	$this->load->view('v_register');
    	}

    	function saveaccount(){

    		$nama = $this->input->post('nama');
    		$company = $this->input->post('company');
    		$no_hp = $this->input->post('no_hp');
    		$email = $this->input->post('email');
    		$password = $this->input->post('password');

    		if(empty($company) && empty($no_hp)){
    			$this->m_account->register_talent($nama,$email,$password);
    		}else{
    			$this->m_account->register_company($nama,$company,$no_hp,$email,$password);
    		}
    		echo $this->session->set_flashdata('msg','success');
    		redirect('Login');
    		
    	}
	}
?>