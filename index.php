<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: main.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Login</h2>
    </header>
    <div class="container_b">
        <form action="actions/login.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>Account Number:</label>
            <input type="text" name="accountNum"><br>
            <label>Pin:</label>
            <input type="password" name="pin" placeholder="●●●●"><br>
            <input type="submit"><br>
        </form>
    </div>
</body>
</html>