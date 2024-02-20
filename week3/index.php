<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{ 
        margin:0px;
    }
    
    ul{
        list-style: none;
    }
    ul li{
        float:left;
        padding: 5px 20px;
        background: darkblue;
        cursor: pointer;
        color: #fff;
    }
    ul li:hover{
        background: lightblue;
        color: black;
    }
    ul.sub-menu{
        display:none;
        position: absolute;
    }
    ul.sub-menu li{
        float: none;
    }
    ul li:hover ul.sub-menu{
        display:block;
    }
    header,nav{
        width: 100%;
    }
    .contain,footer{
        width:100%; 
        padding: 6%;
    }
    footer{
        background-color: lightpink;
        padding: 0%;
        padding-left: 5%;

    }
</style>
<body>
    <?php include 'header.php'; ?>
    <div class="contain">
        <h1>Welcome to CADT!!!!!!!!!!!!</h1>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>


