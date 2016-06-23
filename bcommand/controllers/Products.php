<?php

class Products extends CI_Controller {

	function Products()
	{
		parent::__construct();
		
		
		$this->load->Model('Product_model');
		$this->load->library('form_validation');
		
		$this->load->Model('Sites_model');
		
				
		
	}
	
	function index()
	{
		use_ssl(FALSE);
		
		$site = $_SERVER['SERVER_NAME'];
		$data['website'] = $this->Sites_model->get_website($site);
		$this->load->view('products',$data);	
		
		
	}
	
	function search()
    {
		use_ssl(FALSE);
		$site = $_SERVER['SERVER_NAME'];
		$data['website'] = $this->Sites_model->get_website($site);
		$search = $this->input->post('search');
		$data['products'] = $this->Product_model->get_search(100,array('search'=>$search));
		$data['prod1'] = $this->Product_model->get_recipe1(100,array('search'=>$search));
		$data['prod2'] = $this->Product_model->get_recipe2(100,array('search'=>$search));
		$data['prod3'] = $this->Product_model->get_recipe3(100,array('search'=>$search));
		$data['picture1'] = $this->Product_model->get_picture1(100,array('search'=>$search));
		$data['picture2'] = $this->Product_model->get_picture2(100,array('search'=>$search));
		$data['picture3'] = $this->Product_model->get_picture3(100,array('search'=>$search));
		$this->load->view('products',$data);	
        
     }
	 
	 
	
	 function tracking()
    {
		use_ssl(FALSE);
		$site = $_SERVER['SERVER_NAME'];
		$data['website'] = $this->Sites_model->get_website($site);
		$search = $this->input->post('search');
		$data['tracking'] = $this->Product_model->get_tracking(100,array('tracking'=>$tracking));
		$this->load->view('tracking',$data);	
        
     }

	function notfound()
	{
		$site = $_SERVER['SERVER_NAME'];
		$data['website'] = $this->Sites_model->get_website($site);
		
		$data['page'] = $this->Pages_model->return_page('404');
		set_status_header('404');
		$this->load->view('404.php',$data);
	}
	
	function test()
	{
		echo showCalendar(1);
	}
	

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */