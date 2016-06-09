<?php require('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>

<body>
<h1>
    Steam Library
</h1>

<p>
    <?php
    $sql = "INSERT INTO korisnici (username, password, fullname) VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['fullname'] . "')";
    $result = $conn->query($sql);
    echo('Gospodja je unesena!<br>');
    echo('<a href="index.php">Povratak</a>');
    ?>
</p>
</body>
</html>