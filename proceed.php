<?php
    session_start();
   if(!isset($_SESSION["name"] ) )
        header("location:login.html");

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
           
            <td><a href="menu.php" class="i202">Menu</a></td>
            
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
                     
                    </div>
                </div>
            </td>

        </tr>
        <?php
            echo $ch;
        
            $size=sizeof($_POST);
            $j=1;
            for($i=1;$i<=$size;$i++)
            {
                $index="o".$i;
                if(isset($_POST[$index]))
                   { $b_id[$j]=$_POST[$index];
                
                    $j++;
                   }
               
            }
         for($k=1;$k<=$j;$k++)
         {
             $q="delete from Orders
             where order_id=".$b_id[$k];
             mysqli_query($conn,$q);
         }
         ?>
         
    </table>

    
</body>
</html>
<?php 
    header("location:demo.php");
    ?>