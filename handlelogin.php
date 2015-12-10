<?php
if (isset($_POST['Username'])){
$sql="select username from login";
$correctUsername=false;


$link = mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("lokaverk")or die("cannot select DB");
$LUsername = $_POST['Username'];
$LPassword = $_POST['password'];
$UTjekk = mysql_query($sql);

while( $row = mysql_fetch_assoc( $UTjekk)){
  //print_r($row);
  if($LUsername==$row['username']){
    $correctUsername=true;
    break;
  }
}
if($LUsername==""){
}
else{
if ($LUsername==$row['username']){

  $sql1="select password from login where username='$LUsername'";
  $PTjekk = mysql_query($sql1);
  echo mysql_error($link);
  $row = mysql_fetch_assoc( $PTjekk);
  if (password_verify($LPassword, $row['password'])) {
    session_start();
    $_SESSION['username']=$LUsername;
    require_once('register.php');

  }
}
else{
    echo "Invalid Username or Password";
    }

}
}
?>
