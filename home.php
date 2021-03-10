<?php
session_start();

if(!isset($_SESSION["name"] ) )
        header("location:login.html");
else
{
 
?>
<!DOCTYPE html>
<html>
	<head>
        <title>Home.php</title>
	
       </head>
<body>
	
        <table style="width: 100%; background-color: rgb(227, 240, 182);">
            <tr>
                <td><img src="restorant_logo.png" alt="Logo" width="100px" height="100px ";/>  </td>
                <td ><a href="index.html" class='i202'>Home</a></td>
                <td><a href="menu.html" class="i202">Menu</a></td>
                <td><a href="order.html" class="i202">Order</a></td>
                <td><a href="contactUs.html" class="i202">Contact</a></td>
		<td><a href="logout.php">Logout</a></td>
		<td align="right" style="padding-right:20px;"<p style="color:black; text-decoration:none ;"> Hello </br>

	<?php
                     
            echo $_SESSION["name"];
          ?>
          </p></td>
                
            </tr>
        </table>
       
</body>
</html>
<?php
}
?>
