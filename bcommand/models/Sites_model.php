<?php

class Sites_Model extends CI_Model{
	
	function Sites_Model()
	{
		parent::__construct();
	}
	
	function create($vars)
	{
		/*$data = array('page_name'=>$vars['page_name'],
			      'page_handle'=>$vars['page_handle'],
			      'page_title'=>$vars['page_title'],
			      'page_title_fr'=>$vars['page_title_fr'],
			      'h1'=>$vars['h1'],
			      'h1_fr'=>$vars['h1_fr'],
			      'keywords'=>$vars['keywords'],
			      'canonical'=>$vars['canonical'],
			      'contents'=>$vars['contents'],
			      'contents_fr'=>$vars['contents_fr'],
			      'content_position'=> empty($vars['content_position']) ? 'bottom':$vars['content_position'],
			      'banner_id'=>$vars['banner_id'],
			      'description'=>$vars['description']);
		$this->db->insert('pages',$data);
		
		return $this->db->insert_id();*/
	}
	
	function get_website($site)
	{
		$this->db->from('websites');
		$this->db->where('website_address',$site);
		//$this->db->order_by('page_name','asc');
		$query = $this->db->get();
		return $query->row();
	}
	
	
	
	
	
} 