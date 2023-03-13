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
<html>
		<head>
			<title>PROFILE</title>
			<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
		<body>
			
			<h1>HEY,<?php echo(strtoupper($row["uname1"])); ?></h1>
			<marquee><div class="tt"><big><b>WELCOME TO SPACEORBIT WEBSITE</b></big></div></marquee>
			
			<form action="../profile.php"><button>Update Profile</button></form><br>
             <form><a  href="logout.php"><button>Logout</button></form></a>
			</div>
			
          
        
      </div>
	 <dic class="ooo">
      <form action="../php/profile.php" method="POST">

        <p>Name</p>
        <input type="text" name="Name" placeholder="Enter Username"required>

        <p>Surname</p>
        <input type="text" name="Surname" placeholder="Enter email id"required>

        <p>Phonenumber</p>
        <input type="text" name="PhoneNumber" placeholder="Enter PhoneNumber"required>

        <p>Address</p>
        <input type="text" name="Address" placeholder="Enter Address"required>

        <p>Email ID</p>
        <input type="email" name="Email" placeholder="Enter Email id"required>

        <p>Qualification</p>
        <input type="text" name="Qualification" placeholder="Enter Qualification"required>

        <p>Country</p>
        <input type="text" name="Country" placeholder="Enter Country"required>
        <p>State</p>
        <input type="text" name="State" placeholder="Enter state"required>
        <input type="submit" name="" value="Save">

        <br><br>
        
    </form>
</div>
</div>
</div>
</div>
		</body>
</html>