<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Services</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <a href = "welcome1.php"><img src ="admin.jpg" width="100" height="100" ></a>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="u_con.php">Contact Details</a></li>
            <li><a href="u_add.php">Address Details</a></li>
            <li><a href="booking.php">Bookings</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="query.php">Queries</a></li>
            <li><a href="logout1.php">Logout</a></li>
        </ul>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header"><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?></div>  
        <div class="info">
          <div>
            List of Services
          <table style = "width:80%">
          <tr>
			      <th> Book Id </th> 
			      <th> Venue Selection </th> 
			      <th> Invitation Card </th> 
                  <th> Entertainment </th> 
			      <th> Food </th> 
                  <th> Photography </th> 
			      <th> Transport </th> 
          </tr>


          </div>
      </div>
    </div>
</div>


<?php
$username=$_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM service";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["venue"] . "</td><td>". $row["card"] . "</td><td>". $row["sound"] . "</td><td>". $row["food"] . "</td><td>". $row["photo"] . "</td><td>" . $row["trans"]. "</td></tr>";
}
echo "</table>";
}
$conn->close();
?>
</table>

</body>
</html>