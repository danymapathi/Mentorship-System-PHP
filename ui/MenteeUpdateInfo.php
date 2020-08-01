<?php 

    // require_once('../php/connexion.php');    
    // session_start();
    // require_once('../php/controller.php');

   

//    if (isset($_GET['queryUp1'])) {
//        echo $_GET['queryUp1'];
//    }

    // foreach ($queryUp as $upResult) {
    //     echo $upResult['FirstName'];
    // }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="../styles/appstyle.css">
    <link rel="stylesheet" href="../styles/responsive.css">

</head>
    <body id="wrapperBody">
        <div class="wrapper2">
            <div class="updateContainer">
                <div class="imageUdpdate">
                    <img src="../img/user.jpg" class="circle" alt="">
                    <p>Dany Mapathi</p>
                </div>
          

                <div class="loremUpdate">
                    <div><h4>Update</h4></div>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae obcaecati odio. Vel, 
                    repudiandae fugiat. Illum quas nobis nemo, et cumque qui adipisci dolores corporis ducimus, 
                    iste reiciendis? Qui, nihil!
                    </p>
                </div>
            </div>
            <div class="updateInfo">
                <div class="updateInfo1"> 
                    <div class="updateTitle"><h4>Update Information</h4></div> 

                    <div class="updateForm">
                        <form action="" method="post" enctype="multipart/form-data">
                            
                            <div class="updateForm1">
                                <label for="">Firstname</label>
                                <input type="text" name="UpFname" value=""><br>
                                
                                <label for="">Lastname</label>
                                <input type="text" name="UpLname"><br>

                                <label for="">Add-email</label>
                                <input type="text" name="UpMail"><br>

                                <label for="">Biography</label>
                                <input type="text" name="UpBio"><br>
                                
                            </div>
                            <div class="updateForm1" id="updateFormId">
                               
                                <div class="imgFile">
                                    <img src="../img/user.jpg" alt="">
                                </div>
                                <div  class="btnFIle">
                                    <input type="file" name="UpFile">  
                                </div>
                                
                            </div>
                            <div class="submitFile">
                                <input type="submit" value="Update" name="UpBtn">
                                <input type="submit" value="Clear" id="clearBtn">
                            </div>
                           
                        </form>
                    </div>

                    <div class="updateDisplay">
                        <div class="tableDisplay">
                            <table id="customers">
                                <tr>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>Biography</th>
                                    
                                </tr>
                                <tr>
                                    <td>Daniels</td>
                                    <td>Mapathi</td>
                                    <td>Danymapathi@gmail.com</td>
                                    <td>Biography</td>
                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>