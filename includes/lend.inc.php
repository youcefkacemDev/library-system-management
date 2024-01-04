<?php
    include("autoLoader.inc.php");

    // get the data from the form 
    $book_name = $_POST['book_name'];
    $book_isbn = $_POST['book_isbn'];
    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $branch = $_POST['branch'];
    $date = $_POST['date'];
    $data_start = date("Y-m-d");

    if(isset($_POST['insert'])){
        try {
            $lend = new Lend($book_name, $book_isbn, $student_name, $student_id, $branch, $data_start, $date);
            $lend->lendInsert();
            header("location: ../issue_books.php");
        } catch (\Throwable $th) {
            $errorMsg = "<center><h1 style='padding: 8px; background-color: rgb(214, 201, 169); color: rgb(111, 65, 42); width: 90%; border-radius: 8px;'>This Book Is Not Exist !</h1></center>";
            setcookie('Lend_error', $errorMsg, time() + 2, '/');
            header("location: ../issue_books.php");
        }
        
    }