<?php 
$mysqli = mysqli_connect("localhost", "root", "", "mydatabase");

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

function insertUser($name, $email,$password) {
    global $mysqli;
    $query = "INSERT INTO users (name, email,password) VALUES (?, ?,?)";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email,$password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

/*
// Example usage
insertUser("John Doe", "john@example.com","test@123");
insertUser("John Doe", "john@example.com","test@123");
insertUser("John Doe", "john@example.com","test@123");*/

function getAllUsers() {
    global $mysqli;
    $result = mysqli_query($mysqli, "SELECT * FROM users");
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $users;
}

?>

