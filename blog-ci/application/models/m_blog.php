<?php
class M_blog extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	function get_all_category(){
	    $query = $this->db->get('category');
	    return $query->result();
	}
	
	function get_all_recent_post() {
		$this->db->select('article.id_article, article.title_article');
	    $this->db->from('article');
		$this->db->limit(5);
		$this->db->order_by('article.date_article', 'desc');
	    $query = $this->db->get();
	    return $query->result();
	}
	
	function get_all_blog_numrows(){
		$this->db->select('article.id_article, article.title_article, article.content_article, article.date_article, article.id_category, category.name_category, user.name_user');
	    $this->db->from('article');
	    $this->db->join('category', 'article.id_category = category.id_category');
	    $this->db->join('user', 'article.id_user = user.id_user');
		$this->db->order_by('article.id_article', 'asc');
	    $query = $this->db->get();
	    return $query->num_rows();
	}
	
	function get_all_blog_pagination($limit, $offset){
		$this->db->select('article.id_article, article.title_article, article.content_article, article.date_article, article.id_category, category.name_category, user.name_user');
	    $this->db->from('article');
	    $this->db->join('category', 'article.id_category = category.id_category');
	    $this->db->join('user', 'article.id_user = user.id_user');
		$this->db->limit($limit, $offset);
		$this->db->order_by('article.id_article', 'asc');
	    $query = $this->db->get();
	    return $query->result();			
	}
	
	function get_blog_by_category_numrows($name_category){
		$this->db->select('article.id_article, article.title_article, article.content_article, article.date_article, article.id_category, category.name_category, user.name_user');
	    $this->db->from('article');
	    $this->db->join('category', 'article.id_category = category.id_category');
	    $this->db->join('user', 'article.id_user = user.id_user');
		$this->db->where('category.name_category', $name_category);
		$this->db->order_by('article.id_article', 'asc');
	    $query = $this->db->get();
	    return $query->num_rows();			
	}
	
	function get_blog_by_category_pagination($name_category, $limit, $offset){
		$this->db->select('article.id_article, article.title_article, article.content_article, article.date_article, article.id_category, category.name_category, user.name_user');
	    $this->db->from('article');
	    $this->db->join('category', 'article.id_category = category.id_category');
	    $this->db->join('user', 'article.id_user = user.id_user');
		$this->db->where('category.name_category', $name_category);
		$this->db->limit($limit, $offset);
		$this->db->order_by('article.id_article', 'asc');
	    $query = $this->db->get();
	   	return $query->result();		
			
	}
	
	function get_blog_by_search_numrows($search){
		$this->db->select('article.id_article, article.title_article, article.content_article, article.date_article, article.id_category, category.name_category, user.name_user');
	    $this->db->from('article');
	    $this->db->join('category', 'article.id_category = category.id_category');
	    $this->db->join('user', 'article.id_user = user.id_user');
		$this->db->like('article.title_article', $search);
		$this->db->order_by('article.id_article', 'asc');
	    $query = $this->db->get();
	    return $query->num_rows();			
	}
	
	function get_blog_by_search_pagination($search, $limit, $offset){
		$this->db->select('article.id_article, article.title_article, article.content_article, article.date_article, article.id_category, category.name_category, user.name_user');
	    $this->db->from('article');
	    $this->db->join('category', 'article.id_category = category.id_category');
	    $this->db->join('user', 'article.id_user = user.id_user');
		$this->db->like('article.title_article', $search);
		$this->db->limit($limit, $offset);
		$this->db->order_by('article.id_article', 'asc');
	    $query = $this->db->get();
	   	return $query->result();		
			
	}
	
	function get_single_blog($id_article){
		$this->db->select('article.id_article, article.title_article, article.content_article, article.date_article, article.id_category, category.name_category, user.name_user, user.info_user, user.ava_user');
	    $this->db->from('article');
	    $this->db->join('category', 'article.id_category = category.id_category');
	    $this->db->join('user', 'article.id_user = user.id_user');
		$this->db->where('article.id_article', $id_article);
	    $query = $this->db->get();
	    return ($query->num_rows() > 0) ? $query->row() : false;
	}
	
}
	

?>