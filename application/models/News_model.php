<?php

class News_model extends CI_Model
{
	public function __construct()
	{
		$config['username'] = 'root';
		$config['password'] = '1234';
		$config['database'] = 'news';
		$config['dbdriver'] = 'mysqli';
		$this->load->database($config);
	}

	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE) {
			$query = $this->db->get('news');
			return $query->result_array();
		}
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
}
