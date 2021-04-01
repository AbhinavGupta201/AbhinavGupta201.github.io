<?php
 session_start();
 session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
       <title>Logout</title>
       <meta http-equiv="refresh" content= "1; url=index.html"/>
</head>
<body>
  <div style="margin:100px;">
    <h1>You have Successfully logout..</br>Will be redirected to home page after the 1 sec.</h1>
    <a href="index.html">go to home</a>
  </div>
  
</body>
</html>
