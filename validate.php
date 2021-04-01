<?php
    $servername = "localhost";
    $username = "abhinavG";
    $password = "Ag@12nitk201";  
    // Create connection
    $conn = new mysqli($servername, $username, $password);
  
    // Check connection
    if(!$conn)
      echo "connection failed";
    else
    {
	    
        mysqli_select_db($conn,'canteen');
        $user=$_POST['Username'];
	$pass=$_POST['password'];
	$block=$_POST['Block'];
	$phone=$_POST['phone'];
        
        $q="insert into users values('$user',$block,$phone,'$pass')";
        mysqli_query($conn,$q);
        mysqli_close($conn);
        
    }
?>
<!DOCTYPE html><html>
<head>
	<script>
		alert("You have Succesfully signed up.Login To sign in");
	</script>
</head>
<body>
<?php 
    header("location:login.html");
?>   
</body></html>
    
