<?php
session_start();

if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $_SESSION['Ans1'] = $_POST['q1']; //get input text
  #echo $_SESSION['Ans1'];
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
<form action="final.php" method = "post" >
  <h3>
  Q2: What are the colors in the Indian national flag?
  <br>Options:[Can select Multiple:]
  <br>
  <input type="checkbox" name="checkArr[]" value="White"><label>White</label><br>
  <input type="checkbox" name="checkArr[]" value="Yellow"><label>Yellow</label><br>
  <input type="checkbox" name="checkArr[]" value="Orange"><label>Orange</label><br>
  <input type="checkbox" name="checkArr[]" value="Green"><label>Green</label><br>
  <input type="Submit" name="SubmitButton">
</h3>
</form>
</div>
</body>
</html>