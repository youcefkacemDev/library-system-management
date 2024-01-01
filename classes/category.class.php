<?php
    class Category {
        private $categoryName;
        private $categoryDescription;
        public function __construct($cn, $cd){
            $this->categoryName = $cn;
            $this->categoryDescription = $cd;
        }

        public function display(){
            echo $this->categoryName;
            echo "<br>";
            echo $this->categoryDescription;
        }
    }