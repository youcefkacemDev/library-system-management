<?php
    if(isset($_COOKIE['search_lend'])){
        $lendFetch = new LendFetch();
        $lendings = $lendFetch->searchGet($_COOKIE['search_lend']);
    }
    else if(isset($_GET['del_button'])){
        $lendFetch = new LendFetch();
        $lendFetch->DeleteLending($_GET['del_button']);
        $lendings = $lendFetch->lendingGet();
    }
    else if(isset($_COOKIE['sort'])){
        $lendFetch = new LendFetch();
        switch($_COOKIE['sort']){
            case "SNA":{
                $s = "student.student_name ASC";
                $lendings = $lendFetch->SortLending($s);
                break;
            }
            case "SND":{
                $s = "student.student_name DESC";
                $lendings = $lendFetch->SortLending($s);
                break;
            }
            case "DS":{
                $s = "book_lending.lending_start ASC";
                $lendings = $lendFetch->SortLending($s);
                break;
            }
            case "DE":{
                $s = "book_lending.lending_end ASC";
                $lendings = $lendFetch->SortLending($s);
                break;
            }
            case "BNA":{
                $s = "BOOK.book_title ASC";
                $lendings = $lendFetch->SortLending($s);
                break;
            }
            case "BND":{
                $s = "BOOK.book_title DESC";
                $lendings = $lendFetch->SortLending($s);
                break;
            }
        }
    }
    else{
        $lendFetch = new LendFetch();
        $lendings = $lendFetch->lendingGet();
    }
?>
<table>
    <thead>
        <tr>
            <th>Book Name</th>
            <th>Student Name</th>
            <th>Date Start</th>
            <th>Date End</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_COOKIE['Lend_error'])){
                echo $_COOKIE['Lend_error'];
            }
        ?>
        <?php foreach($lendings as $lending){ ?>
        <tr>
            <td><?php echo $lending['book_title'] ?></td>
            <td><?php echo $lending['student_name'] ?></td>
            <td><?php echo $lending['lending_start'] ?></td>
            <td><?php echo $lending['lending_end'] ?></td>
            <td>
                <form action="" method="get">
                    <button value="<?php echo $lending['id'] ?>" name="del_button" id="table_button">Delete</button>
                </form>
            </td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>