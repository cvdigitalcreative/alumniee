<?php 
	
	/**
	 * 
	 */
	class M_company extends CI_Model
	{
		
		function save_campaign($nama_pekerjaan,$url,$companyd,$roledc,$salary,$ipk,$jenis_pekerjaan,$lokasi,$jurusan,$bahasa,$skillLanguage,$skillDatabase,$skillFramework,$question,$company_id){
			$this->db->query("INSERT INTO campaign(nama_pekerjaan,url,companyd,roledc,salary,ipk,jenis_pekerjaan,lokasi,jurusan,bahasa,skillLanguage,skillDatabase,skillFramework,question,company_id) VALUES ('$nama_pekerjaan','$url','$companyd','$roledc','$salary','$ipk','$jenis_pekerjaan','$lokasi','$jurusan','$bahasa','$skillLanguage','$skillDatabase','$skillFramework','$question','$company_id')");
		}

		function saveBC($campaign_id,$talent_id,$matching_talent){
			$this->db->query("INSERT INTO broadcast_campaign(campaign_id,talent_id,matching_persentase) VALUES('$campaign_id','$talent_id','$matching_talent')");
		}
	}
	
?>