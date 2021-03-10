<?php
    $servername = "localhost";
   // $username = "  your username";
    //$password = "your password"; 
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
  
    // Check connection
    if(!$conn)
      echo "connection failed";
    else
    {
	    
        mysqli_select_db($conn,'canteen');  // your database name to select from in 2nd argument 
        $user=$_POST['Username'];
	$pass=$_POST['password'];
	$block=$_POST['Block'];
	$phone=$_POST['phone'];
        
        $q="insert into users values('$user',$block,$phone,'$pass')";
        mysqli_query($conn,$q);
        mysqli_close($conn);
        
    }
?>
<!DOCTYPE html>
<head>
	<script>
		alert("You have Succesfully signed up.Login To sign in");
	</script>
</head>
<body>
<?php 
    header("location:login.html");
?> 
    
</body>
    
