<?php
// Start the session
session_start();

// Define your username and password
define('USERNAME', 'admin');
define('PASSWORD', 'zaq!2wsx');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (USERNAME == $_POST['username'] && PASSWORD == $_POST['password']) {
        // If the username and password are correct, set the session variable
        $_SESSION['logged_in'] = true;
        header('Location: adminpanel');
        exit;
    } else {
        $error_message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffeelover.pl - Admin login</title>
    <link rel="icon" href="ikonatitle.png" type="image/png">
    <link rel="stylesheet" href="login.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
</head>
<body>
        <div class="container">
            <form method="post" action="login.php">
                <h1>Admin login</h1>
                <div class="inputbox">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="inputbox">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <?php if (!empty($error_message)): ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <div class="submit">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
</body>
</html>