<?php
    session_start();
    include "config.php";

    if (isset($_POST['SIGNUP'])){

        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $tele = $_POST['tele'];
        $psw = $_POST['psw'];
        $repsw = $_POST['repsw'];
        $roll = "spaceowner";

        $select = "SELECT * FROM `users` WHERE email = '$email'";

        $check = mysqli_query($con, $select);

        if(mysqli_num_rows($check) > 0){
            $error[] = 'Email already used!!!';
        }
        else {
            $insert = "INSERT INTO `users`(`fName`, `lName`, `address`, `email`, `tele`, `psw`, `rePsw`, `roll`) VALUES ('$fName','$lName','$address','$email','$tele','$psw','$repsw','$roll')";

            $result = mysqli_query($con, $insert);
    
            if($result){
                $_SESSION['msg'] = 'REGISTERED AS A RENTER!';
                header("Location: login.php");
            }
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner reg form</title>
    <link rel="stylesheet" href="./style/spceownerregistrationform.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>

 <div class="body-sec">
    <div class="container">
        <div class="form-section">
            <div class="form-img">
            </div>
            <div class="form-form">
                <div class="form-box">
                    <div class="form-head">
                        <div class="form-topic">
                            <p>SPACE-OWNER REGISTRATION</p>
                            <?php 
                                            if (isset($error)){
                                                foreach($error as $errors){
                                                    echo "<span class = 'errom'>$errors</span>";

                                                };
                                            };
                                            ?>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-input">
                            <form action="" method="POST">
                                <div class="input-section">
                                    <p>Name</p>
                                    <div class="two-input">
                                        <input type="text" name="fName" placeholder="First Name" required>
                                        <input type="text" name="lName" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="input-section">
                                    <p>Address</p>
                                    <input type="text" name="address" placeholder="City, State" required>
                                </div>
                                <div class="input-section">
                                    <p>Email</p>
                                    <input type="email" name="email" placeholder="example@gmail.com" required>
                                </div>
                                <div class="input-section">
                                    <p>Telephone</p>
                                    <input type="text" name="tele" placeholder="Telephone" required>
                                </div>
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
                                        <input type="submit" name="SIGNUP" value="REGISTER">
                                    <div class="login-section">
                                        <p>Already have an account? <span><a href="./login.php">login</a></span>
                                        </p>
                                    </div>
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