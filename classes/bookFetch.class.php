<?php
    class BookFetch extends LibraryView {
        public function bookGet(){
            return $this->getB();
        }

        public function searchGet($s){
            return $this->getBookSearch($s);
        }

        public function sortGet($s){
            return $this->getBookSort($s);
        }

        public function DBbook($Book_id){
            $this->dbi($Book_id);
        }

        public function getStudents(){
            return $this->students();
        }
    }