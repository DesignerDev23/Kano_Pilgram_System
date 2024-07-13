<?php
session_start();

include_once '../config/database.php';
include_once '../models/Pilgrim.php';

$database = new Database();
$db = $database->getConnection();
$pilgrim = new Pilgrim($db);

if (isset($_POST['login'])) {
    $pilgrim->email = $_POST['email'];
    $password = $_POST['password'];

    if ($pilgrim->getPilgrimByEmail() && password_verify($password, $pilgrim->password)) {
        $_SESSION['pilgrim_id'] = $pilgrim->id;
        header('Location: ../public/dashboard.php');
    } else {
        $_SESSION['error'] = "Invalid email or password";
        header('Location: ../public/index.php');
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../public/index.php');
}
?>
