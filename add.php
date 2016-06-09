<?php require('check.php'); ?>
<?php require('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
</head>

<body>
<h1>
    Automobili
</h1>

<p>
    <?php
    $sql = "INSERT INTO korisnici (gameId) VALUES ('" . $_POST['registracija'] . "', '" . $_POST['ime'] . "')";
    $result = $conn->query($sql);

    echo('Automobil je unesen!<br>');
    echo('<a href="index.php">Povratak na prikaz automobila</a>');
    ?>
</p>
</body>
</html>