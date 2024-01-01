<?php
    class Lend {
        private $book_name;
        private $book_isbn;
        private $student_name;
        private $student_id;
        private $branch;
        private $date;

        public function __construct($b_name, $b_isbn, $s_name, $s_id, $branch, $date)
        {
            $this->book_name = $b_name;
            $this->book_isbn = $b_isbn;
            $this->student_name = $s_name;
            $this->student_id = $s_id;
            $this->branch = $branch;
            $this->date = $date;
        }

        public function display(){
            echo $this->book_name;
            echo "<br>";
            echo $this->book_isbn;
            echo "<br>";
            echo $this->student_name;
            echo "<br>";
            echo $this->student_id;
            echo "<br>";
            echo $this->branch;
            echo "<br>";
            echo $this->date;

        }

    }