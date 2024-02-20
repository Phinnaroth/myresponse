<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $valUsername = "user";
    $valPassword = "pass";

    if ($username === $valUsername && $password === $valPassword) {
        echo "Login successful. Welcome, $username!";
    } else {
        echo "Invalid";
    }
}
?>