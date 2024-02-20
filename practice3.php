<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing</title>
</head>
<body>
    <form action="" method="post">
        <label for="name" id="name" required>Name:
            <input type="text">
        </label>
        <label for="email" id="email" require>Email:
            <input type="email">
        </label>
        <input type="submit" value="Login">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "Thank you, $name!";
    }
    ?>
</body>
</html>
