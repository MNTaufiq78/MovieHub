<?php
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$sel="INSERT INTO feedback (name,email,feedback) VAUES ('$name','$email','$feedback')"
$result = mysqli_query($dbh,$sel) or 
die("Error querying the database");
echo "<br/>";
echo"Thank you for your feedback!!";
?>