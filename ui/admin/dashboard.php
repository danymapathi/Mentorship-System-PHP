<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin dashboard</title>
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

            <section class="section-card admin-dash-section bg-white">
                <div class="section-header">
                    <h4 class="section-header-t">Analytic :</h4>
                </div>
             
                <div class="analitic-panel bg-red">
                  <div class="body-panel">
                     <h2 class="number white-text">45</h2>
                     <a href="all_admins.html" class="description white-text">All Admins</a>
                  </div>
              </div>

              <div class="analitic-panel bg-green">
                  <div class="body-panel">
                     <h2 class="number white-text">45</h2>
                     <a href="all_users.html" class="description white-text">All Users</a>
                  </div>
              </div>

              <div class="analitic-panel bg-cyan">
                  <div class="body-panel">
                     <h2 class="number white-text">45</h2>
                     <a href="all_mentors.html" class="description white-text">All Mentors</a>
                  </div>
              </div>

             
              
               <p class="center">Click on the analytic to see the details</p>


            </section>

                  
        </div>
    </div>

   
    <script src="../../js/admin-utility.js"  type="text/javascript"></script>

   
</body>
</html>