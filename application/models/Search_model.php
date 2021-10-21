<?php

class Search_model extends CI_Model{
      public function __construct(){
                  $this->load->database();
              }

       public  function search($keyword){

                   $this->db->join('categories', 'categories.id = posts.category_id');
               
                   $this->db->like('title',$keyword);
                   $query  =   $this->db->get('posts');
                   return $query->result_array();
  
                 }

        public function get_categories(){
            $this->db->order_by('name');
            $query = $this->db->get('categories');
            return $query->result_array();
        }


            }