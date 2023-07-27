<?php 

 $conn = mysqli_connect('localhost','root','','database');

 if(isset($_POST['submit']))
 {   
    //personal details
$name = $_POST['fname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$number = $_POST['contact'];
$gender = $_POST['gender'];
$occu = $_POST['occu'];

//event details
$event = $_POST['event'];
$start = $_POST['start'];
$end = $_POST['end'];
$venue = $_POST['venue'];
$guest = $_POST['guest'];
$special = $_POST['special'];

//address details
$type = $_POST['type'];
$nation = $_POST['nation'];
$state = $_POST['state'];
$district = $_POST['district'];
$block = $_POST['block'];
$ward = $_POST['ward'];

//services details
$venue1 = $_POST['venue1'];
$card = $_POST['card'];
$music = $_POST['music'];
$food = $_POST['food'];
$photo = $_POST['photo'];
$trans = $_POST['trans'];
      
	$stmt1 = "INSERT INTO personal(fname,dob,email,mob,gender,occupation) 
                VALUES('$name','$dob','$email','$number','$gender','$occu')";
    $query1 = mysqli_query($conn,$stmt1);

    $stmt2 = "INSERT INTO event(type,start,end,venue,guest,special) 
                VALUES('$event','$start','$end','$venue','$guest','$special')";
    $query2 = mysqli_query($conn,$stmt2);            

    $stmt3 = "INSERT INTO address(type,nation,state,district,block,ward) 
                VALUES('$type','$nation','$state','$district','$block','$ward')";
    $query3 = mysqli_query($conn,$stmt3);

    $stmt4 = "INSERT INTO service(venue,card,sound,food,photo,trans) 
                VALUES('$venue1','$card','$music','$food','$photo','$trans')";
    $query4 = mysqli_query($conn,$stmt4);

    header("Location: profile.php");
    
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style_b.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Booking Form </title> 
</head>
<body>
    <div class="container">
        <header>Booking Form</header>

        <form action="book.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="fname" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="contact" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select id="gender" name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="occu" placeholder="Enter your occupation" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Event Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Event Type</label>
                            <select id="event" name="event" required>
                                <option disabled selected>Select event type</option>
                                <option>Wedding</option>
                                <option>Social Gathering</option>
                                <option>Corporate Event</option>
                                <option>Concert</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Start Date</label>
                            <input type="date" name="start" placeholder="Enter start date" required>
                        </div>

                        <div class="input-field">
                            <label>End Date</label>
                            <input type="date" name="end" placeholder="Enter end date" required>
                        </div>

                        <div class="input-field">
                            <label>Venue</label>
                            <select id="venue" name="venue" required>
                                <option disabled selected>Select venue</option>
                                <option>Mumbai</option>
                                <option>Jogeshwari</option>
                                <option>Goregaon</option>
                                <option>Navi Mumbai</option>
                                <option>Andheri</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Number of guests</label>
                            <input type="number" name="guest" placeholder="Enter number of guests" required>
                        </div>

                        <div class="input-field">
                            <label>Special Instructions</label>
                            <input type="text" name="special" placeholder="Enter special instructions" required>
                        </div>
			</div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" name="type" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nation" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" name="state" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" name="district" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" name="block" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" name="ward" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Service Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Venue Selection</label>
                            <select id="venue1" name="venue1" required>
                                <option disabled selected>Select choice</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Invitation Card</label>
                            <select id="card" name="card" required>
                                <option disabled selected>Select choice</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Entertainment</label>
                            <select id="music" name="music" required>
                                <option disabled selected>Select choice</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Food and Drinks</label>
                            <select id="food" name="food" required>
                                <option disabled selected>Select choice</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Photography</label>
                            <select id="photo" name="photo" required>
                                <option disabled selected>Select choice</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Transport</label>
                            <select id="trans" name="trans" required>
                                <option disabled selected>Select choice</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <input type="submit" name="submit" class="submit">
                        <i class="uil uil-navigator"></i>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="js/script1.js"></script>
</body>
</html>

