<?php
if(isset($_SESSION['Username'])){


}
else{
?>
<form action="login.php">
  <div float="left">
    <input value="Login" type="submit" style="margin-left:1300px" name="Login">
  </input>
</div>
</form>
<form action="register.php">
  <div float="left">
    <input value="Register" type="submit" style="margin-left:1290px" name="Register">
  </input>
</div>
</form>
<?php

}
?>
<div align="center" style="margin-top:100; margin-left:-60px">
<form action="handleregister.php" method="post" >
<p>Register</p>
<input name="RegisterUserN" type="text" placeholder="Username"><br><br>
<input name="RegisterPass" type="password" placeholder="Password"><br><br>
<input name="RegisterPassAgain" type="password" placeholder="Password Again"><br><br>
<input name="RegisterEmail" type="text" placeholder="Email"><br><br>
<input name="Register" type="Submit">
</from>
</div>
<?php

?>
