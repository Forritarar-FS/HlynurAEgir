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
$PasswordAgain = $_POST['RegisterPassAgain'];
$Email = $_POST['RegisterEmail'];
$sql1="select username from login";
$sql2="select email from login";
$Usern=mysql_query($sql1);
$emailed=mysql_query($sql2);
$row = mysql_fetch_assoc($Usern);
$row2 = mysql_fetch_assoc($emailed);
$hash= password_hash($Password, PASSWORD_DEFAULT);

if($Username=="" or $Email=="" or $Password==""){
  ?>
Invalid Username, password or email
<?php
}
else{
if($Password==$PasswordAgain){
if($row['username']!=$Username){
  if($row2['email']!=$Email){
    $sql = "INSERT INTO $tbl_name(Username,Password,Email) VALUES('$Username','$hash','$Email')";
    mysql_query($sql);
    header('Location: '."/lokaverk/login.php");
  }
  else
  {
    echo '<script language="javascript">';
    echo 'alert("Email is already in use!")';
    echo '</script>';

  }
}
else
{
  echo '<script language="javascript">';
  echo 'alert("Username is already in use!")';
  echo '</script>';
}
}
else
{
  ?>
  Password do not match
  <?php
}
}
?>
