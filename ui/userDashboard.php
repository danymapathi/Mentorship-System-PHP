<?php

    require_once('../php/connexion.php');
    session_start();
    require_once('../php/controller.php');

    $allMentors = $_GET['allMentors'];
    $displayMentor= $db->prepare("SELECT * FROM mentortable WHERE 1");        
    $displayMentor->execute(); 

    // if (isset($allMentors)) {
    //      // Retrieve  list of all mentors
    //     if (!isset($displayMentor)) {
    //         $displayMentor= $db->prepare("SELECT * FROM mentortable WHERE 1");        
    //         $displayMentor->execute();     
    //     }     

    // } elseif (isset($allMentors) & $allMentors == false) {
    //     // Get mentor accorsing to their expertise
    //     if (isset($_GET['querySearch'])) {
    //         $displayMentor = $_GET['querySearch'];                              
    //     } else{
    //         echo '<script> alert("no data found") <script>';
    //     } 
    // }
    
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mentee Dashboard</title>
    <link rel="stylesheet" href="../styles/appstyle.css">
    <link rel="stylesheet" href="../styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">
  
   
</head>
    <body>
      
        <div class="navUser">
            <span class="brandUser">
                <Span class="white-text">Mentor</Span><span class="brand-color">Ship</span>
            </span>
            
           
            <div class="menu-containerUser">
            
               
                <div class="menuUser">
                        
                        <a href="#" id="myprofile1">My profile</a>
                        <a href="dashboard.php"><i class="fas fa-home"></i></a>
                        <a href="#" class="lien"><i class="far fa-bell"></i></a>
                        <a href="#" class="lien"><i class="far fa-comments"></i></a>
                        <a href="#"><i class="fas fa-search" onclick=" return searchpopfunction()"></i></a>
                        <a> <i class="fas fa-cog" class="MenuIcon1" alt="" id="settingBtn"></i></a>
                        

                        <div class="menuIcon">
                            <img src="../img/settingdash1.png" class="MenuIcon1" alt="" onclick="return resp()" id="settingBtn1">
                        </div>  
                </div>
               

            </div> 
                       
            </div>
            <div class="responsive_UserNav">
                <div class="responsive_UserMenu">
                        <a href="">My Profile</a>
                        <a href="dashboard.php"><i class="fas fa-home"></i></a>
                        <a href="#" class="lien"><i class="far fa-bell"></i></a>
                        <a href="#" class="lien"><i class="far fa-comments"></i></a>
                        <a href="#"><i class="fas fa-search" onclick=" return searchpopfunction()"></i></a>
                </div>
            </div>
            <div class="searchForm" id="searchpop">
                <div class="searchFormContent">
                    <p>Search your Domain</p>
                    <label for="" onclick="return closeSearchpopfunction()">X</label>
                    <form action="searchDomain.php" method="post">
                        <input type="text" name="searchField"><br>
                        <input type="submit" name="searchBtn" value="Search Domain">
                    </form>
                </div>
            </div>
            
                <div class="edit-container" id="edit">
                  <label class="cancel" onclick="return closeditpict()">X</label>
                    <div class="edit-content">
                        <h1>Create Profile</h1>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label for="">PROFILE IMAGE</label><br><br>
                            <input type="file" name="image"><br>

                            <label for="">BIO</label><br><br>
                            <textarea name="bioprofile" id="" cols="40" rows="5"></textarea><br><br>

                            <input type="submit" name="picbtn" value="Set Profile">
                        </form>
                    </div>
                </div>
            
            <div class="responsiveSetting" id="myNavBar1">
                <p>Daniels Mapathi</p>
                <a class="active" href="#"><i class="fas fa-lock"></i> Change Password</a> 
                <a href="#"><i class="fas fa-id-badge"></i> Change Photo</a>
                <a href="#"><i class="fas fa-info"></i> Change Information</a>
                <a href="#"><i class="fas fa-plus"></i> Add Information</a> 
                <a href="#"><i class="fas fa-map-marker-alt"></i> Localise Mentor</a> 
                <a href="#"><i class="fa fa-globe"></i> Unfollow Mentor</a>
                <a href="#"><i class="fa fa-trash"></i> Delete Account</a>
                <a href="#"><i class="fas fa-hands-helping"></i> Help</a>
                <a href="menteeLogin.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
           
     
        

        <div class="auth-user" id=>
        <div class="auth-user-container">
            <div class="auth-avatar center">
                <img class="img circle" src="../img/user.jpg">
                <p class="username"><?php if (isset($_SESSION['FirstName'])) {
                    echo $_SESSION['FirstName']; 
                }
                if(isset($_SESSION['LastName'])){
                    echo $_SESSION['LastName']; 
                }
                ?>
                </p>
                
             <div class="action-user-btn center">
                 <a href="#" id="btn-user-sessions" class="btn auth" onclick="editpict()" style="background:white !important; color:black;">Edit Photo</a>
                 <a id="btn-user-profile" href="#" class="btn auth" style="background:white !important; color:black;">View Photo</a>
             </div>
            </div>
            
        </div>
       
    </div>
   
    <div class="section-card dashbord-section">
      <div class="section-header">
        <h4 class="section-header-t">All available mentors</h4>
      </div>

        <!-- Display mentors -->
        <?php  foreach($displayMentor as $queryDisplay):?>
            <div class="card">
                <div class="card-header  image">
                    <div class="header-img">
                        <img src="../img/user.jpg">
                    </div>
                    <div class="header-title">
                        <p class="title"><?php echo $queryDisplay['FirstName'].''.$queryDisplay['LastName'];?></p>
                        <span class="sub-title"><?php echo $queryDisplay['Expertise']; ?></span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="like">
                    <span><span class="icon" style="color:darkslategray;">&#9829;</span> 429</span>
                    </div>
                    <div class="btn-mentor-more">
                        
                        <a class="btn auth" href="AboutMentor.php">about</a>
                    </div>
                    
                </div>
            </div>
        <?php endforeach?>     
        
      <div class="load-more-container">
          <button class="btn auth load-x-mentor">Load more</button>
      </div>
    </div>
     
    <div class="content" id="myNavBar">

        <div class="nav-admin" id="menu">
           
                <div class="menu-opacity">
                    <div class="close" >
                        <span id="closeSlideMenu" onclick="exitsetting()" ><i class="far fa-window-close"></i></span>
                    </div>
                    <div class="centerSetting admin-auth-user">
                        <img class="circle" src="../img/user.jpg">
                        
                        <p class="sub-title" style="color:rgb(68, 67, 67); font-weight: bold;"><?php if (isset( $_SESSION['User_Mail'])) {
                    echo  $_SESSION['User_Mail']; 
                } ?></p>
                    </div>
                    <a href="changePassword.php"><i class="fas fa-lock"></i> Change Password</a>
                    <a href="MenteeUpdateInfo.php"><i class="fas fa-info"></i> Change Information</a>
                    <a href="#"><i class="fas fa-plus"></i> Add Information</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i> Localise Mentor</a>
                    <a href="#"><i class="fa fa-globe"></i> Unfollow Mentor</a>
                    <a href="#"><i class="fa fa-trash"></i> Dalete Acount</a>
                    <a href="#"><i class="fas fa-hands-helping"></i> Help</a>
                    <a href="menteeLogin.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                </div>  
            </div>  
        </div>  
    </div>    

    <script>
        function reset() {
            return document.getElementById("passwordReset1").style.display="block";
        }
    </script>

    <script src="../js/setting.js"></script>
    <script src="../js/responsiveSetting.js"></script>
    <script src="../js/searchpopup.js"></script>

    </body>
</html>