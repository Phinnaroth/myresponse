<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $database = new Database();
    $database->deleteUser($id);

    header('Location: index.php');
    exit();
}
?>