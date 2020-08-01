<?php

    // require_once('../../php/connexion.php');
    // session_start();
    
    

      
    // $essai="SELECT* FROM mentortable";
    // $essai_Run= $db->query($essai);

    //  if ($essai_Run) {
    //      while ($row=$essai_Run->fetch(PDO::FETCH_OBJ)) {
    //         echo '
    //         <tr>
    //             <th>'.$row->FirstName.'</th>
    //             <th>'.$row->LastName.'</th>
    //             <th>'.$row->FirstName.'</th>
    //             <th>'.$row->FirstName.'</th>
    //         </tr>
    // ';
    
    //      }
    //  } else{

    //  }    

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
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

            <div class="section-card sessions-list">
                    <div class="section-header">
                      <h4 class="section-header-t">All users : 8  </h4>
                    </div>
                    
                    <div class="card">
                       <div class="card-header  image">
                           <div class="header-img">
                               <img src="../../img/user.jpg">
                           </div>
                           
                           <div class="header-title">
                              <p class="title">Espoire nyaru</p>
                               <span class="sub-title">Expertise :<span class="">Software design</span></span>
                           </div>
                       </div>
                       <div class="card-footer">
                           
                          <a class="btn auth" href="userdashboard.php">manage</a>
                           
                       </div>
                    </div>
              
                    <div class="card">
                      <div class="card-header  image">
                          <div class="header-img">
                              <img src="../../img/user.jpg">
                          </div>
                          <div class="header-title">
                              <p class="title">Anje beii</p>
                              <span class="sub-title">Expertise :<span class="">Computer programming</span></span>
                          </div>
                      </div>
                       <div class="card-footer">
                           
                            <a class="btn auth" href="userdashboard.php">manage</a>
                       </div>
                    </div>
              
                    <div class="card">
                      <div class="card-header  image">
                          <div class="header-img">
                              <img src="../../img/user.jpg">
                          </div>
                          <div class="header-title">
                              <p class="title">Nelson key</p>
                              <span class="sub-title">Expertise :<span class="">Software design</span></span>
                          </div>
                      </div>
                       <div class="card-footer">
                           
                            <a class="btn auth" href="userdashboard.php">manage</a>
                       </div>
                    </div>
              
                    <div class="card">
                       <div class="card-header  image">
                           <div class="header-img">
                               <img src="../../img/user.jpg">
                           </div>
                           <div class="header-title">
                            
                              <p class="title">mr been</p>
                              <span class="sub-title">Expertise :<span class="">Computer programming</span></span>
                           </div>
                       </div>
                       <div class="card-footer">
                           
                           <a class="btn auth" href="userdashboard.php">manage</a>
                       </div>
                    </div>
              
                    <div class="card">
                      <div class="card-header  image">
                          <div class="header-img">
                              <img src="../../img/user.jpg">
                          </div>
                          <div class="header-title">
                              <p class="title">Espoire nyaru</p>
                              <span class="sub-title">Expertise :<span class="">Software design</span></span>
                          </div>
                      </div>
                       <div class="card-footer">
                           
                            <a class="btn auth" href="userdashboard.php">manage</a>
                       </div>
                    </div>
              
                    <div class="card">
                      <div class="card-header  image">
                          <div class="header-img">
                              <img src="../../img/user.jpg">
                          </div>
                          <div class="header-title">
                              <p class="title">Espoire nyaru</p>
                              <span class="sub-title">Expertise :<span class="">Software design</span></span>
                          </div>
                      </div>
                       <div class="card-footer">
                           
                            <a class="btn auth" href="userdashboard.php">manage</a>
                       </div>
                    </div>
              
                    <div class="card">
                       <div class="card-header  image">
                           <div class="header-img">
                               <img src="../../img/user.jpg">
                           </div>
                           <div class="header-title">
                              <p class="title">Espoire nyaru</p>
                               <span class="sub-title">Expertise :<span class="">Software design</span></span>
                           </div>
                       </div>
                       <div class="card-footer">
                           
                           <a class="btn auth" href="userdashboard.php">manage</a>
                       </div>
                    </div>
              
                    <div class="card">
                      <div class="card-header  image">
                          <div class="header-img">
                              <img src="../../img/user.jpg">
                          </div>
                          <div class="header-title">
                              <p class="title">Anje beii</p>
                              <span class="sub-title">Expertise :<span class="">Computer programming</span></span>
                          </div>
                      </div>
                       <div class="card-footer">
                           
                            <a class="btn auth" href="userdashboard.php">manage</a>
                       </div>
                    </div>
              
                   
              
              
                    <div class="load-more-container">
                        <button class="btn auth load-x-mentor">Load more</button>
                    </div>
              
                      
                  </div>

            

                  
        </div>
    </div>

   
    <script src="../../js/admin-utility.js"  type="text/javascript"></script>

   
</body>
</html>