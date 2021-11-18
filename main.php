<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
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
    <script defer src="js/script.js"></script>
</head>
<body>
    <header>
        <h2>Banknet</h2>
        <button onclick="openhome()">Home</button>
        <button onclick="openwithdraw()">Withdraw</button>
        <button onclick="opendeposit()">Deposit</button>
        <button onclick="opentransfer()">Transfer</button>
    </header>
    <div class="container_b">
        <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div id="h" style="display: block;">
            <div>
                <?php
                    echo 'Account Number: '.$_SESSION['user'][0].'<br>';
                    echo 'Balance: '.$_SESSION['user'][1].'<br>';
                    echo 'Pin: '.$_SESSION['user'][2].'<br>';
                ?>
                <a href="actions/logout.php">Log Out</a>
            </div>
        </div>
        <form id="w" action="actions/withdraw.php" method="POST" style="display: none;">
            <p>: 10</p>
            <label>Withdraw:</label>
            <input type="text" name="withdraw" placeholder="100"><br>
            <label>Pin:</label>
            <input type="password" name="pin" placeholder="●●●●"><br>
            <input type="submit"><br>
        </form>
        <form id="d" action="actions/deposit.php" method="POST" style="display: none;">
            <label>Deposit:</label>
            <input type="text" name="deposit" placeholder="100"><br>
            <label>Pin:</label>
            <input type="password" name="pin" placeholder="●●●●"><br>
            <input type="submit"><br>
        </form>
        <form id="t" action="actions/transfer.php" method="POST" style="display: none;">
            <label>Transfer:</label>
            <input type="text" name="transfer" placeholder="1000"><br>
            <label>Account Number:</label>
            <input type="text" name="accountNum"><br>
            <label>Pin:</label>
            <input type="password" name="pin" placeholder="●●●●"><br>
            <input type="submit"><br>
        </form>
    </div>
</body>
</html>