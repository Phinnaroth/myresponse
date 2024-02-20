<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloBro</title>
    <style>
        table,  table tr td,table tr th{
            border: 1px solid black;
        } 
    </style>
</head>
<body>
    <?php
        $name = "Mr. Bean";
        $yearOfbirth = 2004;
        $gender = "M";
        $salary = 356.78;
        $productSold = array("apple","orange","mango", "avocado");
    ?>
    <table>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Value</td>
        </tr>
        <tr>
            <td>1.</td>
            <td>Name:</td>
            <td><?=$name?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Gender:</td>
            <td><?=$gender?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Birth of date:</td>
            <td><?=$yearOfbirth?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Salary:</td>
            <td><?=$salary?></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>ProductSold:</td>
            <td>
                <ol> 
                    <?php
                    foreach($productSold as $key=>$value){
                    ?>
                        <li>   <?=$value;?></li>
                    <?php
                    }
                    ?>
                </ol>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    
</body>
</html>



