<?php
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffeelover.pl - Admin panel</title>
    <link rel="icon" href="ikonatitle.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="adminpanel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <nav class="navbar">
            <a href="https://coffeelover.pl/logout"><p>
                <span class="material-symbols-outlined symbol-item">logout</span>
            </p></a>
            <a href="https://coffeelover.pl/adminpanel">
                <p>
                    <span class="material-symbols-outlined symbol-item">home</span>
                </p>
            </a>
    </nav>
</body>
</html>