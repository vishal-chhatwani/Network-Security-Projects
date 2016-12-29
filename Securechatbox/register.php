<?php

if(isset($_POST['submit'])){
 
 $con = mysqli_connect('localhost', 'root', '','chatbox');
 //mysql_select_db('chatbox', $con);
 
 $uname = $_POST['username'];
 $pword = $_POST['password'];
 $pword2 = $_POST['password2'];
 
 if($pword != $pword2){
  echo "Password do not match. <br>";
 }
 else{
  $checkexist = mysqli_query($con,"SELECT username FROM users WHERE username='$uname'");
  if(mysqli_num_rows($checkexist)){
   
   echo "<center>";
   echo "Username already exist, please select different username<br>";
   echo "</center>";
  }
  else{
   mysqli_query($con,"INSERT INTO users (username,password) VALUES ('$uname','$pword')");
   
   
   

   

   echo "<center>";
   echo "<h1>You have successfully registered. Click <a href='index.php'>here</a> to Login</h1><br>";
   echo "</center>";
  }
 }
 
}

?>
<html>
<head>
  <style>
body {
    background-image: url("background.jpg");
}
</style>
</head>

<body>

  <div style="margin-top:100px">
<form name="form1" method="post" action="register.php">
<table align="center" width="350px" height="350px" border="0" bgcolor="#003399" border="1" width="40%" >

<tr>
<td style="padding-left:15px; font-size:30px; color: #ffffff; font-weight:bold" >
Please Register Here!
</td>
</tr>
<tr>
<td style="padding-left:15px; padding-right:15px ; font-size:20px"><input type="text" name="username" placeholder="Type a Username" style="width:300px; height:45px; padding:5px "></td>
</tr>

<tr>
<td style="padding-left:15px; padding-right:15px ; font-size:20px"><input type="password" name="password" placeholder="Type a Password" style="width:300px; height:45px; padding:5px "></td>
</tr>

<tr>
<td style="padding-left:15px; padding-right:15px ; font-size:20px"><input type="password" name="password2" placeholder="Repeat a Password" style="width:300px; height:45px; padding:5px "></td>
</tr>

<tr>
<td colspan="2" style="padding-left:15px; padding-right:15px ; font-size:20px"><input type="submit" name="submit" value="Register" style="width:300px; height:45px; padding:5px; font-size:20px; font-weight:bold; color:#000099 "></td>
</tr>

</table>
</form>
</div>
</body>

</html>?