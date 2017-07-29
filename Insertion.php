<?php 
echo "hello\n";
echo $_POST["Cars"];
include 'connector.php';
$Id=$_POST["CarID"];
$Company=$_POST["CompanyName"];
$Model=$_POST["Model"];
$Price=$_POST["Price"];
$Distance=$_POST["Distance"];
$Year=$_POST["Year"];
$Email=$_POST["Email"];
$Sid=$_POST["Sid"]
$conn=connect();
if($conn === false){
    die("\nERROR: Could not connect. " . mysqli_connect_error());
}
//name, phone,email,carname,color,price
$sql = "INSERT INTO Cars VALUES ('$Id','$Company','$Model','$Price','$Distance','$Year','$Email','$Sid')";
if (mysqli_query($conn, $sql)) {
    echo "\nNew record created successfully";
} else {
    echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
	
?>