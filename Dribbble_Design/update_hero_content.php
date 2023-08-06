<?php
session_start();

$databasePath = 'databases/landing_page.db';
$db = new SQLite3($databasePath);

if (!$db) {
    die("Database connection failed");
}

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: admin_login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newHeroContent = $_POST['heroContent'];

    $updateQuery = "UPDATE hero_content SET content = :content WHERE id = 1";
    $stmt = $db->prepare($updateQuery);
    $stmt->bindValue(':content', $newHeroContent, SQLITE3_TEXT);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }
}

$db->close();
?>
