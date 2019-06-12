<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_account');
    }
    function index(){
        $this->load->view('v_header_LR');
        $this->load->view('v_login');
        // $this->load->view('v_footer');
    }

    function auth(){
        $email=strip_tags(str_replace("'", "", $this->input->post('email')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $cTalent=$this->m_account->check_userT($email,$password);
        $cCompany=$this->m_account->check_userC($email,$password);

        if($cTalent->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$email);
            $xcTalent=$cTalent->row_array();
            $this->session->set_userdata('akses','1');
            $id=$xcTalent['talent_id'];
            $nama=$xcTalent['nama'];
            $email = $xcTalent['email'];
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('id',$id);
            $this->session->set_userdata('nama',$nama);
            redirect('Talent');        
        }
        elseif($cCompany->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$email);
            $xcCompany=$cCompany->row_array();
            $this->session->set_userdata('akses','2');
            $id=$xcCompany['talent_id'];
            $nama=$xcCompany['nama'];
            $email = $xcCompany['email'];
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('id',$id);
            $this->session->set_userdata('nama',$nama);
            redirect('Company');        
        }
        else{
            redirect('Login/gagallogin');
        }
        
    }


        function gagallogin(){
            echo $this->session->set_flashdata('msgg','<p>Username Atau Password Salah!!!</p>');
            redirect('Login');
        }
        function logout(){
            $this->session->sess_destroy();
            $url=base_url('Login');
            redirect($url);
        }
}
