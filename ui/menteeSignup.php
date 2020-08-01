<?php

    require_once('../php/connexion.php');
    session_start();
    require_once('../php/controller.php');
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/mentee.css">
    <link rel="stylesheet" href="../styles/responsive.css">
    <link rel="stylesheet" href="../Nunito/Nunito-ExtraBoldItalic.ttf">
</head>
    <body id="menteeBody">
    <div class="cont">
            <div class="form sign-in">
                <form action=""name="myForm" onsubmit = "return MailValidationFunction()"  method="post">
                <h2>Sign up</h2>
                <label for="">
                    <span>First Name</span>
                    <input type="text"name="Fname" id="" required>
                </label>
                <label for="">
                    <span>Last Name</span>
                    <input type="text" name="Lname" id="" required>
                </label>
                <label for="">
                    <span>Email</span>
                    <input type="Email" name="E_mail" id="" required>
                </label>
                <label for="">
                    <span>Password</span>
                    <input type="password" name="PassWrd" id="" required>
                </label>
                <label for="">
                    <span>Confirm Password</span>
                    <input type="password" name="PassWrd1" id="" required>
                </label>
                <input type="submit" class="submit" value="Sign up" name="UserRegisterbtn" required>
                </form>
            </div> 

            <div class="sub-cont">
                <div class="imgslide">
                    <div class="img-text m-up">
                        <h2>One of us</h2>
                        <p>If you have an account,just sign in. we missed you!</p>
                    </div>
                    <!-- <div class="img-text m-in">
                        <h2>One of us?</h2>
                        <p>If you already has an account, just sign in we missed you!</p>
                    </div>  -->
                    <div class="img-btn">
                        <a href="menteeLogin.php" class="m-up"> <span> Sign In</span></a>
                    </div>
                </div>
            </div>
        </div>

        <?php                 
            if (isset($mail_msg )) {
                echo"<strong>$mail_msg</strong>";
            }
            elseif (isset($signup_msg)) {
            echo"<strong>$signup_msg</strong>";
            }

        ?>
        
        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <script type="text/javascript" src="../js/MailValidation.js"></script>

    </body>
</html>