<!DOCTYPE html>
<html>
<head>
<title>Booking</title>
<h2><center>* * * * * Booking Confirmed * * * * *</center></h2>
</head>
<center>
<body>

Your booking has been confirmed. We will try our best to make your event a memorable one.<br>
We will contact you in 2-3 business days.<br>
Your patience with us is our key to success.<br>
<table>
<tr>
			  <th> Booking ID </th> 
</tr>

<?php

$conn = mysqli_connect("localhost", "root", "", "database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id FROM personal ORDER BY id DESC LIMIT 1 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"] . "</td></tr>";
}
echo "</table>";
}
$conn->close();
?>
</table>

Check your booking details at <a href = "details.php">MyAccount</a> section.

<h3><center>* * * * * Thank You for Choosing Us * * * * *</center></h3>
</body>
</html>