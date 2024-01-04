<?php
    class LibraryView extends LibraryModel {
        public function getC(){
            return $this->getCategories();
        }

        public function getB(){
            return $this->getBooks();
        }

        public function getL(){
            return $this->getLending();
        }

        public function getS($search){
            return $this->getSearches($search);
        }

        public function getSort($sort){
            return $this->getSortCategory($sort);
        }

        public function getBookSearch($search){
            return $this->getBookSearches($search);
        }

        public function getBookSort($sort){
            return $this->getSortBook($sort);
        }

        public function getLenderSearch($search){
            return $this->getLenderSearches($search);
        }

        public function getLenderSort($sort){
            return $this->getSortLending($sort);
        }

        public function dci($id){
            $this->deleteCategoryId($id);
        }

        public function dbi($id_book){
            $this->DeleteBookId($id_book);
        }

        public function dli($id){
            $this->deleteLendingId($id);
        }

        public function students(){
            return $this->GetAllStudents();
        }
    }