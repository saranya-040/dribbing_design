<?php
$databasePath = 'databases/landing_page.db';
$db = new SQLite3($databasePath);

if (!$db) {
    die("Database connection failed");
}

$query = "SELECT content FROM hero_content WHERE id = 1"; 
$result = $db->querySingle($query);

echo $result;

$db->close();
?>
