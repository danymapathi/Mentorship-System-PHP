<?php 
     session_start();
     require_once('../../php/connexion.php');
     require_once('../../php/controller.php');
    

   $UpdatePassMsg="";

   if (isset($_GET['updated'])) {
       switch ($_GET['updated']) {
           case 'true':
            $UpdatePassMsg="Password updated successfully!";

               break;
           
           default:
               $UpdatePassMsg="Password does not match !";
               break;
       }
   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForgetPassword</title>
    <link rel="stylesheet" href="../../styles/appstyle.css">
    <link rel="stylesheet" href="../../styles/responsive.css">
</head>
    <body>
          
               <div class="nav" id="home">
                    
                        <span class="brand">
                            <Span class="white-text">Mentor</Span><span class="brand-color">Ship</span>
                        </span>
                    
                        <div class="menu-container">
                            <label class="menu-toggle" for="toggle">&#9776;</label>
                            <input type="checkbox"  id="toggle">
                            <div class="menu">
                                    <a href="../../index.php" id="menu1">Home</a>
                                    <a href="../menteeLogin.php">Sign in</a>
                            </div>
                        </div>
                </div>

                   
            
                    <div class="forgetPass">
                        <h1><span style="color: tomato;"><span>PassWord</span><span style="color: #183153;"> Reset</span> <span>Session</span> </h1>
                        <div class="formulaire">
                                
                                <form action="" method="post">
                                    <label for="">Enter Your New Password</label><br><br>
                                    <input type="password" name="passwd" placeholder="Enter Your pass..."><br><br>
                                    <label for="">Confirm Your New Password</label><br><br>
                                    <input type="password" name="passwd1" placeholder="Confirm Your pass...">

                                    <?php
                                    
                                    if (isset($_GET['updated'])) {
                                        echo '<div id="displayer">'.$UpdatePassMsg.'</div>';
                                    }
                                    ?>
                                    <input type="submit" name="submitPass" value="Submit"><br>

                                </form>
                        </div>
                    
                    <div><br><br><br>
                <footer class="footer transp-back-color">
                    <div class="copy-right">
                    <span>© Copyright MentorShip</span>
                    <p>Dan && Rocky LTD</p>
                    </div>
            
                </footer>
        
         </body>
</html>