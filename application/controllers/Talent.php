<?php
	/**
	 * 
	 */
	class Talent extends CI_Controller
	{
		
		function __construct(){
        	parent:: __construct();

            $this->load->model('m_talent');
            $this->load->model('m_company');
            $this->load->model('M_proses');
    	}

        function campaign($talent_id){
            if($this->session->userdata('akses') == 1){
                $x['status'] = $status = 0;
                $x['talent_id'] = $talent_id;
                $x['data1'] = $this->m_talent->getCampaignTalent($talent_id,0);
                $this->load->view('v_header_R'); 
                $this->load->view('v_emailT',$x); 
            }else{
                redirect('Login');
            }   
        }

        function App($talent_id){
            if($this->session->userdata('akses') == 1){
                $x['talent_id'] = $talent_id;
                $x['data1'] = $this->m_talent->getAppTalent($talent_id);
                $this->load->view('v_header_R'); 
                $this->load->view('v_emailT',$x); 
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

        function Up($status){
            $campaign_id = $this->input->post("campaign_id");
            $talent_id = $this->input->post("talent_id");
             $this->m_company->upStatus($campaign_id,$talent_id,"","",$status);
           redirect('Talent/Campaign/'.$talent_id);
        }

        function upTalent(){
            $question_id = $this->input->post('question_id');
            $answer = $this->input->post('jawaban');
            $talent_id = $this->input->post('talent_id');
            $campaign_id = $this->input->post('campaign_id');
            $count = sizeof($question_id);
            for($i = 0; $i < $count; $i++){
                $this->m_talent->UpQuestion($campaign_id,$talent_id,$answer[$i],$question_id[$i]);
            }
            $this->m_talent->changeUp($campaign_id,$talent_id);
            redirect('Talent/Campaign/'.$talent_id);
        }

        function saveProfile(){
            $sumJP = ""; $sumL = ""; $sumB = ""; $sumS = ""; $sumD = ""; $sumF = ""; $sumNP = ""; $sumPE = ""; $sumLB = "";

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

            $bobot_campaign = $this->M_proses->get_campaign();
            $id = $this->M_proses->get_id_campaign();
            
            // PRE-PROCESSING DB JADI ARRAY 'TEMP'
            $temp = [];
            $count = 0;
            foreach ($bobot_campaign as $key => $value) {
              foreach ($value as $key2 => $value2) {
                $temp[$count]['salary'] = $bobot_campaign[$count]['salary'];
                $temp[$count]['ipk'] = $bobot_campaign[$count]['ipk'];
                $temp[$count]['language'] = explode(";",$bobot_campaign[$count]['bahasa']);
                array_pop($temp[$count]['language']);
                $temp[$count]['skill']['pl'] = explode(";",$bobot_campaign[$count]['skillLanguage']);
                array_pop($temp[$count]['skill']['pl']);
                $temp[$count]['skill']['db'] = explode(";",$bobot_campaign[$count]['skillDatabase']);
                array_pop($temp[$count]['skill']['db']);
                $temp[$count]['skill']['fw'] = explode(";",$bobot_campaign[$count]['skillFramework']);
                array_pop($temp[$count]['skill']['fw']);
              }
              $count++;
            }
            //BOBOT CANDIDATE
            $candidate["salary"] = $salary;
            $candidate["ipk"] = $ipk;
            $candidate["language"] = explode(";", $sumB);
            array_pop($candidate["language"]);
            $candidate["skill"]['pl'] = explode(";", $sumS);
            array_pop($candidate["skill"]['pl']);
            $candidate["skill"]['db'] = explode(";", $sumD);
            array_pop($candidate["skill"]['db']);
            $candidate["skill"]['fw'] = explode(";", $sumF);
            array_pop($candidate["skill"]['fw']);
            //BOBOT PERUSAHAAN
            function hitung_bobot($candidate,$company)
            {
              // BOBOT SALARY
              $selisih_salary = abs($candidate['salary'] - $company['salary'])/1000000;

              if($candidate['salary']>$company['salary'])
                $bobot_salary = 5;
              elseif($selisih_salary == 0)
                $bobot_salary = 4;
              elseif(0.5<=$selisih_salary && $selisih_salary<=1)
                $bobot_salary = 3;
              elseif(1<=$selisih_salary && $selisih_salary<=1.5)
                $bobot_salary = 2;
              else//if (1.5<=$selisih_salary && $selisih_salary<=2)
                $bobot_salary = 1;

              // BOBOT IPK
              $range_ipk = 4 - $candidate['ipk'];
              $kelipatan_ipk = $range_ipk/5;
              $batas1 = $candidate['ipk']+ $kelipatan_ipk;
              $batas2 = $candidate['ipk']+ 2*$kelipatan_ipk;
              $batas3 = $candidate['ipk']+ 3*$kelipatan_ipk;
              $batas4 = $candidate['ipk']+ 4*$kelipatan_ipk;
              $batas5 = $candidate['ipk']+ 5*$kelipatan_ipk;
              if($candidate['ipk'] <=  $company['ipk'] &&  $company['ipk']<$batas1)
                $bobot_ipk = 1;
              elseif($batas1 <= $company['ipk'] && $company['ipk'] < $batas2)
                $bobot_ipk = 2;
              elseif($batas2 <= $company['ipk'] && $company['ipk'] < $batas3)
                $bobot_ipk = 3;
              elseif($batas3 <= $company['ipk'] && $company['ipk'] < $batas4)
                $bobot_ipk = 4;
              elseif($batas4 <= $company['ipk'] && $company['ipk'] <= $batas5)
                $bobot_ipk = 5;
              else
                $bobot_ipk = 0;

              // BOBOT LANGUAGE
              $selisih_language = count(array_intersect($company['language'], $candidate['language']));

              if($selisih_language == 0) {
                $bobot_language = 0;
              }
              else
              {
                $selisih_language = abs($selisih_language - count($candidate['language'])); 
                if($selisih_language == 0)
                {
                  if(count($company['language'])>count($candidate['language']))
                    $bobot_language = 5;
                  else
                    $bobot_language = 4;
                }
                elseif(1<=$selisih_language && $selisih_language<=2)
                  $bobot_language = 3;
                elseif($selisih_language == 3)
                  $bobot_language = 2;
                elseif ($selisih_language > 3)
                  $bobot_language = 1;
              }

              // BOBOT SKILL
              $selisih_skill_pl = count(array_intersect($company['skill']['pl'], $candidate['skill']['pl']));

              if($selisih_skill_pl == 0) {
                $bobot_skill_pl = 0;
              }
              else
              {
                $selisih_skill_pl = abs($selisih_skill_pl - count($candidate['skill']['pl']));  
                if($selisih_skill_pl == 0)
                {
                  if(count($company['skill']['pl'])>count($candidate['skill']['pl']))
                    $bobot_skill_pl = 5;
                  else
                    $bobot_skill_pl = 4;
                }
                elseif(1<=$selisih_skill_pl && $selisih_skill_pl<=2)
                  $bobot_skill_pl = 3;
                elseif($selisih_skill_pl == 3)
                  $bobot_skill_pl = 2;
                elseif ($selisih_skill_pl > 3)
                  $bobot_skill_pl = 1;
              }

              $selisih_skill_db = count(array_intersect($company['skill']['db'], $candidate['skill']['db']));

              if($selisih_skill_db == 0) {
                $bobot_skill_db = 0;
              }
              else
              {
                $selisih_skill_db = abs($selisih_skill_db - count($candidate['skill']['db']));  
                if($selisih_skill_db == 0)
                {
                  if(count($company['skill']['db'])>count($candidate['skill']['db']))
                    $bobot_skill_db = 5;
                  else
                    $bobot_skill_db = 4;
                }
                elseif(1<=$selisih_skill_db && $selisih_skill_db<=2)
                  $bobot_skill_db = 3;
                elseif($selisih_skill_db == 3)
                  $bobot_skill_db = 2;
                elseif ($selisih_skill_db > 3)
                  $bobot_skill_db = 1;
              }

              $selisih_skill_fw = count(array_intersect($company['skill']['fw'], $candidate['skill']['fw']));

              if($selisih_skill_fw == 0) {
                $bobot_skill_fw = 0;
              }
              else
              {
                $selisih_skill_fw = abs($selisih_skill_fw - count($candidate['skill']['fw']));  
                if($selisih_skill_fw == 0)
                {
                  if(count($company['skill']['fw'])>count($candidate['skill']['fw']))
                    $bobot_skill_fw = 5;
                  else
                    $bobot_skill_fw = 4;
                }
                elseif(1<=$selisih_skill_fw && $selisih_skill_fw<=2)
                  $bobot_skill_fw = 3;
                elseif($selisih_skill_fw == 3)
                  $bobot_skill_fw = 2;
                elseif ($selisih_skill_fw > 3)
                  $bobot_skill_fw = 1;
              }

              $bobot_skill = ($bobot_skill_pl + $bobot_skill_db + $bobot_skill_fw)/3;

              return array($bobot_salary,$bobot_ipk,$bobot_language,$bobot_skill);;
            }

            //ARRAY BOBOT SELURUH company
            $company = [];
            foreach ($temp as $key=>$value) {
              array_push($company, hitung_bobot($candidate,$value));
            }

            $bobot_salary = 10;
            $bobot_ipk = 30;
            $bobot_language = 15;
            $bobot_skill = 20;
            $W = [$bobot_salary,$bobot_ipk,$bobot_language,$bobot_skill];

            //UBAH INDEX ARRAY BOBOT JADI INTEGER
            $GLOBALS['y'] = [];
            foreach ($company as $key => $value) {
              $count = 0;
              foreach ($value as $key2 => $value2) {
                $GLOBALS['y'][$key][$count] = $value2;
                $count++;
              }
            }

            $z = array();

            function sum_square_root($i)
            {
              $temp = 0;
              for ($j = 0; $j < count($GLOBALS['y']); $j++) {
                $temp+=pow($GLOBALS['y'][$j][$i], 2);
              }
              return sqrt($temp);
            }
            for ($i=0; $i < count($GLOBALS['y'][0]) ; $i++) { 
              for ($j=0; $j < count($GLOBALS['y']); $j++) { 
                if(sum_square_root($i)==0)
                  $z[$j][$i] = 0;
                else
                  $z[$j][$i] = $GLOBALS['y'][$j][$i] / sum_square_root($i);
              }
            }

            for ($i=0; $i < count($GLOBALS['y'][0]); $i++) { 
              for ($j=0; $j < count($GLOBALS['y']); $j++) { 
                $z[$j][$i] = $z[$j][$i]*$W[$i];
              }
            }
            
            $y_max = [];
            for ($j=0; $j < count($GLOBALS['y'][0]); $j++) { 
              $col = [];
              for ($i = 0; $i < count($GLOBALS['y']); $i++) {
                array_push($col, $z[$i][$j]);
              }
              $y_max[$j] = max($col);
            }
            $y_min = [];
            for ($j=0; $j < count($GLOBALS['y'][0]); $j++) { 
              for ($i = 0; $i < count($GLOBALS['y']); $i++) {
                array_push($col, $z[$i][$j]);
              }
              $y_min[$j] = min($col);
            }
            $d_plus = [];
            for ($i=0; $i < count($GLOBALS['y']); $i++) { 
              $temp = 0;
              for ($j=0; $j < count($GLOBALS['y'][0]); $j++) { 
                $temp+= pow($y_max[$j]-$z[$i][$j], 2);
              }
              $d_plus[$i] = sqrt($temp);
            }
            $d_neg = [];
            for ($i=0; $i < count($GLOBALS['y']); $i++) { 
              $temp = 0;
              for ($j=0; $j < count($GLOBALS['y'][0]); $j++) { 
                $temp+= pow($y_min[$j]-$z[$i][$j], 2);
              }
              $d_neg[$i] = sqrt($temp);
            }
            $v = [];
            for ($i=0; $i < count($d_plus) ; $i++) { 
              $v[$i] = $d_neg[$i] / ($d_neg[$i]+$d_plus[$i]);
            }

           

            foreach ($v as $key => $value) {
              $rank[$key] = array('campaign_id'=>$id[$key]['campaign_id'], 'value'=>$value );
            }
            
            function method1($a,$b) 
            {
            return ($a["value"] >= $b["value"]) ? -1 : 1;
            }
            usort($rank, "method1");
            
            foreach ($rank as $key => $value) {
              if($value['value']>=0.5)
              {
                $new_rank[$key]['campaign_id'] = $value['campaign_id'];
                $new_rank[$key]['value'] = round((float)$value['value'] * 100 );
              }
            }

            $talent_id = $this->session->userdata('id');

            $this->m_talent->save_profile($question1,$question2,$question3,$question4,$question5,$sumJP,$salary,$universitas,$jurusan,$tahun_lulus,$ipk,$sumL,$sumB,$sumS,$sumD,$sumF,$sumNP,$sumPE,$sumLB,$talent_id);
            if(empty($new_rank))
              $new_rank = [];

            $this->m_company->deletetalent($talent_id);
             $this->m_company->delete_question($talent_id);
            foreach ($new_rank as $key => $value) {
                $question =   $this->m_company->get_question($value['campaign_id']);
                
                $sizeQ = sizeof($question);
                for($i=0; $i < $sizeQ; $i++){
                  $this->m_company->savequestion($question[$i]['pertanyaan'],$talent_id,$value['campaign_id']);
                }
                $this->m_company->saveBC($value['campaign_id'],$talent_id,$value['value']);
            }



        

            redirect('Talent/Campaign/'.$talent_id);
        }

	}
?>