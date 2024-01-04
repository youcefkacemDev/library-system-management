<?php
    class Lend extends LibraryController {
        private $book_name;
        private $book_isbn;
        private $student_name;//
        private $student_id;//
        private $branch;//
        private $date_start;
        private $date;

        public function __construct($b_name, $b_isbn, $s_name, $s_id, $branch, $date_start, $date)
        {
            $this->book_name = $b_name;
            $this->book_isbn = $b_isbn;
            $this->student_name = $s_name;
            $this->student_id = $s_id;
            $this->branch = $branch;
            $this->date_start = $date_start;
            $this->date = $date;
        }

        public function lendInsert(){
            $this->insertLending($this->student_id, $this->student_name, $this->branch, $this->book_name, $this->book_isbn, $this->date_start, $this->date);
        }

    }