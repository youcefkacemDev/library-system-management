<?php
    class CategoryFetch extends LibraryView {
        public function categoryGet(){
            return $this->getC();
        }

        public function searchGet($s){
            return $this->getS($s);
        }

        public function sortGet($s){
            return $this->getSort($s);
        }

        public function deleteCategory($id){
            $this->dci($id);
        }
    }