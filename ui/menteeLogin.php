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
    <body>
        <div class="cont">
            <div class="form sign-in">
             <form action="" method="post">
                <h2>Sign In</h2>
                <label for="">
                    <span>Email Address</span>
                    <input type="Email" name="E_mail"  id="">
                    <?php
                            if (isset($erreur_message_mail)) {
                                echo '<span class="help-block small" id="Emall"><span style="color: red;">'.$erreur_message_mail.'</span></span><br/>';
                            }
                        ?>
                </label>
                <label for="">
                    <span>Password</span>
                    <input type="password" name="PassWrd" id="">
                    <?php
                        if (isset($erreur_message_password)) {
                            echo '<span class="help-block small" id="Epass"><span style="color: red;">'.$erreur_message_password.'</span></span><br/>';
                        }
                        ?>
                </label>
                <input type="submit" class="submit" value="Sign In" name="logbtn">
             </form> 
               <div class="forget-link">
                     <a href="forgetPass/forgetPasswordEmail.php" class="forgot-pass" style="margin-top: 25px;"><span>Forgot Password ?</span></a>
               </div>

                <div class="social-media">
                    <ul>
                        <li><a href="#"><img src="../img/facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="../img/twitter.png" alt=""></a></li>
                        <li><a href="#"><img src="../img/linkedin.png" alt=""></a></li>
                        <li><a href="#"><img src="../img/instagram.png" alt=""></a></li>
    
                    </ul>
                </div>
            </div> 

            <div class="sub-cont">
                <div class="imgslide">
                    <div class="img-text m-up">
                        <h2>New here</h2>
                        <p>Sign up and discover great amount of opportunities</p>
                    </div>
                    <!-- <div class="img-text m-in">
                        <h2>One of us?</h2>
                        <p>If you already has an account, just sign in we missed you!</p>
                    </div>  -->
                    <div class="img-btn">
                        <a href="menteeSignup.php" class="m-up"> <span>Sign Up</span></a>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript" href="logSin.js"></script>

        <script type="text/javascript">
            const Emall= document.getElemetById("Emall")
            const Epass= document.getElementById("Epass")

            if (Emall) {
                setTimeout(function(){
                    Emall.style.display="none";
                },2000)
            }

            if (Epass) {
                setTimeout(function(){
                    Epass.style.display="none";
                },2000);
            }
        </script>
    </body>
</html>