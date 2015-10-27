Successfully Registered.
<?php
mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("lokaverk")or die("cannot select DB");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lokaverk";

$tbl_name="login";
$Username = $_POST['RegisterUserN'];
$Password = $_POST['RegisterPass'];
$Email = $_POST['RegisterEmail']

$sql = "INSERT INTO $tbl_name(Username,Password,Email) VALUES('$Username','$Password','$Email')";

mysql_query($sql);


?>
