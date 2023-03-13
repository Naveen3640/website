<?php
session_start();

$uname = $_POST['uname'];
$upswd = $_POST['upswd'];
$errors=array();




if (!empty($uname) || !empty($upswd) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "webpage";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// LOGIN USER

  

  if (empty($uname)) {
  	array_push($errors, "Username is required");
  }
  if (empty($upswd)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$upwsd = md5($upswd);
  	$query = "SELECT * FROM register WHERE uname1='$uname' AND upswd1='$upswd'";
  	$result=mysqli_query($conn,$query);
	
    if (mysqli_num_rows($result)== 1) {
	$sql="SELECT * FROM register WHERE uname1='$uname'";
	$result1=mysqli_query($conn,$sql);
	$row = $result1->fetch_assoc();
    
	
  	  
   
    
  	}else {
  		array_push($errors, "Wrong usename/password");
  	}
	
  }
}

?>