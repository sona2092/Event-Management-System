<?php
$name = $_POST['name'];
$num = $_POST['contact'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

//database connection

$conn = new mysqli('localhost','root','','database');
if(mysqli_connect_error())
{
	die('Connection failed: '.mysqli_connect_error());
}
else
{
	$stmt = $conn->prepare("insert into contact(name,email,number,subject,message) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$name,$email,$num,$subject,$msg);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>
<?php
echo '<script>alert("Your message has been sent")</script>';
?>
