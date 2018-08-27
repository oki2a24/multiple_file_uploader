<?php
class Articles extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('article_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['articles'] = $this->article_model->get_article();
    }

    public function view($slug = NULL)
    {
        
        $data['article_item'] = $this->article_model->get_article($slug);
    }
}