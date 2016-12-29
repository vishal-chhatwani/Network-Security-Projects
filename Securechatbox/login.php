<?php
session_start();
session_regenerate_id(true);

$con = mysqli_connect('localhost','root','','chatbox');
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
//$username = $_GET["username"];
//$password = $_GET["password"];

//echo "username" .$username;
//echo "password" .$password;

//$con = mysqli_connect('localhost','root','','chatbox');


//mysql_select_db('chatbox',$con);

//$con = mysqli_connect('localhost','root','');
//mysqli_select_db('chatbox',$con);

$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'");
 if (mysqli_num_rows($result)){
  $res = mysqli_fetch_array($result);
  
  $_SESSION['username']=$res['username'];
  $_SESSION['id']=session_id();
  $_SESSION['created']=time();
  echo "<center>";
  echo "<h1> You have successfully Logged In ! click <a href='index.php'>here</a> to go to ChatRoom</h1>";
  echo "</center>";
  }
  else{
  echo "<center>";
  echo "<h1> No user found. Please go <a href='index.php'>back</a> and enter the correct login.</h1><br>";
  echo "<h1>You may register a new account by clicking <a href='register.php'>here</a></h1>";
  echo "</center>";
 }


?>?