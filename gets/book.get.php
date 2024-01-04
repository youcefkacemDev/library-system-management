<?php
    if(isset($_COOKIE['search_book'])){
        $bookFetch = new BookFetch();
        $books = $bookFetch->searchGet($_COOKIE['search_book']);
    }
    else if(isset($_COOKIE['sort'])){
        $bookFetch = new BookFetch();
        $books = $bookFetch->sortGet($_COOKIE['sort']);
    }
    else if(isset($_GET['del_book'])){
        $bookFetch = new BookFetch();
        $bookFetch->DBbook($_GET['del_book']);
        $books = $bookFetch->bookGet();
    }
    else{
        $bookFetch = new BookFetch();
        $books = $bookFetch->bookGet();
    }
?>
<table>
    <thead>
        <tr>
            <th>Book Name</th>
            <th>Book ISBN</th>
            <th>Book Author</th>
            <th>Category</th>
            <th>Number Of Copy</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_COOKIE['book_error'])){
                echo $_COOKIE['book_error'];
            }
        ?>
        <?php foreach($books as $book){ ?>
            <tr>
                <td><?php echo $book['book_title'] ?></td>
                <td><?php echo $book['book_isbn'] ?></td>
                <td><?php echo $book['book_author'] ?></td>
                <td><?php echo $book['category_name'] ?></td>
                <td><?php echo $book['number_of_copy'] ?></td>
                <td>
                    <form action="" method="get">
                        <button name="del_book" value='<?php echo $book['book_id'] ?>' id="table_button">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        <?php
            if(isset($_GET['del_book'])){
                $_COOKIE['del_book'] = $_GET['del_book'];
            }
        ?>
    </tbody>
</table>