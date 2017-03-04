<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=rk592';
    $username = 'rk592';
    $password = 'Id0l1Xw1';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
