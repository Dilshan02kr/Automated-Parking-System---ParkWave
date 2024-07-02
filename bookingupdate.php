<?php  
include "config.php";

session_start();

$bookingID = $_GET['update'];

$select = "SELECT * FROM `booking` WHERE bookingID = '$bookingID'";

$sresult = mysqli_query($con, $select);

$srow = mysqli_fetch_assoc($sresult);


if(isset($_POST['submit'])){
    $vNumber = $_POST['vNumber'];
    $tele = $_POST['tele'];
    $date = $_POST['date'];
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];

    $update = "UPDATE `booking` SET `vNumber`='$vNumber',`tele`='$tele',`date`='$date',`startTime`='$stime',`endTime`='$etime' WHERE bookingID = '$bookingID'";

    $bresult = mysqli_query($con, $update);

    if($bresult){
        header("Location: userprofile.php");
    }


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking form</title>
    <link rel="stylesheet" href="./style/bookingupdate.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
   
<div class="body-sec">
    <div class="container">
        <div class="form-section">
            <div class="form-form">
                <div class="form-box">
                    <div class="form-head">
                        <div class="form-topic">
                            <p>UPDATE BOOKING DETAILS</p>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-input">
                            <form action="" method="POST">
                                
                                <div class="input-section">
                                    <p>Vehicle Number</p>
                                    <input type="text" name="vNumber" value="<?php echo $srow['vNumber'] ?>" required>
                                </div>
                                
                                <div class="input-section">
                                    <p>Telephone</p>
                                    <input type="text" name="tele" value="<?php echo $srow['tele'] ?>">
                                </div>
                                <div class="input-section">
                                    <p>Booking Date</p>
                                    <input type="date" name="date" value="<?php echo $srow['date'] ?>" required>
                                </div>
                                <div class="input-section">
                                    <p>Check In</p>
                                    <input type="time" name="stime" value="<?php echo $srow['startTime'] ?>" required>
                                </div>
                                <div class="input-section">
                                    <p>Check Out</p>
                                    <input type="time" name="etime" value="<?php echo $srow['endTime'] ?>" required>
                                </div>
                                <div class="s-btn">
                                    <input type="submit" name="submit" value="UPDATE">
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