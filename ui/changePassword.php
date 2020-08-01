<?php

    require_once('../php/connexion.php');
    session_start();
    require_once('../php/controller.php');
    

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
    <title>Change Password</title>
    <link rel="stylesheet" href="../styles/appstyle.css">
    <link rel="stylesheet" href="../styles/responsive.css">
</head>
  <body>
      
        <div class="mentorChangeForm"  style="margin-top:90px;">
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
                        <input type="password" name="FormerPsswrd" id="" required><br>
                                <?php 
                                    if(isset($_GET['updated'])):
                                        echo '<div id="displayer">'.$UpdatePass.'</div>';
                                    endif;
                                ?>
                        <label for="">New Password</label><br>
                        <input type="password" name="Newpsswrd" id="" required><br>
                        <label for="">Confirm Password</label><br>
                        <input type="password" name="confirmPasswrd" id="" required><br>

                        <div class="class2">
                            <input type="submit" value="Confirm" name="confirmbtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
  <script>
      const displayer = document.getElementById("displayer")
            if(displayer){
                setTimeout(function(){
                    displayer.style.display = "none";
                },2000)
            }
  </script>
  </body>
</html>