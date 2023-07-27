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
  <title>Welcome</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar">
       <a href = "welcome1.php"> <img src="images/admin.jpg" width="100" height="100" > </a>
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
          <center>
    <table>
    <tr>
    <th><img src="images/users.png" height=200 width=200></th>
    <th><img src="images/book.png" height=200 width=200></th>
    </tr>
    <tr style="background-color: #1ea5bd; color: white; font-size:25px">
    <td style="text-align:center">
        <a href="users.php">Users</a></td>
    <td style="text-align:center">
        <a href="booking.php">Bookings</a></td>
    </tr>
    <tr>
    <th><img src="images/ser.png" height=200 width=200></th>
    <th><img src="images/query.jpg" height=200 width=200></th>
    </tr>
    <tr style="background-color: #1ea5bd; color: white; font-size:25px">
    <td style="text-align:center">
        <a href="service.php">Services</a></td>
    <td style="text-align:center">
        <a href="query.php">Queries</a></td>
    </tr>
    </table>
    </center>


          </div>
      </div>
    </div>
</div>
</body>
</html>