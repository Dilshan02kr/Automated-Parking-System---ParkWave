<?php  
session_start();

include 'config.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $select = "SELECT * FROM `users` WHERE email = '$email'";

    $result = mysqli_query($con, $select);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            if($row['roll'] == 'driver'){
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['dmsg'] = "LOGGED AS A DRIVER!";

                header("Location: ./Home.php");
            }
            elseif($row['roll'] == 'spaceowner'){
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['rmsg'] = "LOGGED AS A SPACE OWNER!";

                header("Location: ./ownerdashboard.php");
            }
        }
    }else {
        $error[] = 'User not found!!!';
    }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIN form</title>
    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="./style/footernav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <div class="body-sec"><?php
    if(isset($_SESSION['msg'])){ ?>
    <div id="tmsg">
        <div class="tcont">
            <p><?php echo $_SESSION['msg'] ?></p>
            <i class="bi bi-check-circle"></i>
        </div>
    </div>

  <?php }  ?>
        <div class="container">
            <div class="form-box">
                <div class="form-img"></div>
                <div class="form-form">
                    <div class="form-from-box">
                        <div class="form-head">
                            <div class="form-topic">
                                <p>LOG IN</p>
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
                                        <p>Email </p>
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="input-section">
                                        <p>Password</p>
                                        <input type="password" name="psw" placeholder="Enter the password" required>
                                    </div>
                                    <div class="input-selection btn">
                                        <div class="s-btn">
                                            <input type="submit" name="login" value="LOG IN">
                                        </div>
                                        <div class="forget-section">
                                            <p>Forget Password
                                            </p>
                                        </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function(){
            <?php 
                if(isset($_SESSION['msg'])) { ?>
                $("#tmsg").addClass("display");
                setTimeout(
                    function(){
                        $("#tmsg").removeClass("display");
                    }, 6000
                );
                <?php }
                unset($_SESSION['msg'])
                ?>
        });
    </script>

    <script src="./script/navbar.js"></script>
</body>

</html>