<?php

try {
    $connect = new PDO("mysql:host=localhost;dbname=SnackLab", "local_user", "internal");

    $tmp = $connect->query('SELECT * FROM users');
    $tmp = $tmp->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

?>