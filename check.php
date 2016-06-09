<?php
session_start();
if(!isset($_SESSION['id']))
{
    echo('Niste prijavljeni!');
    die();
}
?>

