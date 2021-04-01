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
    .i202{
      text-align:none;
    }
    .alert {
  padding: 20px;
  background-color: green; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
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
      <th align="left"><img src="restorant_logo.png" alt="Logo" width="100px" height="100px " ; /> </td>
     
      <th align="left"><a href="menu.php" class="i202" style="text-decoration:none; font-weight:20px;">Menu</a></td>
      
      
      <th align="center">
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Hello
            <?php
                                                                
           echo $_SESSION["name"];
            ?>
          </button>
          <div id="myDropdown" class="dropdown-content">
            
            <a href="demo.php">Cart</a>
            <a href="history.php">history</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </th>

    </tr>
  </table>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  You Have Succesfully loged in!!!
</div> 
  <h1 style="margin:300px;"> See our Menu to Place an Order</h1>

</body>

</html>
<?php
}
?>