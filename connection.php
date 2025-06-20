<?php

try {
    $connect = new PDO("mysql:host=localhost;dbname=SnackLab", "local_user", "internal");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

?>