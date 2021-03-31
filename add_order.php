<?php
    session_start();
   if(!isset($_SESSION["name"] ) )
        header("location:login.html");

        $name=$_SESSION['name'];
    $servername = "localhost";
    $username = "abhinavG";
    $password = "Ag@12nitk201"; 
            // Create connection
    $conn = new mysqli($servername, $username, $password);
            // Check connection
    if(!$conn)
    echo "connection failed";
    mysqli_select_db($conn,'canteen');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
<table style="width: 100%; background-color: rgb(227, 240, 182);">
        <tr>
            <td><img src="restorant_logo.png" alt="Logo" width="100px" height="100px " ; /> </td>
            <td><a href="index.html" class='i202'>Home</a></td>
            <td><a href="./menu/menu.html" class="i202">Menu</a></td>
            <td><a href="order.html" class="i202">Order</a></td>
            <td><a href="checkout.html" class="i202">checkout</a></td>
            <td><a href="logout.php">Logout</a></td>
            <td>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Hello
                        <?php
                                 echo $_SESSION["name"];
                                                      ?>
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout.php">Logout</a>
                        <a href="demo.php">Cart</a>
                        <a href="history.php">history</a>
                        <a href="about_you.php">user</a>
                    </div>
                </div>
            </td>

        </tr>
        <?php
          
            $item=$_POST['item_id'];
            $quantity=$_POST['quantity'];
             $q="insert into Orders (username,item_id,quantity,status) values ('$name',$item, $quantity,'cart') ";
           
             mysqli_query($conn,$q);
         
         ?>
         
    </table>

    
</body>
</html>

<?php 
   header("location:menu.php");
?>
