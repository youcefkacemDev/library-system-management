<?php
    class Category extends LibraryController {
        private $categoryName;
        private $categoryDescription;
        
        public function __construct($cn, $cd){
            $this->categoryName = $cn;
            $this->categoryDescription = $cd;
        }

        public function categoryInsert(){
            $this->insertCategory($this->categoryName, $this->categoryDescription);
        }
    }



    