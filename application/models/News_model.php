<?php
class News_model extends CI_Model
{
	public function __constrct()
	{
		$this->load->database();		//database class available through the $this->db object.
	}
	
	
	public function get_news($slug = FALSE)
	{
			if ($slug === FALSE)
			{
					$query = $this->db->get('news');
					return $query->result_array();
			}

			$query = $this->db->get_where('news', array('slug' => $slug));
			return $query->row_array();
	}
	
}
?>
