<?php
    if(isset($_COOKIE['search_category'])){
        $categoryFetch = new CategoryFetch();
        $categories = $categoryFetch->searchGet($_COOKIE['search_category']);
    }
    else if(isset($_COOKIE['sort'])){
        $categoryFetch = new CategoryFetch();
        $categories = $categoryFetch->sortGet($_COOKIE['sort']);
    }
    else if(isset($_GET['del_button'])){
        $categoryFetch = new CategoryFetch();
        $categoryFetch->deleteCategory($_GET['del_button']);
        $categories = $categoryFetch->categoryGet();
    }
    else{
        $categoryFetch = new CategoryFetch();
        $categories = $categoryFetch->categoryGet();
    }
?>
<table>
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_COOKIE['Lend_error'])){
                echo $_COOKIE['Lend_error'];
            }
        ?>
        <?php foreach($categories as $category){ ?>
            <tr>
                <td><?= $category['category_name']?></td>
                <td><?= $category['category_description']?></td>
                <td>
                    <form action="" method="get">
                        <button value='<?= $category['category_id']?>' name="del_button" id="table_button">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>