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
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "questions_task";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM `answers` WHERE 1";
    #$result = $conn->query($sql);
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {     // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "<H2>Name: " . $row["Name"]. "<br>Answers:<br>Who is the best cricketer in the world? : " . $row["Ans1"]. "<br>What are the colors in the national flag?: " . $row["Ans2"]. "<br>Time: ". $row["Time_s"];
      }
    } else {
    echo "0 results";
  }
    ?>
  <br>
  <button onclick="location.href='http://localhost/master.php'" type="button">Finish</button>
  </div>
</body>
</html>
</html>