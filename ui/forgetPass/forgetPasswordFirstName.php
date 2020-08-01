<?php
    session_start();
    require_once('../../php/connexion.php');
    require_once('../../php/controller.php');

    

        if (isset($_POST['FnameTestBtn'])) {
            $mailTest2=$_SESSION['mailTestValue'];
            $_SESSION['FnameTest']= $_POST['FnameTest'];

            $queryFname= $db->prepare("SELECT * FROM usertable WHERE  User_Mail=:E_MAIL AND FirstName=:FirstName");
            $queryFname->execute(array('FirstName' => $_POST['FnameTest'],
                                        'E_MAIL'=> $mailTest2));
    
            
            if ($queryFname->rowCount()>0) {
                header('location:forgetPasswordLastName.php');
    
            }else{
                $Fname_not_exist="This First Name does not exist"; 
    
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

                   
                </div>
                    <div class="forgetPass">
                        <h1><span style="color:tomato">FirstName</span> <span style="color:#183153;">Test</span> <span style="color: tomato;">Session</span> </h1>
                        <div class="formulaire">
                                
                                <form action="" method="post">
                                    <label for="">Enter your former First Name</label><br><br>
                                    <input type="text" name="FnameTest" placeholder="Enter Your Fname..."><br>

                                        <?php 
                                          if(isset($Fname_not_exist)){
                                            echo '<span class="help-block small"><span style="color: red;">'.$Fname_not_exist.'</span></span><br/>';
                                          }
                                        ?>


                                    <input type="submit" name="FnameTestBtn" value="continue"><br>
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