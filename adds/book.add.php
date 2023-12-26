<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.S.M book add</title>
    <link rel="stylesheet" href="../styles/animation.css">
</head>
<body>
    <div class="design_side">
        <h1>Add New .<br>Book</h1>
    </div>
    <div>
        <div>
            <h1>Fill The Book Information Bellow :</h1>
        </div>
        <div>
            <form action="" method="post">
                <div>
                    <input type="text" name="book_name" required placeholder="Book Name">
                </div>
                <div>
                    <input type="text" name="book_author" required placeholder="Book Author">
                </div>
                <div>
                    <select name="category">
                        <option value="">m</option>
                        <option value="">f</option>
                        <option value="">a</option>
                        <option value="">d</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="book_ISBN" required placeholder="Book ISBN">
                </div>
                <div>
                    <input type="text" name="number_of_copy" required placeholder="Number Of Copy">
                </div>
                <div>
                    <textarea name="details" cols="19" rows="2">book :</textarea>
                </div>
                <div>
                    <input type="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
</body>
</html>