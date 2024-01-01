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
    <title>L.S.M book add</title>
    <link rel="stylesheet" href="../styles/animation.css">
    <link rel="stylesheet" href="../styles/add.style.css">
</head>
<body>
    <div class="design_side_left">
        <h1 class="left_title">Add New<br>Book</h1>
    </div>
    <div class="design_side_right">
        <div class="form-enter">
            <form action="../includes/book.inc.php" method="post">
                <div class="form_title">
                    <h1>Fill The Book Information Bellow :</h1>
                </div>
                <div>
                    <input class="enter" type="text" name="book_title" required placeholder="Book Name">
                </div>
                <div>
                    <input class="enter" type="text" name="book_author" required placeholder="Book Author">
                </div>
                <div>
                    <select name="category" required>
                        <option value="">select the category</option>
                        <hr>
                        <option value="m">m</option>
                        <option value="f">f</option>
                        <option value="a">a</option>
                        <option value="d">d</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div>
                    <input class="enter" type="text" name="book_ISBN" required placeholder="Book ISBN">
                </div>
                <div>
                    <input class="enter" type="text" name="number_of_copy" required placeholder="Number Of Copy">
                </div>
                <div>
                    <textarea name="details" cols="38" rows="4" required>book :</textarea>
                </div>
                <div>
                    <input id="add_book" type="submit" value="Add">
                </div>
            </form>
            <div>
                <a href="../books.php"><button id="add_book">Cancel</button></a>
            </div>
        </div>
    </div>
</body>
</html>