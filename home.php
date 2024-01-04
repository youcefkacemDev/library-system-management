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
    <title>L.S.M home</title>
    <link rel="stylesheet" href="styles/animation.css">
    <link rel="stylesheet" href="styles/home.style.css">
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
    <div class="parent_face">
        <div class="child1" id="items">
            <center>
                <div style="margin-top: 45px;">
                    <img src="images/i11.jpg" alt="library image" loading="lazy" width="85%" height="60%" style="border-radius: 20px;">
                </div>
            </center>
            
        </div>
        <div class="child2" id="items">
            <?php include("gets/books.get.php"); ?>
        </div>
        <div class="child3" id="items" class="scrollable-div" style="overflow: auto;">
            <?php include("gets/student.get.php"); ?>
        </div>
    </div>
</body>
</html>