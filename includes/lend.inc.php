<?php
    include("autoLoader.inc.php");

    // get the data from the form 
    $book_name = $_POST['book_name'];
    $book_isbn = $_POST['book_isbn'];
    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $branch = $_POST['branch'];
    $date = $_POST['date'];

    $lend = new Lend($book_name, $book_isbn, $student_name, $student_id, $branch, $date);
    $lend->display();