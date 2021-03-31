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

        $nam=$_POST['nam'];
       $address=$_POST['address'];
       $mob=$_POST['Mobile'];
	$q="insert into Custmor_Details values ('$nam','$name','$address',$mob)";
       mysqli_query($conn,$q);

       $q="update Orders set status='placed' where username='$name'";
       mysqli_query($conn,$q);
               
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menu</title>
        <meta charset="utf-8">
        <meta name="description" content="Night Canteen Menu">
        <meta name="author" content="Aniket Srivastava">
        <meta name="keywords" content="Menu, Night Canteen, Food"> 
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <style>
            *{
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .page-title{
                font-size: 60px;
                text-align: center;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: bold;
            }
            .subheading{
                font-size: 50px;
                padding: 20px;
                font-family: 'Times New Roman', Times, serif;
            }
            body{
                padding: 15px;
            }
            p{
                font-size: 25px;
                /*text-align: center;*/
            }
            .category{
                margin-top: 40px;
                margin-bottom: 40px;
            }
            th, td{
                text-align: center;
                padding: 5px;
            }
            table{
                width: 90%;
                height: 200px;
                margin-left: 30px;
            }
            h2{
                text-align: center;
            }
            img{
                margin-left: 4.5cm;
            }
            #last{
                margin-left: 17.5cm;
            }
            .last{
                margin: 10px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="page-title">MENU</div>
        <form>
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="Paneer.png" width="150px" height="150px">   <h2>Veg Main Course</h2>
                </div>
                <div>
                <table>
                    <tr>
                        <th>Dish</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Quantity</th>
                    </tr>
                    <tr>
                        <td>Veg Kadhai</td>
                        <td>50</td>
                        <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                        <td><input type="hidden" value="101"></td>
                    </tr>
                    <tr>
                        <td>Paneer Tikka Masala</td>
                        <td>70</td>
                        <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                        <td><input type="hidden" value="102"></td>
                    </tr>
                    <tr>
                        <td>Paneer Mutter</td>
                        <td>60</td>
                        <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="103"></td>
                    </tr>
                    <tr>
                        <td>Channa Masala</td>
                        <td>50</td>
                        <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="104"></td>
                    </tr>
                    <tr>
                        <td>Dal Tadka</td>
                        <td>40</td>
                        <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="105"></td>
                    </tr>
                </table>
                </div>
            </div>
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="chicken.png" width="150px" height="150px">   <h2>Non-Veg Main Course</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Chicken Curry Masala</td>
                            <td>80</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="201"></td>
                        </tr>
                        <tr>
                            <td>Chicken Kolhapuri</td>
                            <td>90</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="202"></td>
                        </tr>
                        <tr>
                            <td>Chicken Hyderabadi</td>
                            <td>90</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="203"></td>
                        </tr>
                        <tr>
                            <td>Butter Chicken</td>
                            <td>100</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="204"></td>
                        </tr>
                        <tr>
                            <td>Chicken Kadhai</td>
                            <td>90</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="205"></td>
                        </tr>
                    </table>
                    </div>
            </div>
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="chinese.png" width="150px" height="150px">   <h2>Chinese Specials</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Fried Rice</td>
                            <td>50</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="301"></td>
                        </tr>
                        <tr>
                            <td>Gobi Manchurian</td>
                            <td>40</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="302"></td>
                        </tr>
                        <tr>
                            <td>Chicken Manchurian</td>
                            <td>80</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="303"></td>
                        </tr>
                        <tr>
                            <td>Chicken Noodles</td>
                            <td>60</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="304"></td>
                        </tr>
                        <tr>
                            <td>Egg Noodles</td>
                            <td>50</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="305"></td>
                        </tr>
                    </table>
                    </div>
            </div>
            <hr width="80%">
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="dosa.jpg" width="150px" height="150px">   <h2>South Indian</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Idli</td>
                            <td>20</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="401"></td>
                        </tr>
                        <tr>
                            <td>Plain Dosa</td>
                            <td>25</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="402"></td>
                        </tr>
                        <tr>
                            <td>Tomato Uthappa</td>
                            <td>30</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="403"></td>
                        </tr>
                        <tr>
                            <td>Masala Dosa</td>
                            <td>35</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="404"></td>
                        </tr>
                        <tr>
                            <td>Set dosa</td>
                            <td>20</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="405"></td>
                        </tr>
                    </table>
                    </div>
            </div>
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="biryani.jpg" width="150px" height="150px">   <h2>Rice Specials</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Curd Rice</td>
                            <td>30</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="501"></td>
                        </tr>
                        <tr>
                            <td>Veg Biryani</td>
                            <td>50</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="502"></td>
                        </tr>
                        <tr>
                            <td>Hyderabadi Biryani</td>
                            <td>70</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="503"></td>
                        </tr>
                        <tr>
                            <td>Egg Biryani</td>
                            <td>60</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="504"></td>
                        </tr>
                        <tr>
                            <td>Chicken Biryani</td>
                            <td>80</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="505"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="naan.jpg" width="150px" height="150px">   <h2>Indian Breads</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Chapati</td>
                            <td>10</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="100" value="0"></td>
                            <td><input type="hidden" value="601"></td>
                        </tr>
                        <tr>
                            <td>Naan</td>
                            <td>20</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="100" value="0"></td>
                            <td><input type="hidden" value="602"></td>
                        </tr>
                        <tr>
                            <td>Kulcha</td>
                            <td>30</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="100" value="0"></td>
                            <td><input type="hidden" value="603"></td>
                        </tr>
                        <tr>
                            <td>Alu paratha</td>
                            <td>25</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="100" value="0"></td>
                            <td><input type="hidden" value="604"></td>
                        </tr>
                        <tr>
                            <td>Gobi Paratha</td>
                            <td>30</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="100" value="0"></td>
                            <td><input type="hidden" value="605"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr width="80%">
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="shawarma.png" width="150px" height="150px">   <h2>Grill / Shawarma</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Veg Shawarma</td>
                            <td>60</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="701"></td>
                        </tr>
                        <tr>
                            <td>Non-Veg Shawarma</td>
                            <td>80</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="702"></td>
                        </tr>
                        <tr>
                            <td>Full Grill</td>
                            <td>300</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="703"></td>
                        </tr>
                        <tr>
                            <td>Chicken Tikka</td>
                            <td>100</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="704"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="kulfi.png" width="150px" height="150px">   <h2>Desert</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Cornetto</td>
                            <td>50</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="801"></td>
                        </tr>
                        <tr>
                            <td>Chocobar</td>
                            <td>20</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="802"></td>
                        </tr>
                        <tr>
                            <td>Matka kulfi</td>
                            <td>30</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="803"></td>
                        </tr>
                        <tr>
                            <td>Candy</td>
                            <td>10</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="10" value="0"></td>
                            <td><input type="hidden" value="804"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="category" style="width: 33%; float: left;">
                <div>
                <img src="coffee.png" width="150px" height="150px">   <h2>Hot and Cold Beverages</h2>
                </div>
                <div>
                    <table>
                        <tr>
                            <th>Dish</th>
                            <th>Price</th>
                        <th>Availability</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>Milk Tea</td>
                            <td>10</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="50" value="0"></td>
                            <td><input type="hidden" value="901"></td>
                        </tr>
                        <tr>
                            <td>Coffee</td>
                            <td>20</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="50" value="0"></td>
                            <td><input type="hidden" value="902"></td>
                        </tr>
                        <tr>
                            <td>Badam Milk</td>
                            <td>20</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="50" value="0"></td>
                            <td><input type="hidden" value="903"></td>
                        </tr>
                        <tr>
                            <td>Pepsi 500ml</td>
                            <td>40</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="50" value="0"></td>
                            <td><input type="hidden" value="904"></td>
                        </tr>
                        <tr>
                            <td>Lime Juice</td>
                            <td>10</td>
                            <td>YES</td>
                        <td><label for="quantity"></label>
                            <input type="number" min="0" max="50" value="0"></td>
                            <td><input type="hidden" value="905"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="last">
            <input type="submit" value="Submit" class="last">
            <input type="reset" value="Reset" class="last"> 
            </div>
        </form>
    </body>
</html>
<?php } ?>