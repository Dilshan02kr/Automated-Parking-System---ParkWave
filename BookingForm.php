<?php  
include "config.php";

session_start();

$spaceID = $_GET['book'];
$userID =$_SESSION['userID'];

$select = "SELECT * FROM `spaces` WHERE spaceID = '$spaceID'";

$result = mysqli_query($con, $select);

$row = mysqli_fetch_assoc($result);

$spaceImg = $row['spaceImg'];
$address = $row['address'];
$city = $row['city'];
$pName = $row['pName'];

if(isset($_POST['submit'])){
    $vNumber = $_POST['vNumber'];
    $tele = $_POST['tele'];
    $date = $_POST['date'];
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];

    $insert = "INSERT INTO `booking`(`spaceID`, `userID`, `vNumber`, `tele`, `date`, `startTime`, `spaceImg`, `endTime`, `address`, `city`, `pName`) VALUES ('$spaceID','$userID','$vNumber','$tele','$date','$stime', '$spaceImg', '$etime', '$address', '$city', '$pName')";

    $bresult = mysqli_query($con, $insert);

    if($bresult){
        $_SESSION['bmsg'] = "BOOKING SUCCESSFULL!";
        header("Location: home.php");
    }


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking form</title>
    <link rel="stylesheet" href="./style/booking.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
   
<div class="body-sec">
    <div class="container">
        <div class="form-section">
            <div class="form-img">
            <img src="./upload/<?php echo $row['spaceImg'] ?>" alt="">
            </div>
            <div class="form-form">
                <div class="form-box">
                    <div class="form-head">
                        <div class="form-topic">
                            <p>BOOKING FORM</p>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-input">
                            <form action="" method="POST">
                                
                                <div class="input-section">
                                    <p>Vehicle Number</p>
                                    <input type="text" name="vNumber" placeholder="Vehicle Number" required>
                                </div>
                                
                                <div class="input-section">
                                    <p>Telephone</p>
                                    <input type="text" name="tele" placeholder="Telephone">
                                </div>
                                <div class="input-section">
                                    <p>Booking Date</p>
                                    <input type="date" name="date" required>
                                </div>
                                <div class="input-section">
                                    <p>Check In</p>
                                    <input type="time" name="stime" required>
                                </div>
                                <div class="input-section">
                                    <p>Check Out</p>
                                    <input type="time" name="etime" required>
                                </div>
                                <div class="s-btn">
                                    <input type="submit" name="submit" value="BOOK">
                                 </div>
        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="./script/navbar.js"></script>
    
</body>
</html>