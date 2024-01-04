<?php
    class Book extends LibraryController {
        private $bookTitle;
        private $book_author;
        private $category;
        private $book_ISBN;
        private $number_of_copy;
        private $details;

        public function __construct($b_title, $b_author, $b_category, $b_ISBN, $B_NOC, $b_details)
        {
            $this->bookTitle = $b_title;
            $this->book_author = $b_author;
            $this->category = $b_category;
            $this->book_ISBN = $b_ISBN;
            $this->number_of_copy = $B_NOC;
            $this->details = $b_details;
        }

        public function bookInsert(){
            $this->insertBook($this->bookTitle, $this->book_author, $this->category, $this->book_ISBN, $this->number_of_copy, $this->details);
        }

    }