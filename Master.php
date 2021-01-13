<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>
      Appscript  Task
   </title>
   <style>

   body {
      background-image: url('banner.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
   }
   div {
     padding-left: 15%;
     padding-top: 13%;
  }
</style>
</head>
<body>
   <div>
      <form action="pg1.php" method="post">
         <h1>Hello and Welcome<br>Lets start with your Name: </h1> <input type="text" name="name"><br>
         <input type="submit" name = 'SubmitButton'>
      </form>
  </div>
</body>
</html>
</html>