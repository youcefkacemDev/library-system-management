<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.S.M category add</title>
    <link rel="stylesheet" href="../styles/animation.css">
    <link rel="stylesheet" href="../styles/add.style.css">
</head>
<body>
    <div class="design_side_left">
        <h1 class="left_title">Add New<br>Category</h1>
    </div>
    <div class="design_side_right">
        <div class="form-enter">
            <form action="" method="post">
                <div>
                    <h1>Fill The Category Information Bellow :</h1>
                </div>
                <div>
                    <input class="enter" type="text" name="category" required placeholder="Category">
                </div>
                <div>
                    <textarea name="description"  cols="38" rows="4" required>Category :</textarea>
                </div>
                <div>
                    <input id="add_book" type="submit" value="Add">
                </div>
            </form>
            <a href="../category.php"><button id="add_book">Cancel</button></a>
        </div>
    </div>
</body>
</html>