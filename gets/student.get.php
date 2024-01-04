<?php
    $bookFetch = new BookFetch();
    $students = $bookFetch->getStudents();
?>
<table style="border-collapse: collapse; margin-bottom:10px;">
    <thead>
        <caption style="background-color: rgb(214, 201, 169); padding: 15px; border-radius: 8px; margin-top:10px; margin-bottom:10px;">Students</caption>
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Branch</th>
        </tr>
        <?php foreach($students as $student){ ?>
        <tr>
            <td> <?=$student['student_name']?> </td>
            <td> <?=$student['student_id']?> </td>
            <td> <?=$student['student_branch']?> </td>
        </tr>
        <?php } ?>
    </thead>
</table>