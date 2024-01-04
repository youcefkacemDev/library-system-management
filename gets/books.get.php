<?php
    $bookFetch = new BookFetch();
    $books = $bookFetch->bookGet();
?>
<table style="border-collapse: collapse; margin-bottom:10px;">
    <caption style="background-color: rgb(214, 201, 169); padding: 15px; border-radius: 8px; margin-top:10px; margin-bottom:10px;">Books</caption>
    <tr>
        <th>Name</th>
        <th>Author</th>
    </tr>
    <?php foreach($books as $book){ ?>
    <tr>
        <td> <?= $book['book_title'] ?> </td>
        <td> <?= $book['book_author'] ?> </td>
    </tr>
    <?php } ?>
</table>