<?php

$name = $_POST['Name'];
$surname = $_POST['Surname'];
$ph = $_POST['PhoneNumber'];
$add = $_POST['Address'];
$email = $_POST['Email'];
$Qual = $_POST['Qualification'];
$cou = $_POST['Country'];
$state = $_POST['State'];




if (!empty($name) ||!empty($surname) || empty($ph) || !empty($add) ||!empty($email) || !empty($Qual) ||!empty($cou) ||!empty($state))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "webpage";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  
    $INSERT = "INSERT INTO profile45 VALUES('$name','$surname','$ph','$add','$email','$Qual','$cou','$state')";
  //$INSERT = "INSERT INTO profile45 VALUES('$name','$surname','$ph','$add','$email','$Qual','$cou','$state')";
  $sql="SELECT * FROM profile45 WHERE Name='$name'";
     $result1=mysqli_query($conn,$sql);

$row = $result1->fetch_assoc();

echo "NAME=".$row['Name']."-";
echo("\n");

  if($conn->query($INSERT) == TRUE);
  {
    echo("Success");
  }
  
}

//printing data in the database



}
?>
<html>
<head>
			<title>PROFILE</title>
			<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
		<body>
            <div class="mn">
			<h1>PROFILE INFORMATION</h1>
			<h2>NAME:<?php echo(strtoupper($row["Name"])); ?></h2>
            <h2>SURNAME:<?php echo(strtoupper($row["Surname"])); ?></h2>
            <h2>PHONE NUMBER:<?php echo(strtoupper($row["PhoneNumber"])); ?></h2>
            <h2>ADDRESS:<?php echo(strtoupper($row["Address"])); ?></h2>
            <h2>EMAILID:<?php echo(strtoupper($row["Email ID"])); ?></h2>
            <h2>Qualification:<?php echo(strtoupper($row["Qualification"])); ?></h2>
            <h2>COUNTRY:<?php echo(strtoupper($row["Country"])); ?></h2>
            <h2>STATE:<?php echo(strtoupper($row["State/Region"])); ?></h2>
            </div>

            
</html>
