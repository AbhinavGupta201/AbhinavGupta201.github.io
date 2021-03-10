<?php
	session_start();
    $servername = "localhost";
    // your username // $username = "  your username";
    //$password = "your password"; 
   // your password 
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
  
    // Check connection
    if(!$conn)
      echo "connection failed";
    else
    {

        mysqli_select_db($conn,'canteen'); // your database to select 
        $user=$_POST['username'];
        $pass=$_POST['password'];
       
	$q="select password from users where username='$user' and password='$pass' ";
	
	
	$result=mysqli_query($conn,$q);

        $row=mysqli_num_rows($result);
	
        if($row==1)
	{
		 
		$_SESSION["name"]=$user;
	        header("location:home.php");
	}
	else
		{
            
            mysqli_close($conn);
	    header("location:index.html"); 
        }
    }
?>
  
