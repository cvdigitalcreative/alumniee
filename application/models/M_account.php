<?php
	/**
	 * 
	 */
	class M_account extends CI_Model
	{
		
		function register_talent($nama,$email,$password){
			return $this->db->query("INSERT INTO talent(nama,email,password) VALUES ('$nama','$email','$password')");
		}

		function register_company($nama,$company,$no_hp,$email,$password){
			return $this->db->query("INSERT INTO company(nama,nama_company,no_hp,email,password) VALUES ('$nama','$company','$no_hp','$email','$password')");
		}

		function check_userT($email,$password){
			return $this->db->query("SELECT * FROM talent WHERE email='$email' AND password='$password' LIMIT 1" );;
		}

		function check_userC($email,$password){
			return $this->db->query("SELECT * FROM company WHERE email='$email' AND password='$password' LIMIT 1");;
		}
	}
?>