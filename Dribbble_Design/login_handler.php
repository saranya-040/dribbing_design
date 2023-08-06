<?php
session_start();

$databasePath = 'databases/landing_page.db';
$db = new SQLite3($databasePath);

if (!$db) {
    die("Database connection failed");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = $db->query($query);

    if ($result->fetchArray(SQLITE3_ASSOC)) {
        $_SESSION['admin_logged_in'] = true;
        echo 'success';
    } else {
        echo 'error';
    }
}

$db->close();
?>
