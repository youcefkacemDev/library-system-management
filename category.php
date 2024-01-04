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
    <title>L.S.M Category</title>
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
                    <option value="">Sort</option>
                    <hr>
                    <option value="ASC">Name Ascending </option>
                    <option value="DESC">Name Descending </option>
                </select>
                <input id="sort_with" class="item" type="submit" value="Go">
            </form>
        </div>
        <div>
            <form action="" method="get">
                <input class="item" id="search_category" type="search" name="search_category" placeholder="Category Search...">
            </form>
        </div>
        <div>
            <a href="adds/category.add.php"><button id="add">Add</button></a>
        </div>
    </div>
    <div>
        <?php
            if(isset($_GET['search_category'])){
                $_COOKIE['search_category'] = $_GET['search_category'];
            }
            if(isset($_GET['sort'])){
                $_COOKIE['sort'] = $_GET['sort'];
            }
            include("gets/category.get.php");
        ?>
    </div>
</body>
</html>