<?php 

    class Book{
        private $id;
        private $title;
        private $author;
        private $publisher;
        private $availability;
        private $category;


        function __construct($row){
            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->author = $row['author'];
            $this->publisher = $row['publisher'];
            $this->availability = $row['availability'];
            $this->category = $row['category'];
        }

        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getAuthor(){
            return $this->author;
        }
        public function getPublisher(){
            return $this->publisher;
        }
        public function getAvailability(){
            return $this->availability;
        }
        public function getCategory(){
            return $this->category;
        }
    }






?>