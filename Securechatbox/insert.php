
<html>
<body>
	<div width="200" height="200" background-color="white">
	</div>
<?php 
session_start();
$uname = $_SESSION['username'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost', 'root', '','chatbox');
//mysql_select_db('chatbox', $con);

mysqli_query($con,"INSERT INTO logs(`username`, `msg`) VALUES('$uname', '$msg')");

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER by id ");


while($extract = mysqli_fetch_array($result1)){
 echo "<span class='uname'>". $extract['username']. "</span><span class='msg'> : " . $extract['msg']. "</span><br>";
 
}

?>
</body>
</html>