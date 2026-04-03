<?php
$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?'); // remove query string
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        if($request == '/about') echo "About Page";
        elseif($request == '/contact') echo "Contact Page";
        else echo "Home Page";
        ?>
    </title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f4f4; }
        header, footer { background: #333; color: white; padding: 10px; text-align: center; }
        nav a { margin-right: 10px; color: white; text-decoration: none; }
        main { background: white; padding: 20px; margin-top: 10px; }
    </style>
</head>
<body>
<header>
    <h1>My Simple OOP Project</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
</header>
<main>
<?php
switch ($request) {
    case '/about':
        include 'about.php';
        break;
    case '/contact':
        include 'contact.php';
        break;
    case '/':
    case '/index.php':
        include 'home.php';   // dito na lang i-include ang home.php
        break;
    default:
        echo "<h2>404 - Page not found</h2>";
        echo "<p>Ang page na hinahanap mo ay wala.</p>";
        break;
}
?>
</main>
<footer>
    <p>&copy; 2026 Kosa. All rights reserved.</p>
</footer>
</body>
</html>