<?php
    include("autoLoader.inc.php");

    // handle the data from the form
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $category = $_POST['category'];
    $book_ISBN = $_POST['book_ISBN'];
    $number_of_copy = $_POST['number_of_copy'];
    $details = $_POST['details'];

    $book = new Book($book_title, $book_author, $category, $book_ISBN, $number_of_copy, $details);
    $book->display();
