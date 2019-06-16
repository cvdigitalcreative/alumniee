<?php
	/**
	 * 
	 */
	class Company extends CI_Controller
	{
		
		function __construct(){
        	parent:: __construct();

          $this->load->model('m_company');
          $this->load->model('M_proses');
    	}

    	function index(){ //view inbox card campaign
        
            if($this->session->userdata('akses') == 2){
               $this->load->view('v_header_C'); 
               $this->load->view('v_campaign'); 
            }else{
                redirect('Login');
            }
        	
    	}

      function campaign(){ //View Form Campaign
          if($this->session->userdata('akses') == 2){
             $this->load->view('v_header_C'); 
             $this->load->view('v_companyD'); 
          }else{
              redirect('Login');
          }   
      }

      function saveCampaign(){
        $sumL = ""; $sumJP = ""; $sumJ = ""; $sumB = ""; $sumS = ""; $sumD = ""; $sumF = ""; $sumQ = "";

        //Get value from form
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $url = $this->input->post('url');  
        $companyd = $this->input->post('companyd');
        $roledc = $this->input->post('roledc');
        $salary = $this->input->post('salary');
        $ipk = $this->input->post('minimun_ipk');

        $jenis_pekerjaan = $this->input->post('sc1');
        $sizeJP = sizeof($jenis_pekerjaan);
        for($i=0; $i < $sizeJP; $i++){
          $sumJP.=$jenis_pekerjaan[$i].";";
        }

        $lokasi = $this->input->post('sc2');
        $sizeL = sizeof($lokasi);
        for($i=0; $i < $sizeL; $i++){
          $sumL.=$lokasi[$i].";";
        }

        $jurusan = $this->input->post('sc3');
        $sizeJ = sizeof($jurusan);
        for($i=0; $i < $sizeJ; $i++){
          $sumJ.=$jurusan[$i].";";
        }

        $bahasa = $this->input->post('sc5');
        $sizeB = sizeof($bahasa);
        for($i=0; $i < $sizeB; $i++){
          $sumB.=$bahasa[$i].";";
        }
        
        $skillLanguage = $this->input->post('sc6');
        $sizeS = sizeof($skillLanguage);
        for($i=0; $i < $sizeS; $i++){
          $sumS.=$skillLanguage[$i].";";
        }

        $skillDatabase = $this->input->post('sc8[]');
        $sizeD = sizeof($skillDatabase);
        for($i=0; $i < $sizeD; $i++){
          $sumD.=$skillDatabase[$i].";";
        }

        $skillFramework = $this->input->post('sc9[]');
        $sizeF = sizeof($skillFramework);
        for($i=0; $i < $sizeF; $i++){
          $sumF.=$skillFramework[$i].";";
        }

        $question = $this->input->post('ques[]');
        $sizeQ = sizeof($question);
        for($i=0; $i < $sizeQ; $i++){
          $sumQ.=$question[$i].";";
        }

        $company_id = $this->session->userdata('id');
        $this->m_company->save_campaign($nama_pekerjaan,$url,$companyd,$roledc,$salary,$ipk,$sumJP,$sumL,$sumJ,$sumB,$sumS,$sumD,$sumF,$sumQ,$company_id);
        $x=$this->db->query("SELECT * FROM `campaign`ORDER BY `campaign`.`campaign_id`  DESC LIMIT 1");
        $z=$x->row_array();
        $campaign_id=$z['campaign_id'];

        

        $bobot_candidate = $this->M_proses->get_candidate();
        $id = $this->M_proses->get_id();

        // PRE-PROCESSING DB JADI ARRAY 'TEMP'
        $temp = [];
        $count = 0;
        foreach ($bobot_candidate as $key => $value) {
          foreach ($value as $key2 => $value2) {
            $temp[$count]['salary'] = $bobot_candidate[$count]['salary'];
            $temp[$count]['ipk'] = $bobot_candidate[$count]['ipk'];
            $temp[$count]['language'] = explode(";",$bobot_candidate[$count]['bahasa']);
            array_pop($temp[$count]['language']);
            $temp[$count]['skill']['pl'] = explode(";",$bobot_candidate[$count]['skillLanguage']);
            array_pop($temp[$count]['skill']['pl']);
            $temp[$count]['skill']['db'] = explode(";",$bobot_candidate[$count]['skillDatabase']);
            array_pop($temp[$count]['skill']['db']);
            $temp[$count]['skill']['fw'] = explode(";",$bobot_candidate[$count]['skillFramework']);
            array_pop($temp[$count]['skill']['fw']);
          }
          $count++;
        }
        //BOBOT PERUSAHAAN
        $company["salary"] = $salary;
        $company["ipk"] = $ipk;
        $company["language"] = explode(";", $sumB);
        array_pop($company["language"]);
        $company["skill"]['pl'] = explode(";", $sumS);
        array_pop($company["skill"]['pl']);
        $company["skill"]['db'] = explode(";", $sumD);
        array_pop($company["skill"]['db']);
        $company["skill"]['fw'] = explode(";", $sumF);
        array_pop($company["skill"]['fw']);

        //BOBOT CANDIDATE
        function hitung_bobot($company,$candidate)
        {
          // BOBOT SALARY
          $selisih_salary = abs($company['salary'] - $candidate['salary'])/1000000;

          if($company['salary']>$candidate['salary'])
            $bobot_salary = 5;
          elseif($selisih_salary == 0)
            $bobot_salary = 4;
          elseif(1<=$selisih_salary && $selisih_salary<=3)
            $bobot_salary = 3;
          elseif(4<=$selisih_salary && $selisih_salary<=7)
            $bobot_salary = 2;
          elseif ($selisih_salary > 7)
            $bobot_salary = 1;

          // BOBOT IPK
          $range_ipk = 4 - $company['ipk'];
          $kelipatan_ipk = $range_ipk/5;
          $batas1 = $company['ipk']+ $kelipatan_ipk;
          $batas2 = $company['ipk']+ 2*$kelipatan_ipk;
          $batas3 = $company['ipk']+ 3*$kelipatan_ipk;
          $batas4 = $company['ipk']+ 4*$kelipatan_ipk;
          $batas5 = $company['ipk']+ 5*$kelipatan_ipk;
          if($company['ipk'] <=  $candidate['ipk'] &&  $candidate['ipk']<$batas1)
            $bobot_ipk = 1;
          elseif($batas1 <= $candidate['ipk'] && $candidate['ipk'] < $batas2)
            $bobot_ipk = 2;
          elseif($batas2 <= $candidate['ipk'] && $candidate['ipk'] < $batas3)
            $bobot_ipk = 3;
          elseif($batas3 <= $candidate['ipk'] && $candidate['ipk'] < $batas4)
            $bobot_ipk = 4;
          elseif($batas4 <= $candidate['ipk'] && $candidate['ipk'] <= $batas5)
            $bobot_ipk = 5;
          else
            $bobot_ipk = 0;

          // BOBOT LANGUAGE
          $selisih_language = count(array_intersect($candidate['language'], $company['language']));

          if($selisih_language == 0) {
            $bobot_language = 0;
          }
          else
          {
            $selisih_language = abs($selisih_language - count($company['language'])); 
            if($selisih_language == 0)
            {
              if(count($candidate['language'])>count($company['language']))
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
          $selisih_skill_pl = count(array_intersect($candidate['skill']['pl'], $company['skill']['pl']));

          if($selisih_skill_pl == 0) {
            $bobot_skill_pl = 0;
          }
          else
          {
            $selisih_skill_pl = abs($selisih_skill_pl - count($company['skill']['pl']));  
            if($selisih_skill_pl == 0)
            {
              if(count($candidate['skill']['pl'])>count($company['skill']['pl']))
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

          $selisih_skill_db = count(array_intersect($candidate['skill']['db'], $company['skill']['db']));

          if($selisih_skill_db == 0) {
            $bobot_skill_db = 0;
          }
          else
          {
            $selisih_skill_db = abs($selisih_skill_db - count($company['skill']['db']));  
            if($selisih_skill_db == 0)
            {
              if(count($candidate['skill']['db'])>count($company['skill']['db']))
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

          $selisih_skill_fw = count(array_intersect($candidate['skill']['fw'], $company['skill']['fw']));

          if($selisih_skill_fw == 0) {
            $bobot_skill_fw = 0;
          }
          else
          {
            $selisih_skill_fw = abs($selisih_skill_fw - count($company['skill']['fw']));  
            if($selisih_skill_fw == 0)
            {
              if(count($candidate['skill']['fw'])>count($company['skill']['fw']))
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

        //ARRAY BOBOT SELURUH CANDIDATE
        $candidate = [];
        foreach ($temp as $key=>$value) {
          array_push($candidate, hitung_bobot($company,$value));
        }

        $bobot_salary = 10;
        $bobot_ipk = 30;
        $bobot_language = 15;
        $bobot_skill = 20;
        $W = [$bobot_salary,$bobot_ipk,$bobot_language,$bobot_skill];

        //UBAH INDEX ARRAY BOBOT JADI INTEGER
        $GLOBALS['y'] = [];
        foreach ($candidate as $key => $value) {
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

        echo "<pre>";
        //print_r($id) ;
        echo "sebelum ranking: \n\n";
        print_r ($v);
        echo "</pre>";

        foreach ($v as $key => $value) {
          $rank[$key] = array('talent_id'=>$id[$key]['talent_id'], 'value'=>$value );
        }
        
        function method1($a,$b) 
        {
        return ($a["value"] >= $b["value"]) ? -1 : 1;
        }
        usort($rank, "method1");
        
        foreach ($rank as $key => $value) {
          if($value['value']>=0.1)
          {
            $new_rank[$key]['talent_id'] = $value['talent_id'];
            $new_rank[$key]['value'] = round((float)$value['value'] * 100 );
          }
        }
        if(empty($new_rank))
          $new_rank = [];

          foreach ($new_rank as $key => $value) {
            $this->m_company->saveBC($campaign_id,$value['talent_id'],$value['value']);
          }

          echo $this->session->set_flashdata('msg','success');
          redirect('Company');
                 
          }


	}
?>