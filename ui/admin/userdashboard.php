<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User management</title>
    <link rel="stylesheet" href="../../styles/app.css">
    <link rel="stylesheet" href="../../styles/responsive.css">
    
</head>
<body class="admin-body">
    
    <div id="content">
        

        <div id="menu" class="nav-admin">
            
            <div class="menu-opacity">
                <a class="close" href="#">
                    <span id="close-slide-menu"  >&#9747;</span>
                </a>
                <div class="center admin-auth-user">
                    <img class="circle" src="../../img/user.jpg">
                    <p class="title">mr been</p>
                    <p class="sub-title">Dan@gmail.com</p>
                </div>
                <a href="dashboard.php">Analytic</a>
                <a href="all_users.php">All users</a>
                <a href="all_mentors.php">All mentors</a>
                <a href="all_admins.php">All admins</a>
                <a href="#" id="news">News</a>
                <a href="../login.html" id="Logout">Logout</a>
            </div>
           
        </div>

        <div class="content-noSide">
            
            <div class="nav">
                 
                <span  class="brand">
                    <span id="open-slide-menu" class="black-text">
                        <span>&#9776;</span>
                    </span>
                    <Span class="black-text">Mentor</Span><span class="brand-color">Ship</span>
                </span>
              
                <div class="menu-container">
                   
                    <div class="menu">
                            
                            <a href="#">News</a>
                            <a href="../login.html">Logout</a>
                            
                    </div>
                </div>
            </div>

            <section class="section-card admin-dash-section manage-user-session bg-white">
                <div class="section-header">
                    <h4 class="section-header-t">User :</h4>
                </div>

                <div class="card manage-info-i">
                    <div class="card-body center">
                         <img class="circle user-img-p" src="../../img/user.jpg">
                         <p class="title">
                             <a href="../mentor.html">John peter</a>
                            </p>
                         <span>john@gmail.com</span>

                         
                    </div>
                    
                    
                </div>

                <div class="card user-manage-otherInfo ">
                        
                       <div class="card-body">
                             
                            <p class="title">Expertize</p>
                            <span>Software analysis</span>
                        </div>
                        <div class="card-body">
                             
                            <p class="title">Occupation</p>
                            <span>Software developer at andela,Professor at University</span>
                        </div>
                        <div class="card-body">
                            <p class="title">Address :</p>
                            <span>Kigali gisozi</span>
                        </div>
                        
                       
                </div>
                <div class="card admin-side-user-manage-btn">
                    <div class="card-body">
                        <p class="title">Manage the user :</p>
                        <div class="input-button">
                            <button class="btn auth">Change to mentor</button>
                            <button class="btn auth">Set user to admin</button>
                        </div>
                        
                    </div>
                </div>
                
               

            </section>

                  
        </div>
    </div>

   
    <script src="../../js/admin-utility.js"  type="text/javascript"></script>

   
</body>
</html>