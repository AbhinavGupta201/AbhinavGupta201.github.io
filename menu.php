<?php
	session_start();
    $name=$_SESSION["name"];

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
    else
    {
        mysqli_select_db($conn,'canteen');
       
	$q=" select item.item_id,name,price,availability from item inner join Food_List on item.item_id=Food_List.item_id ";

	
	
	$result=mysqli_query($conn,$q);

        $num=mysqli_num_rows($result);            
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <style>
        /* Dropdown Button */
        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #2980B9;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }

        #hist-tr {
            background-color: whitesmoke;
        }
    </style>

    <script>
        /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
         function f1() {
             var x=document.getElementById("myButton2");
             x.innerHTML="Added";
           
         }

    </script>

</head>

<body>
    <table style="width: 100%; background-color: rgb(227, 240, 182);">
        <tr>
            <td><img src="restorant_logo.png" alt="Logo" width="100px" height="100px " ; /> </td>
           
            <td><a href="menu.php" class="i202">Menu</a></td>
            
            <td align="center">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Hello
                        <?php
                                                                
                                                        echo $_SESSION["name"];
                                                      ?>
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="logout.php">Logout</a>
                        <a href="cart.php">Cart</a>
                        <a href="history.php">history</a>
                     
                    </div>
                </div>
            </td>

        </tr>
    </table>
    <div style="margin:150px">
        <h1>Menu</h1>
        
            <table style="border-style: solid; border-color: black; width: 100%;">
                <tr style="background-color: yellow;">
                    <th>Order-Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>quantity</th>
                    <th>Add</th>
                   

                </tr>
                <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($result);
           
            ?>
            <form action="add_order.php" method="POST">
                <tr class="hist-tr">
                    <td align="center">
                       <input type="text" name="item_id" value="<?php echo $row['item_id']; ?>" hidden  > 
                    </td>
                    <td align="center">
                    <input type="text" name="good_name" value="<?php echo $row['name']; ?>" disabled > 
                    </td>
                    <td align="center">
                    <input type="text" name="price" value="<?php echo $row['price']; ?>" disabled > 
                    </td>
                    <td align="center">
                    <input type="text" name="avail" value="<?php echo $row['availability']; ?>" disabled > 
                    </td>
                    <?php

                    if($row['availability']=='YES')
                    {
                        ?>
                    <td align="center">
                    <input style="text-weight:bold;" type="text" name="quantity"   required placeholder="quantity" min="0" max="10"> 
                    </td>
                    <td align="center">
                    <button type="submit" class="added" onclick="f1()" style="color: black; background-color: red;" name="delete" value="delete">Add To Cart</button>
                     </td>  
                        
                     <?php
                    }
                    ?>
                   
            
                  </form>
                    <?php
                    
            }
           


            ?>
            
              

            </table>
            <p><a href="demo.php">Go To Cart</a></p>
            


    </div>

</body>

</html>
<?php
    }
?>