<?php
$databasePath = 'databases/landing_page.db';
$db = new SQLite3($databasePath);

if (!$db) {
    die("Database connection failed");
}

$queryAdmins = "
    CREATE TABLE IF NOT EXISTS admins (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL,
        password TEXT NOT NULL
    )
";
$db->exec($queryAdmins);

$queryHeroContent = "
    CREATE TABLE IF NOT EXISTS hero_content (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        content TEXT NOT NULL
    )
";
$db->exec($queryHeroContent);

$db->close();
?>