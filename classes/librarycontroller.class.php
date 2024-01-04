<?php
    class LibraryController extends LibraryModel {
        protected function insertCategory($c_name, $c_description){
            $this->addCategory($c_name, $c_description);
        }

        public function insertBook($b_title, $b_author, $b_category, $b_ISBN, $B_NOC, $b_details){
            $this->addBook($b_title, $b_author, $b_category, $b_ISBN, $B_NOC, $b_details);
        }

        public function insertLending($s_id, $s_name, $branch, $book_name, $book_isbn, $date_start, $date){
            $this->addStudent($s_id, $s_name, $branch);
            $book_id = $this->getBookId($book_name, $book_isbn);
            $student_id = $this->getStudentId($s_id, $s_name);
            $this->addLending($book_id[0]['book_id'], $student_id[0]['id'], $date_start, $date);
        }
    }