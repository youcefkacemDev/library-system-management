<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.S.M Category</title>
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
                    <option value="">Name</option>
                    <option value="">Number Of Books</option>
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
            <a href="adds/category.add.php"><button id="add">Add</button></a>
        </div>
    </div>
</body>
</html>