<?php
	/**
	 * 
	 */
	class Talent extends CI_Controller
	{
		
		function __construct(){
        	parent:: __construct();

          $this->load->model('m_talent');
    	}

    	function index(){
    		 if($this->session->userdata('akses') == 1){
               $this->load->view('v_header_R'); 
               $this->load->view('v_email'); 
            }else{
                redirect('Login');
            }
        	
    	}

        function profile(){
            if($this->session->userdata('akses') == 1){
               $this->load->view('v_header_R'); 
               $this->load->view('v_talentD'); 
            }else{
                redirect('Login');
            }
        }

        function saveProfile(){
            $sumJP = "";
            $sumL = "";
            $sumB = "";
            $sumS = "";
            $sumD = "";
            $sumF = "";
            $sumNP = "";
            $sumPE = "";
            $sumLB = "";

            $question1 = $this->input->post('q1');
            $question2 = $this->input->post('q2');
            $question3 = $this->input->post('q3');
            $question4 = $this->input->post('q4');
            $question5 = $this->input->post('q5');

            $jenis_pekerjaan = $this->input->post('s1');
            $sizeJP = sizeof($jenis_pekerjaan);
            for($i=0; $i < $sizeJP; $i++){
              $sumJP.=$jenis_pekerjaan[$i].";";
            }
            $salary = $this->input->post('salary');

            $universitas = $this->input->post('univertas');
            $jurusan = $this->input->post('jurusan');
            $tahun_lulus = $this->input->post('tahun_lulus');
            $ipk = $this->input->post('ipk');

            $lokasi = $this->input->post('s2');
            $sizeL = sizeof($lokasi);
            for($i=0; $i < $sizeL; $i++){
              $sumL.=$lokasi[$i].";";
            }

            $bahasa = $this->input->post('s3');
            $sizeB = sizeof($bahasa);
            for($i=0; $i < $sizeB; $i++){
              $sumB.=$bahasa[$i].";";
            }
            $skillLanguage = $this->input->post('s5');
            $sizeS = sizeof($skillLanguage);
            for($i=0; $i < $sizeS; $i++){
              $sumS.=$skillLanguage[$i].";";
            }
            $skillDatabase = $this->input->post('s8');
            $sizeD = sizeof($skillDatabase);
            for($i=0; $i < $sizeD; $i++){
              $sumD.=$skillDatabase[$i].";";
            } 
            $skillFramework = $this->input->post('s9');
            $sizeF = sizeof($skillFramework);
            for($i=0; $i < $sizeF; $i++){
              $sumF.=$skillFramework[$i].";";
            }  

            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $sizeNP = sizeof($nama_perusahaan);
            for($i=0; $i < $sizeNP; $i++){
              $sumNP.=$nama_perusahaan[$i].";";
            }
            $pekerjaan_experience = $this->input->post('pekerjaan_experience');
            $sizePE = sizeof($pekerjaan_experience);
            for($i=0; $i < $sizePE; $i++){
              $sumPE.=$pekerjaan_experience[$i].";";
            }
            $lamanya_berkerja = $this->input->post('lamanya_berkerja');
            $sizeLB = sizeof($lamanya_berkerja);
            for($i=0; $i < $sizeLB; $i++){
              $sumLB.=$lamanya_berkerja[$i].";";
            }                 

            $talent_id = $this->session->userdata('id');
            $this->m_talent->save_profile($question1,$question2,$question3,$question4,$question5,$sumJP,$salary,$universitas,$jurusan,$tahun_lulus,$ipk,$sumL,$sumB,$sumS,$sumD,$sumF,$sumNP,$sumPE,$sumLB,$talent_id);

            

            

            echo $this->session->set_flashdata('msg','success');
            redirect('Talent');
        }

	}
?>