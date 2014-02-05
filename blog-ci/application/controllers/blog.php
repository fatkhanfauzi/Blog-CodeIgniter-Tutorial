<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		//call model
		$this->load->model('M_blog');
		
	}
	
	public function index() {
		
		//set variable for pagination style;
		$base_url = site_url('/blog/index');
		$total_rows = $this->M_blog->get_all_blog_numrows();
		$uri_segment = 3;
		
		//inisiasi config
		$this->pagination->initialize($this->pagination_style($base_url, $total_rows, $uri_segment));
		
		//create pagination
		$data['generate_page'] = $this->pagination->create_links();
		
		$data['list_blog'] = $this->M_blog->get_all_blog_pagination($this->pagination_style($base_url, $total_rows, $uri_segment)['per_page'], $this->uri->segment(3));

		$newarray = array();
		foreach ($data['list_blog'] as $rows)
		{
		    $rows_text = $rows->content_article;
		    $altered = strip_tags($rows_text);
		    $rows->content_article = word_limiter($altered, 20);
		}

		
		//Sidebar Category
		$data['list_category'] = $this->M_blog->get_all_category();
		
		//sidebar recent post
		$data['list_recent_post'] = $this->M_blog->get_all_recent_post();
		
		$this->load->view('main_content', $data);
	}
	
	public function category(){
		
		//set variable for pagination style;
		$base_url = site_url('/blog/category/'.$this->uri->segment(3));
		$total_rows = $this->M_blog->get_blog_by_category_numrows($this->uri->segment(3));
		$uri_segment = 4;
		
		//inisiasi config
		$this->pagination->initialize($this->pagination_style($base_url, $total_rows, $uri_segment));
		
		
		//create pagination
		$data['generate_page'] = $this->pagination->create_links();
		
		$data['list_blog'] = $this->M_blog->get_blog_by_category_pagination($this->uri->segment(3), $this->pagination_style($base_url, $total_rows, $uri_segment)['per_page'], $this->uri->segment(4));
		
		$newarray = array();
		foreach ($data['list_blog'] as $rows)
		{
		    $rows_text = $rows->content_article;
		    $altered = strip_tags($rows_text);
		    $rows->content_article = word_limiter($altered, 20);
		}
		
		//sidebar Category
		$data['list_category'] = $this->M_blog->get_all_category();
		
		//sidebar recent post
		$data['list_recent_post'] = $this->M_blog->get_all_recent_post();
		
		//load page
		$this->load->view('main_content', $data);
	}
	
	function article(){
		
		$data['list_single_blog'] = $this->M_blog->get_single_blog($this->uri->segment(3));
		
		//sidebar category
		$data['list_category'] = $this->M_blog->get_all_category();
		
		//sidebar recent post
		$data['list_recent_post'] = $this->M_blog->get_all_recent_post();
		
		//load page
		$this->load->view('main_single_content', $data);
	}
	
	function search() {
		
		$data['input_search']="";
		$post_search = $this->input->post('input_search');
		if(!empty($post_search)) {
			$data['input_search'] = $this->input->post('input_search');
			$this->session->set_userdata('search_blog', $data['input_search']);
		}
		else {
			$data['input_search'] = $this->session->userdata('search_blog');
		}
		var_dump($data['input_search']);
		
		
		//set variable for pagination style;
		$base_url = site_url('/blog/search');
		$total_rows = $this->M_blog->get_blog_by_search_numrows($data['input_search']);
		$uri_segment = 3;
		
		//inisiasi config
		$this->pagination->initialize($this->pagination_style($base_url, $total_rows, $uri_segment));
		
		
		//create pagination
		$data['generate_page'] = $this->pagination->create_links();
		
		$data['list_blog'] = $this->M_blog->get_blog_by_search_pagination($data['input_search'], $this->pagination_style($base_url, $total_rows, $uri_segment)['per_page'], $this->uri->segment(3));
		
		$newarray = array();
		foreach ($data['list_blog'] as $rows)
		{
		    $rows_text = $rows->content_article;
		    $altered = strip_tags($rows_text);
		    $rows->content_article = word_limiter($altered, 20);
		}
		
		//sidebar Category
		$data['list_category'] = $this->M_blog->get_all_category();
		
		//sidebar recent post
		$data['list_recent_post'] = $this->M_blog->get_all_recent_post();
		
		//load page
		$this->load->view('main_content', $data);
		
	}
	
	
	public function pagination_style($base_url, $total_rows, $uri_segment){
		
		$config['base_url'] 	= $base_url;
		$config['total_rows'] 	= $total_rows;
		$config['uri_segment']  = $uri_segment;
		$config['per_page'] 	= '3';
		$config['first_page'] 	= 'First';
		$config['last_page']	= 'Last';
		$config['next_page'] 	= '&laquo;';
		$config['prev_page'] 	= '$raquo;';
		
		$config['full_tag_open'] 	= '<div class="pagination">';
		$config['full_tag_close'] 	= '</div>';
			 
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '';
		$config['first_tag_close'] = '';
			 
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '';
		$config['last_tag_close'] = '';
			 
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '';
		$config['next_tag_close'] = '';
			 
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '';
		$config['prev_tag_close'] = '';
			 
		$config['cur_tag_open'] = '<a class="selected" href="">';
		$config['cur_tag_close'] = '</a>';
		 
		$config['num_tag_open'] = '';
		$config['num_tag_close'] = '';
		
		return $config;
	}
	
	
}

