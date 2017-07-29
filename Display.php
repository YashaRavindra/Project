<?php
include 'connecter.php';
$conn=connect();
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM Cars";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo " - CarID: " . $row["Id"] "<br> "."Company:" . $row["Company"]. "<br>"."ModelName:" . $row["Model"]. "<br>"."Price:" . $row["Price"]. "<br>"."DistanceCovered:" .  $row["Distance"]. "<br>". "Year Of Purchase:" . $row["Year"]. "<br>" "Email:". $row["Email"]. "<br>" . "Sid:". $row["Sid"] . "<br><br><br><br><br>";
    	
    }
} else {
   echo "0 results";
}



?>