<?php
    class LendFetch extends LibraryView {
        public function lendingGet(){
            return $this->getL();
        }

        public function searchGet($s){
            return $this->getLenderSearch($s);
        }

        public function SortLending($s){
            return $this->getLenderSort($s);
        }

        public function DeleteLending($id){
            return $this->dli($id);
        }
    }