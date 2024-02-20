<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="var">
        <?php
            $fruit = array("orange", "strawberry", "apple", "mango", "watermelon");
            print_r($fruit);
            echo"<br/><hr/>";

            echo"\nThird Element:".$fruit[2]."\n";
            $fruit[] = "rasberry";
            $fruit[] = "blueberry";
            echo"<br/><hr/>";
            
            echo "\nNew array:\n";
            print_r($fruit);
            
        ?>
    </div>
</body>
</html>