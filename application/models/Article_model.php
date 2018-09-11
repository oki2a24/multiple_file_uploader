<?php
class Article_model extends CI_Model {
    public function __construct()
    {
        // $dsn = 'mysql://teruya:password@localhost/ign_test;';
        $this->load->database();
    }

    public function get_article($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('article');
            return $query->result_array();
        }
        $query = $this->db->get_where('article', array('id' => $slug));
        return $query->row_array();
    }

    
}