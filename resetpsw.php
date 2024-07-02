<?php
session_start();

include 'config.php';

$userID = $_SESSION['userID'];

$select = "SELECT * FROM users WHERE userID = '$userID'";

$result = mysqli_query($con, $select);


$row = mysqli_fetch_array($result);

$_SESSION['userID'] = $row['userID'];

$roll = $row['roll'];

if (isset($_POST['update'])){

    $psw = $_POST['psw'];
    $repsw = $_POST['repsw'];

    $update = "UPDATE `users` SET `psw`='$psw',`rePsw`='$repsw' WHERE userID = '$userID'";

    $updtresult = mysqli_query($con, $update);

    if($updtresult){
        if($roll == 'driver'){
            header("Location: userprofile.php");
        }
        elseif($roll == 'spaceowner'){
            header("Location: owneruserprofile.php");
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="./style/updateuser.css">
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
                            <p>RESET PASSWORD</p>
                           
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-input">
                            <form action="" method="POST">
                            <div class="input-section">
                                    <p>Password</p>
                                    <input type="password" name="psw" id="psw" placeholder="Password" required>
                                </div>
                                <div class="input-section">
                                    <p>Re-Password</p>
                                    <input type="password" name="repsw" id="re-psw"  placeholder="Re-enter Password" required>
                                </div>
                                
                                <div class="input-selection btn">
                                    <div class="s-btn">
                                        <input type="submit" name="update" value = 'RESET'>
                                        
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 

    <!-- JS for validate password -->
    <script src="./script/pasword.js"></script>
    <script src="./script/navbar.js"></script>
    
</body>
</html>