<?php
session_start();

if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $_SESSION['Name'] = $_POST['name']; //get input text
  #echo $_SESSION['Name'];
}
?>

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
</style>
</head>
<body>
<?php
echo '<H3 align = "right">Hello '.$_SESSION['Name']."</H3>";
?>
<div>
<form action="pg2.php" method = "post" >
  <h3>
  Q1: Who is the best cricketer in the world?
  <br>Options:
  <br>
  <input type="radio" name="q1" value="Sachin Tendulkar" required>Sachin Tendulkar<br>
  <input type="radio" name="q1" value="Virat Kolli">Virat Kolli<br>
  <input type="radio" name="q1" value="Adam Gilchirst">Adam Gilchirst<br>
  <input type="radio" name="q1" value="Jacques Kallis">Jacques Kallis<br>
  <input type="Submit" name="SubmitButton">
</h3>
</form>
</div>
</body>
</html>