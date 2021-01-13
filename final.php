<?php
session_start();
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
  	<?php
  	$ans2 ="";
  	echo "<h2>User: ".$_SESSION['Name']."</h2><br><br>";   //printing ans1
  	echo "<br><b>Selected option for Que1: Who is the best cricketer in the world?<br> ";
  	echo $_SESSION['Ans1']."<br><br>";
  	if(isset($_POST['SubmitButton'])){
	if(!empty($_POST['checkArr'])){
		echo "<br>Selected options for Que2: What are the colors in the Indian national flag?<br>"; //printing ans2
		foreach($_POST['checkArr'] as $checked){
			echo $checked . ', ';
			$ans2 .= $checked ." ";
		}
		echo "<br><br></br>";
	} 
	else{
		echo '<div class="error">Checkbox is not selected!</div>';
	}
	echo date('l jS \of F Y h:i:s A');
}
?>
</h3>
</form>
<br>
	<button onclick="location.href='http://localhost/master.php'" type="button">Finish</button>
	<button onclick="location.href='http://localhost/results.php'" type="button">History</button>
</div>
</body>
</html>

<?php
$servername = "localhost";  //defining the parameters
$username = "root";
$password = "";
$dbname = "questions_task";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `answers` (`Name`, `Ans1`, `Ans2`) VALUES ('".$_SESSION['Name']."', '".$_SESSION['Ans1']."', '".$ans2."')";
if ($conn->query($sql) === TRUE) {
  #echo "New record created successfully";
	echo "";
} #else {
 # echo "Error: " . $sql . "<br>" . $conn->error;
#}
session_destroy();
?>