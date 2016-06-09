<?php require('check.php'); ?>
<?php require('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Steam Library</title>
</head>

<body>
<h1>
    Steam Library
</h1>

<p>
    <?php
    $sql = "INSERT INTO games (id, korisnikId) VALUES ('" . $_GET['gameid'] . "', '" . $_POST['id'] . "')";
    $result = $conn->query($sql);

    echo('Igra je unesena!<br>');
    echo('<a href="index2.php">Povratak na listu igara</a>');
    ?>
</p>
</body>
</html>