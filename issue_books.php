<?php
    include "header.php";
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
    <title>L.S.M Issue Books</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/animation.css">
</head>
<body>
<div class="options">
        <div>
            <form action="" method="get">
                <select class="item" name="sort">
                    <option value="">Sort</option>
                    <hr>
                    <option value="">Student Name</option>
                    <option value="">Date</option>
                    <option value="">Book Name</option>
                </select>
            </form>
        </div>
        <div>
            <form action="" method="get">
                <form action="" method="get">
                    <input class="item" id="search_category" type="search" name="search_category" placeholder="Search...">
                </form>
            </form>
        </div>
        <div>
            <a href="adds/leand.add.php"><button id="add">Add</button></a>
        </div>
    </div>
</body>
</html>