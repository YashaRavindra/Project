<?php
function connect(){
$servername = "handson-mysql";
$username="guestinterns";
$password="interns2017";
$dbname= "intern2017_group4";
return $conn= mysqli_connect($servername, $username, $password, $dbname);
}
?>