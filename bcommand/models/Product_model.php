<?php

class Product_Model extends CI_Model{
	
	function Product_Model()
	{
		parent::__construct();
	}
	
	function updateUrls($vars)
	{
		
		if(count($vars))
		{
			
			//die(print_r($vars));
			
			foreach($vars['url'] as $key=>$val)
			{
				
				if(empty($val))
				{
					$url=url_title(strtolower($vars['name'][$key]));
				}
				else
				{
					$url = $val;
				}
				
				$this->db->where('product_id',$key);
				$this->db->update('products',array('url'=>$url));				
			}
			
		return TRUE;
			
		}
			
	}
	
	
	
	function get_search($limit=100,$options=array())
	{
		
		
		$string = str_replace("'","\'",$options['search']);
		
		$string = trim($string);
		
			$this->db->select('products.*,websites.*');
			$this->db->from('products');
			$this->db->where('products.product_code',$string);
			$this->db->join('websites','products.db_id = websites.website_id');
			$where = "(websites.website_id = '1' OR websites.website_id = '7')";
			$this->db->where($where);

			$this->db->order_by('product_code DESC');


			$query = $this->db->get();
			
			return $query->result();
			
			
	}
	
	
	function get_recipe1($limit=100,$options=array()){
		
		$string = str_replace("'","\'",$options['search']);
		$string = trim($string);
		
			$this->db->select('products.*,product_recipe.*,websites.*,product_prices.*');
		
		
			
			$this->db->from('products');
			$this->db->where('products.product_code',$string);
			$this->db->join('websites','products.db_id = websites.website_id');
			$where = "(websites.website_id = '1' OR websites.website_id = '7')";
			$this->db->where($where);


			$this->db->join('product_recipe','products.product_id=product_recipe.product_id');
			$this->db->join('product_prices','products.product_id=product_prices.product_id');
			$wh ="(product_recipe.db_id = '1' OR product_recipe.db_id = '7')";
			$this->db->where($wh);
		
			$this->db->where('product_recipe.price_val','X');
			$this->db->group_by('product_recipe.recipe_record_id');
			$this->db->order_by('products.product_code DESC');
			$query = $this->db->get();
			return $query->result();
		
		
		
		}



		function get_recipe2($limit=100,$options=array()){
		
		$string = str_replace("'","\'",$options['search']);
		$string = trim($string);
		
			$this->db->select('products.*,product_recipe.*,websites.*,product_prices.*');
			
		
			
			$this->db->from('products');
			$this->db->where('products.product_code',$string);
			$this->db->join('websites','products.db_id = websites.website_id');
			$where = "(websites.website_id = '1' OR websites.website_id = '7')";
			$this->db->where($where);
	

			$this->db->join('product_recipe','products.product_id=product_recipe.product_id');
			$this->db->join('product_prices','products.product_id=product_prices.product_id');
			$wh ="(product_recipe.db_id = '1' OR product_recipe.db_id = '7')";
			$this->db->where($wh);
			
			$this->db->where('product_recipe.price_val','XX');
			$this->db->group_by('product_recipe.recipe_record_id');
			$this->db->order_by('products.product_code DESC');
			$query = $this->db->get();
			return $query->result();
		
		
		
		}



		function get_recipe3($limit=100,$options=array()){
		
		$string = str_replace("'","\'",$options['search']);
		$string = trim($string);
		
			$this->db->select('products.*,product_recipe.*,websites.*,product_prices.*');
	
			
			$this->db->from('products');
			$this->db->where('products.product_code',$string);
			$this->db->join('websites','products.db_id = websites.website_id');
			$where = "(websites.website_id = '1' OR websites.website_id = '7')";
			$this->db->where($where);
	
			$this->db->join('product_recipe','products.product_id=product_recipe.product_id');
			$this->db->join('product_prices','products.product_id=product_prices.product_id');
			$wh ="(product_recipe.db_id = '1' OR product_recipe.db_id = '7')";
			$this->db->where($wh);
			
			$this->db->where('product_recipe.price_val','XXX');
			$this->db->group_by('product_recipe.recipe_record_id');
			$this->db->order_by('products.product_code DESC');
			$query = $this->db->get();
			return $query->result();
		
		
		
		}




		function get_picture1($limit=100,$options=array()){
		
		$string = str_replace("'","\'",$options['search']);
		$string = trim($string);
		
			$this->db->select('products.*,websites.*,product_prices.*');			
			$this->db->from('products');
			$this->db->where('products.product_code',$string);
			$this->db->join('websites','products.db_id = websites.website_id');
			
			$where = "(websites.website_id = '1' OR websites.website_id = '7')";
			$this->db->where($where);
			
			$this->db->join('product_prices','products.product_id=product_prices.product_id');
			$wh ="(product_prices.db_id = '1' OR product_prices.db_id = '7')";
			$this->db->where($wh);
	

			//$this->db->where('product_prices.product_id',$string);

			$this->db->where('product_prices.price_val','X');
			$this->db->order_by('product_code DESC');
			$query = $this->db->get();
			return $query->result();
		
		
		
		}


		function get_picture2($limit=100,$options=array()){
		
		$string = str_replace("'","\'",$options['search']);
		$string = trim($string);
		
			$this->db->select('products.*,websites.*,product_prices.*');			
			$this->db->from('products');
			$this->db->where('products.product_code',$string);
			$this->db->join('websites','products.db_id = websites.website_id');
			$where = "(websites.website_id = '1' OR websites.website_id = '7')";
			$this->db->where($where);

			$this->db->join('product_prices','products.product_id=product_prices.product_id');
			$wh ="(product_prices.db_id = '1' OR product_prices.db_id = '7')";
			$this->db->where($wh);

			//$this->db->where('product_prices.product_id',$string);

			$this->db->where('product_prices.price_val','XX');
			$this->db->order_by('product_code DESC');
			$query = $this->db->get();
			return $query->result();
		
		
		
		}

		function get_picture3($limit=100,$options=array()){
		
		$string = str_replace("'","\'",$options['search']);
		$string = trim($string);
		
			$this->db->select('products.*,websites.*,product_prices.*');			
			$this->db->from('products');
			$this->db->where('products.product_code',$string);
			$this->db->join('websites','products.db_id = websites.website_id');
			$where = "(websites.website_id = '1' OR websites.website_id = '7')";
			$this->db->where($where);
		
			$this->db->join('product_prices','products.product_id=product_prices.product_id');
			$wh ="(product_prices.db_id = '1' OR product_prices.db_id = '7')";
			$this->db->where($wh);

			//$this->db->where('product_prices.product_id',$string);

			$this->db->where('product_prices.price_val','XXX');
			$this->db->order_by('product_code DESC');
			$query = $this->db->get();
			return $query->result();
		
		
		
		}
	

} 