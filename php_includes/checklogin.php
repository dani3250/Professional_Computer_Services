<?php
session_start();
include 'db.php';
$tbl_user="members"; // Table name
// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_user WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$db_id = $row['id'];
$db_uname = $row['username'];
$db_pwd = $row['password'];
$db_role = $row['role'];
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["uname"] = $db_uname;
$_SESSION["urole"] = $db_role;
if($db_role == "admin"){
header("location:../index.php");
}
elseif ($db_role == "worker") {
 	# code...
 
	header("location:../index.php");
}
}
else {
echo "Wrong Username or Password";
}
?>