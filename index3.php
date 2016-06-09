<?php require('check.php'); ?>
<?php require('db.php'); ?>


<?php

$sql = "SELECT id FROM korisnici";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo($row['id'] . " ");
    }
} else {
    echo "Nema korisnika";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Steam Library</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
    <![endif]-->
</head>

<body background="bckgnd.png">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index3.php">My Library</a></li>
            </ul>
            <a class="navbar-brand" href="index2.php">Steam Store</a>
        </div><!--/.nav-collapse -->

    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>My Library</h1>
        <p class="lead"></p>
    </div>

    <div>
        <?php

        $sql = "SELECT * FROM korisnici WHERE id=" . $_GET['id'];
        $result = $conn->query($sql);
        $korisnik = $result->fetch_assoc();
        ?>


        <p>
            <?php
            if (!isset($_SESSION['count'])) {
                $_SESSION['count'] = 0;
            } else {
                $_SESSION['count']++;
            }
            $sql = "SELECT name, genre FROM games";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table>');
                echo('<tr><th>Steam Library</th></tr>');
                while($row = $result->fetch_assoc()) {
                    echo('<tr>');
                    echo('<td>' . $row['name'] . '</td>');
                    echo('<td>' . $row['genre'] . '</td>');
                    echo('<td>' . '<a href="delete.php?id=' . $row['id'] . '"><img src="img/delete.gif"></a>' . '</td>');
                    echo('</tr>');
                }
                echo('</table>');
            } else {
                echo "No games in library!";
            }
            $conn->close();
            ?>
        </p>
        <div>
        <p>

        <form action="editprofile.php" method="post">
            <input type="submit" value="Edit">
        </form>
        </p>
        </div>


    </div>

</div><!-- /.container -->


</body>
</html>