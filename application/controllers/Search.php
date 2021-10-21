<?php
     
       Class Search extends CI_Controller{


		  public function __construct() {
		       parent::__construct();
		       $this->load->model('search_model');

       }


	     public function search_keyword() {

		   	   $data['title'] = 'Search Posts';

		   	   $data['categories'] = $this->search_model->get_categories();
		   
		       $keyword=$this->input->post('search');
		       $data['posts']=$this->search_model->search($keyword);




		       

		          $this->load->view('templates/header');
			   $this->load->view('posts/search', $data);
			   $this->load->view('templates/footer');

		   }



       }