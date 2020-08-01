<?php

    require_once('../php/connexion.php');
    session_start();
    

   
   

?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/appstyle.css">
    <link rel="stylesheet" href="../styles/responsive.css">
    <title>Document</title>
</head>
    <body>
        <div class="searchResult">
           <p>Search Result</p>
        </div>


                    <?php 
                         if (isset($_POST['searchBtn'])) {
                          $search= $_POST['searchField'];
                          $querySearch= "SELECT* FROM mentortable WHERE Expertise = :Expertise";
                          $querySearch_run= $db->prepare($querySearch);
                          $querySearch_exec= $querySearch_run->execute(array('Expertise' => $search));
                          
                           if ($querySearch_exec) {

                          
                    
                              if ($querySearch_run->rowcount()>0) {
                    
                                  foreach($querySearch_run as $searchResult){
                                      // $search=  $searchResult['Expertise'];
                                      $FirstName=  $searchResult['FirstName'];
                                      $LastName=  $searchResult['LastName'];
                                      $Expertise=  $searchResult['Expertise'];
                                      $profile_pic= $searchResult['phofile_photo']

                              ?>
                                                                              
                                      <div class="section-card dashbord-section">
                                            <div class="section-header">
                                              <h4 class="section-header-t">All available mentors</h4>
                                            </div>
                                            
                                            <div class="card">
                                              <div class="card-header  image">
                                                  <div class="header-img">
                                                      <img src="<?php echo $profile_pic; ?>">
                                                  </div>
                                                  <div class="header-title">
                                                      <p class="title"><?php echo $FirstName.' '.$LastName; ?></p>
                                                      <span class="sub-title">expertise</span>
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
                                      </div>    
                                      <?php
                                      
                                    }
                                  
                              
                                  
                                  
                              }else{
                                  echo '<script> alert("no data found") <script>';
                              }
                             
                           } else{
                              echo '<script> alert("no data search") <script>';
                          }
                      }
                                         
                    ?>
                    


    
</body>
</html>