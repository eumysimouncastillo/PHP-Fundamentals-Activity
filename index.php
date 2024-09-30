<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br> 

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">Log In</button>
    </form>

    <form method="POST" action="logout.php">
        <button type="submit">Log Out</button>
    </form>

    <?php if (isset($_SESSION['login_error'])): ?>
        <p><?php echo $_SESSION['login_error']; ?></p>
        <?php unset($_SESSION['login_error']); ?>
    <?php elseif (isset($_SESSION['username']) && isset($_SESSION['hashed_password'])): ?>
        <b>User logged in: <strong><?php echo $_SESSION['username']; ?></strong> <br> password: <strong><?php echo $_SESSION['hashed_password']; ?></strong></p>
    <?php endif; ?>
</body>
</html>
