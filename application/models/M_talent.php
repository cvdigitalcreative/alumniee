<?php 
	
	/**
	 * 
	 */
	class M_talent extends CI_Model
	{
		
		function save_profile($question1,$question2,$question3,$question4,$question5,$jenis_pekerjaan,$salary,$universitas,$jurusan,$tahun_lulus,$ipk,$lokasi,$bahasa,$skillLanguage,$skillDatabase,$skillFramework,$nama_perusahaan,$pekerjaan_experience,$lamanya_berkerja,$talent_id){
				$this->db->query("INSERT INTO profile(question1,question2,question3,question4,question5,jenis_pekerjaan,salary,universitas,jurusan,tahun_lulus,ipk,lokasi,bahasa,skillLanguage,skillDatabase,skillFramework,nama_perusahaan,pekerjaan_experience,lamanya_berkerja,talent_id) VALUES ('$question1','$question2','$question3','$question4','$question5','$jenis_pekerjaan','$salary','$universitas','$jurusan','$tahun_lulus','$ipk','$lokasi','$bahasa','$skillLanguage','$skillDatabase','$skillFramework','$nama_perusahaan','$pekerjaan_experience','$lamanya_berkerja','$talent_id')");
		}

		function getCampaignTalent($talent_id,$status){
			$data = $this->db->query("SELECT * FROM broadcast_campaign a,campaign b WHERE a.talent_id = '$talent_id' AND a.status = '$status' AND a.campaign_id = b.campaign_id ORDER BY a.matching_persentase ASC")->result_array();
			$count = 0;
			foreach ($data as $key => $value) {
				$value1 = $this->db->query("SELECT * FROM question WHERE campaign_id = ".$value['campaign_id']." AND talent_id = '$talent_id' ORDER BY campaign_id  DESC")->result_array();

				$data[$count]['question']=$value1;
				$count++;		
			}
			return $data;
		}

		function getAppTalent($talent_id){
			$data = $this->db->query("SELECT * FROM broadcast_campaign a,campaign b WHERE a.talent_id = '$talent_id' AND a.status = '1' AND a.campaign_id = b.campaign_id OR a.status = '3' AND a.campaign_id = b.campaign_id OR a.status = '4' AND a.campaign_id = b.campaign_id OR a.status = '5' AND a.campaign_id = b.campaign_id ORDER BY a.matching_persentase ASC")->result_array();
			$count = 0;
			foreach ($data as $key => $value) {
				$value1 = $this->db->query("SELECT * FROM question WHERE campaign_id = ".$value['campaign_id']." AND talent_id = '$talent_id' ORDER BY campaign_id  DESC")->result_array();

				$data[$count]['question']=$value1;
				$count++;		
			}
			return $data;
		}

		function changeUp($campaign_id,$talent_id){
			$this->db->query("UPDATE broadcast_campaign SET status = 1 WHERE campaign_id = '$campaign_id' AND talent_id = '$talent_id'");
		}

		function UpQuestion($campaign_id,$talent_id,$answer,$question_id){				
			$this->db->query("UPDATE question SET jawaban = '$answer' WHERE talent_id = '$talent_id' AND question_id = '$question_id'");

		}
	}
	
?>