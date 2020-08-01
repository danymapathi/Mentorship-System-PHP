<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>
  <link rel="stylesheet" href="../styles/appstyle.css">
  <link rel="stylesheet" href="../styles/responsive.css">
</head>
    <body>
       
    <div class="navUser">
            <span class="brandUser">
                <Span class="white-text">Mentor</Span><span class="brand-color">Ship</span>
            </span>
            
           
            <div class="menu-containerUser">
            
               
                <div class="menuUser">
                        
                        <a href="#" id="myprofile1">My profile</a>
                        <a href="dashboard.php"><img src="../img/home1.png" class="MenuIcon2" alt=""></a>
                        <a href="#" class="lien"><img src="../img/notification1.png" class="MenuIcon2" alt=""> <em class="badge">3</em></a>
                        <a href="contact.php"><img src="../img/user5.png" class="MenuIcon2" alt=""> </a>
                        <a href="#" class="lien"><img src="../img/chat1.png" class="MenuIcon2" alt=""> <span class="badge">9</span></a>
                        <a href="#"><img src="../img/search1.png" class="MenuIcon1" alt="" onclick=" return searchpopfunction()"></a>
                        <a><img src="../img/setting1.png" class="MenuIcon1" alt="" id="settingBtn"></a>
                        

                        <div class="menuIcon">
                        <img src="../img/setting1.png" class="MenuIcon1" alt="" onclick="return resp()" id="settingBtn1">
                            <!-- <img src="../img/menuIcon1.png" alt="" onclick="return document.getElementById('navUser_responsive').style.display='block'";> -->
                        </div>  
                </div>
               

            </div> 
                       
            </div>
            <div class="responsive_UserNav">
                <div class="responsive_UserMenu">
                        <a href="">MPRO</a>
                        <a href="dashboard.php"><img src="../img/home1.png" class="MenuIcon2" alt=""></a>
                        <a href="#" class="lien"><img src="../img/notification1.png" class="MenuIcon2" alt=""> <em class="badge">3</em></a>
                        <a href="contact.php"><img src="../img/user5.png" class="MenuIcon2" alt=""> </a>
                        <a href="#" class="lien"><img src="../img/chat1.png" class="MenuIcon2" alt=""> <span class="badge">9</span></a>
                        <a href="#"><img src="../img/search1.png" class="MenuIcon1" alt="" onclick=" return searchpopfunction()"></a>
                        <!-- <a><img src="../img/setting1.png" class="MenuIcon1" alt="" id="settingBtn"></a> -->
                </div>
            </div>
            <div class="searchForm" id="searchpop">
                <div class="searchFormContent">
                    <p>Search your Domain</p>
                    <label for="" onclick="return closeSearchpopfunction()">X</label>
                    <form action="" method="post">
                        <input type="text" name="searchField"><br>
                        <input type="submit" name="searchBtn" value="Search Domain">
                    </form>
                </div>
            </div>
            <div class="responsiveSetting" id="myNavBar1">
                <p>Daniels Mapathi</p>
                <a class="active" href="#"><i class="fa fa-home"></i>Change Password</a> 
                <a href="#"><i class="fa fa-search"></i> Change Photo</a> 
                <a href="#"><i class="fa fa-envelope"></i>Localise Mentor</a> 
                <a href="#"><i class="fa fa-globe"></i>Unfollow Mentor</a>
                <a href="#"><i class="fa fa-trash"></i>Delete Account</a>
                <a href="#"><i class="fa fa-trash"></i>Help</a>
                <a href="#"><i class="fa fa-trash"></i>Log Out</a>
            </div>
           

  
    </body>
</html>