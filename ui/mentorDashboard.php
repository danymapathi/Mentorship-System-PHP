<?php

    require_once('../php/connexion.php');
    session_start();
    require_once('../php/controller1.php');

    
    $UpdatePass = "";

    if(isset($_GET['updated'])){
        switch ($_GET['updated']){
            case "true":
                $UpdatePass = "Password updated successfully !";
            break;

            case "false":
                $UpdatePass = "Password does not exist !";
            break;

            default:
                $UpdatePass = "Password does not match !";
            break;

        }
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Dashboard</title>
    <link rel="stylesheet" href="../styles/appstyle.css">
    <link rel="stylesheet" href="../styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">
    <style>
        
    </style>
    
</head>
    <body>
        <div class="wrapper">

            <div class="siderbar">
                <h2>Dashboard</h2>
                
                <ul>
                    <li><a href="#" class="active"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fas fa-key"></i>Change Pasword</a></li>
                    <li><a href="#" onclick="editpict()"><i class="fas fa-id-badge"></i>Change Photo</a></li>
                    <li><a href="#"><i class="fas fa-eye"></i>view Mentee</a></li>
                    <li><a href="#"><i class="fas fa-bullhorn"></i>News</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
                    
                </ul>
            </div>
            <div class="main-content">
                    <div class="header">
                        <p><span style="color:#183153;">Mentor</span>Ship</p>
                        <span class="user-name" style=""><?php if (isset($_SESSION['FirstName'])) {
                    echo $_SESSION['FirstName']; 
                }?></span>
                        <div class="right-header">
                            <img  class="img circle1" src="../img/user.jpg">
                        </div>
                        <div class="portofolio">
                            <a href="#"><i class="fas fa-home"></i></a>
                            <a href="#"><i class="far fa-comments"></i></a>                                      
                            <a href="#"><i class="far fa-bell"></i></a>
                            
                        </div>
                       
                    </div>
                    <div class="info"> 
                        <div class="box-container">
                            <div class="box">
                                <div class="counter">01</div>
                                <div class="content-counter">
                                    <h3>New Messages</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nisi cupiditate id est, voluptate, veniam vitae impedit 
                                     Aperiam culpa asperiores ullam</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="counter">02</div>
                                <div class="content-counter">
                                    <h3>All Request</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nisi cupiditate id est, voluptate, veniam vitae impedit 
                                     Aperiam culpa asperiores ullam</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="counter">03</div>
                                <div class="content-counter">
                                    <h3>All Mentee</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nisi cupiditate id est, voluptate, veniam vitae impedit 
                                     Aperiam culpa asperiores ullam</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>    
                        <div class="mentorChangeForm">
                            <div class="mentorChangeFormTitle">
                                <p>Changing Password</p>
                            </div>
                            <div class="mentorChangeFormulaire">
                                <div class="class0">
                                    <img src="../img/Dr.-Cunha-300x300.png" alt="">
                                </div>
                                <div class="class1">
                                    <div>
                                        <h4>About changing</h4> 
                                    </div>
                                    <form action="" method="POST">
                                        <label for="">Former Password</label><br>
                                        <input type="password" name="FormerPsswrd1" required><br>
                                        <label for="">New Password</label><br>
                                        <input type="password" name="Newpsswrd1" required><br>
                                        <label for="">Confirm Password</label><br>
                                        <input type="password" name="confirmPasswrd1" required><br>

                                        <?php 
                                            if(isset($_GET['updated'])):
                                                echo '<div id="displayer1">'.$UpdatePass.'</div>';
                                            endif;
                                        ?>

                                        <div class="class2">
                                            <input type="submit" name="confirmbtn1">
                                        </div>
                                    </form>    
                                </div>
                            </div>
                     </div>
                        
                            <div class="boxTitle">
                                <h5>My Mentees </h5>
                            </div>
                        <div class="box-container">
                            <div class="box">
                                <div class="counterImage"> <img src="../img/Dr.-Cunha-300x300.png" alt=""> </div>
                                <div class="content-counter">
                                    <h3>Dany Mapathi</h3>
                                    <a href="#" style="font-weight:bold;">Unfollow</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="counterImage"> <img src="../img/Dr.-Cunha-300x300.png" alt=""> </div>
                                <div class="content-counter">
                                    <h3>Dany Mapathi</h3>
                                    <a href="#" style="font-weight:bold;">Unfollow</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="counterImage"> <img src="../img/Dr.-Cunha-300x300.png" alt=""> </div>
                                <div class="content-counter">
                                    <h3>Dany Mapathi</h3>
                                    <a href="#" style="font-weight:bold;">Unfollow</a>
                                </div>
                            </div>
                        </div>  
                            <div class="edit-container1" id="edit">
                            <label class="cancel" onclick="return closeditpict()">X</label>
                                <div class="edit-content1">

                                    <h1>Create Profile</h1>
                                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                                        <label for="">PROFILE IMAGE</label><br><br>
                                        <input type="file" name="uploadFile"><br>

                                        <label for="">BIO</label><br><br>
                                        <textarea name="bioprofile" id="" cols="40" rows="5"></textarea><br><br>

                                        <input type="submit" name="uploadBtn" value="Set Profile">
                                    </form>
                                </div>
                            </div> 

                                        <?php

                                            if (isset($msg_upload)) {
                                               echo"<strong>$msg_upload</strong>";
                                            }
                                        
                                        ?> 
                    </div>
             </div>
             <script>
                const displayer1 = document.getElementById("displayer1")
                        if(displayer1){
                            setTimeout(function(){
                                displayer1.style.display = "none";
                            },2000)
                        }
            </script>
             <script src="../js/searchpopup.js"></script>
      </body>
</html>