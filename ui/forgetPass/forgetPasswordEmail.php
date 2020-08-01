<?php
    session_start();
    require_once('../../php/connexion.php');
    require_once('../../php/controller.php');

    if (isset($_POST['mailTestBtn'])) {
        $queryMail= $db->prepare("SELECT * FROM usertable WHERE User_Mail=:E_MAIL");
        $queryMail->execute(array('E_MAIL'=>$_POST['mailTest']));

        $mailTest=$_POST['mailTest'];
        $_SESSION['mailTestValue']=$mailTest;
     
      
        if ( $queryMail->rowCount()>0) { 
           header('location:forgetPasswordFirstName.php');
        
        }else{
            echo "<script> alert('This email does not exist);</script>";
            $mail_not_exist="This email does not exist";
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
                        <h1><span style="color:tomato;">Email</span> <span  style="color: #183153;">Test</span> <span style="color: tomato;">Session</span> </h1>
                        <div class="formulaire">
                                
                                <form method="post">
                                    <label for="">Enter your former Email address</label><br><br>
                                    <input type="text" name="mailTest" placeholder="Enter Your Email..."><br>

                                    <?php
                                       if(isset($mail_not_exist)){
                                           echo '<span class="help-block small"><span style="color: red;">'.$mail_not_exist.'</span></span><br/>';
                                       }

                                    ?>
                                    <input type="submit" name="mailTestBtn" value="continue"><br>
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