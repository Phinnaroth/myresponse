<?php

require_once('connection.php');

$users = getAllUsers();


mysqli_close($mysqli);

?>
<html>
<head>
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <table class="table table-dark table-striped-columns">
        <tr>
            <td>NO</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Create Date</td>
            <td>Action</td>
        </tr>
        <?php
        $no = 1;
        foreach($users as $user){
        
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$user['name']?></td>
            <td><?=$user['email']?></td>
            <td><?=$user['password']?></td>
            <td><?=$user['created_date']?></td>
            <td>View|Edit|

                <a href="delete.php?id"></a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>