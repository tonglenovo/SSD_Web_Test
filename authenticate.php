<?php
require 'login_class.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $login = new Login();
    $result = $login->authenticate($username, $password);

    if ($result === 'Login successful') {
        $_SESSION['logged_in'] = true;
        header('Location: home.php');
        exit();
    } else {
        echo $result;
    }
}
?>
