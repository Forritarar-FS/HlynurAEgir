<?php
mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("lokaverk")or die("cannot select DB");
session_start();
unset($_SESSION['username']);
header('Location: login.php');
 ?>
