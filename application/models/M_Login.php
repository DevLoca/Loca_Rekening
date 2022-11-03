<?php
	
	defined('BASEPATH') OR exit ('No  direct script access allowed');

	class M_Login extends CI_Model
	{
		
		public function select($table, $where = null)
		{
			if (!empty($where)) 
				$this->db->where($where);

			$query = $this->db->get($table);
			
			return $query; 
		}

		function proses_login($query){

			$this->db->reconnect();
			$query = $this->db->query($query);

			return $query;
		}

	}

?>