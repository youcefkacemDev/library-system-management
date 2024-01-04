<?php 
    session_start();
    if(isset($_SESSION['login'])){
        
    }else{
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.S.M borrow a book</title>
    <link rel="stylesheet" href="../styles/animation.css">
    <link rel="stylesheet" href="../styles/add.style.css">
</head>
<body>
    <div class="design_side_left">
        <h1 class="left_title">Borrow A<br>Book</h1>
    </div>
    <div class="design_side_right">
        <div class="form-enter">
            <form action="../includes/lend.inc.php" method="post">
                <div>
                    <h1>Fill The Lender Information Bellow :</h1>
                </div>
                <div>
                    <!-- ADD A DESIGN FOR THIS TITLE  -->
                    <h4>Make Sure The Book Is Existing In The Library</h4>
                    <input class="enter" type="text" name="book_name" required placeholder="Book Name">
                </div>
                <div>
                    <input class="enter" type="text" name="book_isbn" required placeholder="Book ISBN">
                </div>
                <div>
                    <input class="enter" type="text" name="student_name" required placeholder="Student Name">
                </div>
                <div>
                    <input class="enter" type="text" name="student_id" required placeholder="Student ID">
                </div>
                <div>
                    <select name="branch" required>
                        <option value="">select the branch</option>
                        <hr>
                        <option value="i">i</option>
                        <option value="m">m</option>
                        <option value="a">a</option>
                        <option value="s">s</option>
                    </select>
                </div>
                <div>
                    <input class="enter" type="date" name="date">
                </div>
                <div>
                    <input id="add_book" type="submit" value="Borrow Book" name="insert">
                </div>
            </form>
            <a href="../issue_books.php"><button id="add_book">Cancel</button></a>
        </div>
    </div>
</body>
</html>