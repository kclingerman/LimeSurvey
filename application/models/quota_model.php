<?php if ( ! defined('BASEPATH')) die('No direct script access allowed');

class Quota_model extends CI_Model {
	
	function getAllRecords($condition=FALSE)
	{
		if ($condition != FALSE)
		{
			$this->db->where($condition);	
		}
		
		$data = $this->db->get('quota');
		
		return $data;
	}

	function getSomeRecords($fields,$condition=FALSE)
	{
		foreach ($fields as $field)
		{
			$this->db->select($field);
		}
		if ($condition != FALSE)
		{
			$this->db->where($condition);	
		}
		
		$data = $this->db->get('quota');
		
		return $data;
	}

}