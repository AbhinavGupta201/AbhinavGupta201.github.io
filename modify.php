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
       
	$q="select name,quantity ,price ,order_id,price*quantity as total
     from ( item inner join Food_List on item.item_id =Food_List.item_id)
      inner join Orders 
      on item.item_id =Orders.item_id  
      where
      Orders.username
      ='$name'  and status='cart' ";

	
	
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
    </script>

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
                        <a href="cart.php">Cart</a>
                        <a href="history.php">history</a>
                        <a href="about_you.php">user</a>
                    </div>
                </div>
            </td>

        </tr>
    </table>
    <div style="margin:150px">
        <h1>Cart</h1>
        <form action="proceed.php" method="post">
            <table style="border-style: solid; border-color: black; width: 100%;">
                <tr style="background-color: yellow;">
                    <th>Order-Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>Total</th>
                    <th>Check</th>
                   

                </tr>
                <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($result);
           
            ?>
                <tr class="hist-tr">
                    <td align="center">
                        <?php echo isset($row["order_id"]) ? $row["order_id"]: "NULL"; ?> 
                    </td>
                    <td align="center">
                        <?php echo isset($row["name"]) ? $row["name"]: "NULL"; ?>
                    </td>
                    <td align="center">
                        <?php echo $row["price"]; ?>
                    </td>
                    <td align="center">
                        <?php echo $row["quantity"] ?>
                    </td>
                    <td align="center">
                        <?php echo $row["total"] ?>
                    </td>
                    <td align="center">
                        <input type="checkbox" name="o<?php echo $i; ?>" 
                        value="<?php echo isset($row["order_id"]) ? $row["order_id"]: "NULL"; ?>" ></input>
                     </td>  
                    <?php
            }
           


            ?>
                </tr>
                <?php
            $q1="select sum(price*quantity) as total from (Orders inner join Food_List on Orders.item_id =Food_List.item_id ) where status ='cart' and username ='$name' ";

            $res=mysqli_query($conn,$q1);
            $num2=mysqli_num_rows($res);

            $row=mysqli_fetch_array($res);

            
            ?>
                <tr>
                    <td colspan=4>
                    <td>
                </tr>
                <tr class="hist-tr" style="color:red; border:1px solid black;">
                    <td colspan="3" align="center"> Grand Total</td>
                    <td align="center">
                        <?php  echo isset($row["total"]) ? $row["total"]: "NULL"; ?>
                    </td>
                </tr>

            </table>
            <button type="submit" style="color: black; background-color: red;" name="delete" value="delete">Delete</button>
            
        </form>


    </div>

</body>

</html>
<?php
    }
?>