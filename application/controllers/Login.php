<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        
    }
    function index(){
        $this->load->view('v_header');
        $this->load->view('v_login');
        // $this->load->view('v_footer');
    }

    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_login->cekuser($u,$p);
        if($cadmin->num_rows() > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcadmin=$cadmin->row_array();
             if($xcadmin['pengguna_level']=='1')
             {
                $this->session->set_userdata('akses','1');
                $id=$xcadmin['pengguna_id'];
                $user_nama=$xcadmin['pengguna_nama'];
                $email = $xcadmin['pengguna_email'];
                $this->session->set_userdata('email',$email);
                $this->session->set_userdata('idadmin',$id);
                $this->session->set_userdata('nama',$user_nama);
                redirect('Admin/Tulisan');
            }
             
        }

        else{
            redirect('Login/gagallogin');
        }
    }


        function gagallogin(){
            $url=base_url('Login');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Username Atau Password Salah</div>');
            redirect($url);
        }
        function logout(){
            $this->session->sess_destroy();
            $url=base_url('Login');
            redirect($url);
        }
}