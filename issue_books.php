<?php
    include "header.php";
    session_start();
    if(isset($_SESSION['login'])){
        
    }else{
        header("location: index.php");
    }
    include("includes/autoLoader.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.S.M Issue Books</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/animation.css">
    <link rel="stylesheet" href="styles/table.style.css">
    <style>
        ::-webkit-scrollbar{
            width: 15px;
        }
        ::-webkit-scrollbar-track{
            background-color: rgba(39, 29, 27, 0.568);
        }
        ::-webkit-scrollbar-thumb{
            background-color: rgb(111, 65, 42);
        }
        ::-webkit-scrollbar-thumb:hover{
            background-color: rgb(181, 88, 44);
        }
    </style>
</head>
<body>
<div class="options">
        <div>
            <form action="" method="get">
                <select class="item" name="sort">
                    <option value="SNA">Sort</option>
                    <hr>
                    <option value="SNA">Student Name Ascending</option>
                    <option value="SND">Student Name Descending</option>
                    <option value="DS">Date Start</option>
                    <option value="DE">Date End</option>
                    <option value="BNA">Book Name Ascending</option>
                    <option value="BND">Book Name Descending</option>
                </select>
                <input id="sort_with" class="item" type="submit" value="Go">
            </form>
        </div>
        <div>
            <form action="" method="get">
                <form action="" method="get">
                    <input class="item" id="search_category" type="search" name="search_lend" placeholder="Lender Search...">
                </form>
            </form>
        </div>
        <div>
            <a href="adds/lend.add.php"><button id="add">Add</button></a>
        </div>
    </div>
    <div>
        <?php 
            if(isset($_GET['search_lend'])){
                $_COOKIE['search_lend'] = $_GET['search_lend'];
            }
            if(isset($_GET['sort'])){
                $_COOKIE['sort'] = $_GET['sort'];
            }
            include("gets/lend.get.php"); 
        ?>
    </div>
</body>
</html>