<?php 
	
	/**
	 * 
	 */
	class M_company extends CI_Model
	{

		function getnameCampaign($campaign_id){
			return $this->db->query("SELECT * FROM campaign WHERE campaign_id = '$campaign_id'");
		}
		
		function save_campaign($nama_pekerjaan,$url,$companyd,$roledc,$salary,$ipk,$jenis_pekerjaan,$lokasi,$jurusan,$bahasa,$skillLanguage,$skillDatabase,$skillFramework,$company_id){
			$this->db->query("INSERT INTO campaign(nama_pekerjaan,url,companyd,roledc,salary,ipk,jenis_pekerjaan,lokasi,jurusan,bahasa,skillLanguage,skillDatabase,skillFramework,company_id) VALUES ('$nama_pekerjaan','$url','$companyd','$roledc','$salary','$ipk','$jenis_pekerjaan','$lokasi','$jurusan','$bahasa','$skillLanguage','$skillDatabase','$skillFramework','$company_id')");
		}

		function saveBC($campaign_id,$talent_id,$matching_talent){
			$this->db->query("INSERT INTO broadcast_campaign(campaign_id,talent_id,matching_persentase) VALUES('$campaign_id','$talent_id','$matching_talent')");
		}

		function RejectBC($talent_id){
			$this->db->query("UPDATE broadcast_campaign SET status = 2 WHERE talent_id = '$talent_id'");
		}

		function getCampaign($company_id){
			$final['campaignLive'] =  $this->db->query("SELECT * FROM campaign WHERE company_id = '$company_id' AND campaign_status = '0' ORDER BY campaign_id DESC")->result_array();
			$count = 0;
			foreach ($final['campaignLive'] as $key => $value) {
				$value1 = $this->db->query("SELECT * FROM broadcast_campaign WHERE campaign_id = ".$value['campaign_id']." ORDER BY campaign_id  DESC")->num_rows();
				$value2 = $this->db->query("SELECT * FROM broadcast_campaign WHERE campaign_id = ".$value['campaign_id']." AND status = '1' ORDER BY campaign_id  DESC")->num_rows();
				$value3 = $this->db->query("SELECT * FROM broadcast_campaign WHERE campaign_id = ".$value['campaign_id']." AND status = '2' ORDER BY campaign_id  DESC")->num_rows();
				$final['campaignLive'][$count]['countMatching']=$value1;
				$final['campaignLive'][$count]['countAcc']=$value2;
				$final['campaignLive'][$count]['countRej']=$value3;	

				$count++;
					
			}

			$final['campaignComplete'] =  $this->db->query("SELECT * FROM campaign WHERE company_id = '$company_id' AND campaign_status = '1' ORDER BY campaign_id DESC")->result_array();
			$count = 0;
			foreach ($final['campaignComplete'] as $key => $value) {
				$value1 = $this->db->query("SELECT * FROM broadcast_campaign WHERE campaign_id = ".$value['campaign_id']." ORDER BY campaign_id  DESC")->num_rows();
				$value2 = $this->db->query("SELECT * FROM broadcast_campaign WHERE campaign_id = ".$value['campaign_id']." AND status = '1' ORDER BY campaign_id  DESC")->num_rows();
				$value3 = $this->db->query("SELECT * FROM broadcast_campaign WHERE campaign_id = ".$value['campaign_id']." AND status = '2' ORDER BY campaign_id  DESC")->num_rows();
				$final['campaignComplete'][$count]['countMatching']=$value1;
				$final['campaignComplete'][$count]['countAcc']=$value2;
				$final['campaignComplete'][$count]['countRej']=$value3;	

				$count++;
					
			}

			return $final;
		}

		function tutupLowongan($campaign_id){
			$this->db->query("UPDATE campaign SET campaign_status = 1 WHERE campaign_id = '$campaign_id'");
		}

		function upStatus($campaign_id,$talent_id,$wawancara=NULL,$jalur=NULL,$status){
			$this->db->query("UPDATE broadcast_campaign SET status = '$status', jadwal_wawancara = '$wawancara', via_wawancara='$jalur' WHERE campaign_id = '$campaign_id' AND talent_id='$talent_id'");
		}

		function application($campaign_id,$status){
			$data = $this->db->query("SELECT * FROM broadcast_campaign a,talent b,profile c WHERE a.campaign_id = '$campaign_id' AND a.status = '$status' AND a.talent_id = b.talent_id AND b.talent_id = c.talent_id")->result_array();
			$count = 0;
			foreach ($data as $key => $value) {
				$value1 = $this->db->query("SELECT * FROM question WHERE campaign_id = ".$value['campaign_id']." AND talent_id = ".$value['talent_id']." ORDER BY campaign_id  DESC")->result_array();

				$data[$count]['question']=$value1;
				$count++;		
			}

			return $data;

		}

		function savequestion($pertanyaan,$talent_id,$campaign_id){
			$this->db->query("INSERT INTO question(pertanyaan,talent_id,campaign_id) VALUES ('$pertanyaan','$talent_id','$campaign_id')");
		}

	}
	
?>