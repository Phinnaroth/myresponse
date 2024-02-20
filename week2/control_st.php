<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngelBaby</title>
    <style>
        .me{
            color: pink;
            font-size: 47px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <div class="me">
        <?php
            $score = 69;
            if($score>=90){
                echo"Excellent!";
            }
            elseif ($score >= 70 && $score <= 89) {
                echo "Good job!";
            } else {
                echo "Sorry, you need to improve.";
            }
            

            
            echo "<br/><hr/>";
        ?>
        
    </div>
</body>
</html>