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
                                                  
                              header('location:userDashboard.php?allMentors=false,querySearch='.$querySearch_run);
                            }
                          }
                        }
                                         
                    ?>
                    


    
</body>
</html>