<?php 
	
	/**
	 * 
	 */
	class M_talent extends CI_Model
	{
		
		function save_profile($question1,$question2,$question3,$question4,$question5,$jenis_pekerjaan,$salary,$universitas,$jurusan,$tahun_lulus,$ipk,$lokasi,$bahasa,$skillLanguage,$skillDatabase,$skillFramework,$nama_perusahaan,$pekerjaan_experience,$lamanya_berkerja,$talent_id){
				$this->db->query("INSERT INTO profile(question1,question2,question3,question4,question5,jenis_pekerjaan,salary,universitas,jurusan,tahun_lulus,ipk,lokasi,bahasa,skillLanguage,skillDatabase,skillFramework,nama_perusahaan,pekerjaan_experience,lamanya_berkerja,talent_id) VALUES ('$question1','$question2','$question3','$question4','$question5','$jenis_pekerjaan','$salary','$universitas','$jurusan','$tahun_lulus','$ipk','$lokasi','$bahasa','$skillLanguage','$skillDatabase','$skillFramework','$nama_perusahaan','$pekerjaan_experience','$lamanya_berkerja','$talent_id')");
		}
	}
	
?>