<?php
    include("autoLoader.inc.php");
    // handle the data that comes from the form
    // send the data to the category class
    if(isset($_POST['insert'])){
        $categoryName = $_POST['category'];
        $categoryDescription = $_POST['description'];
        $category = new Category($categoryName, $categoryDescription);
        $category->categoryInsert();
        header("location: ../category.php");
    }