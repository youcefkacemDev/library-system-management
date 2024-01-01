<?php
    include("autoLoader.inc.php");

    // handle the data that comes from the form
    $categoryName = $_POST['category'];
    $categoryDescription = $_POST['description'];

    // send the data to the category class
    $category = new Category($categoryName, $categoryDescription);