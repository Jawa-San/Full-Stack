<?php 
require("db.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
$yourName = $conn->real_escape_string($_POST['your_name']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$yourPhone = $conn->real_escape_string($_POST['your_phone']);
$comments = $conn->real_escape_string($_POST['comments']);
$query="INSERT INTO `contact_form_info` (name, email, phone, comments) VALUES ('$yourName','$yourEmail', '$yourPhone', '$comments')";
$result = mysqli_query($con, $query);
if($result){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>
