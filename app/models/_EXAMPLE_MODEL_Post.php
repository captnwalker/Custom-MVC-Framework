<?php
    // This is an example only. Change class names and refactor to suite your project
    class Post {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getPosts(){
            $this->db->query("SELECT * FROM posts");
      
            return $this->db->resultSet();
            
          }
    }