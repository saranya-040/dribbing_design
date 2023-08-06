<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Admin Panel</h1>
        <a href="logout.php">Logout</a>
    </header>
    <section class="content">
        <h2>Hero Banner Content</h2>
        <form id="update-hero-form" method="post">
            <label for="heroContent">Update Hero Content:</label>
            <textarea id="heroContent" name="heroContent" rows="4" cols="50"></textarea>
            <button type="submit">Update</button>
            <p id="update-error" class="error-message"></p>
        </form>
    </section>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Company. All rights reserved.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
