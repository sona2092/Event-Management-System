<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
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
    <img src="images/user.jpg" width="100" height="100" >
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="welcome.php">Profile</a></li>
            <li><a href="details.php">Personal Details</a></li>
            <li><a href="address.php">Address Details</a></li>
            <li><a href="event.php">Event Details</a></li>
            <li><a href="select.php">Service Details</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
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
          <div><center><a href = "book.php">Book Now</a> and get connected with us</center></div>
          
      </div>
    </div>
</div>

</body>
</html>


