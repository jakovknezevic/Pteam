<?php require('check.php'); ?>
<?php require('db.php'); ?>


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

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">Homepage</a>
            <a class="navbar-brand" href="login.php">Login</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="register.php">Register</a></li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Steam Library</h1>
        <p class="lead"></p>
    </div>



<?php

$sql = "SELECT * FROM korisnici WHERE id=" . $_GET['id'];
$result = $conn->query($sql);
$korisnik = $result->fetch_assoc();
?>
<div>
<p>

<form action="update.php" method="post">
    Fullname:<br>
    <input type="text" name="fullname" value="<?php echo($korisnik['fullname']); ?>"><br>
    Username:<br>
    <input type="text" name="username" value="<?php echo($korisnik['username']); ?>"><br>
    Password:<br>
    <input type="text" name="password" value="<?php echo($korisnik['password']); ?>"><br>
    <input type="hidden" name="id" value="<?php echo($korisnik['id']); ?>">
    <input type="submit" value="Commit changes">
</form>
</p>

<p>
    <a href="index3.php">Go Back</a>
</p>
    </div>
</div>