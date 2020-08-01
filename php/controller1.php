<?php 

if (isset($_POST['logbtn'])){
    $queryLog= $db->prepare("SELECT * FROM mentortable WHERE Mentor_Mail=:E_Mail");
    $queryLog->execute(array('E_Mail' => $_POST['E_mail']));

    foreach ($queryLog as $logAccount) {
        $Fname= $logAccount['FirstName'];
        $Lname= $logAccount['LastName'];
        $E_email= $logAccount['Mentor_Mail'];
        $Expertise= $logAccount['Expertise'];
        $Pass= $logAccount['MentorPassword'];
       

        $_SESSION['FirstName'] = $Fname;
        $_SESSION['LastName'] = $Lname;
        $_SESSION['Mentor_Mail'] = $E_email;
        $_SESSION['MentorPassword'] = $Pass;
        $_SESSION['Expertise'] = $Expertise;
        

    }


    if (isset($logAccount)){
        if ($_POST['PassWrd1'] == $Pass){
            #code...
            $_SESSION['FirstName'] = $Fname;
            $_SESSION['LastName'] = $Lname;
            $_SESSION['Mentor_Mail'] = $E_email;
            $_SESSION['Expertise'] = $Expertise;    
            $_SESSION['MentorPassword'] = $Pass;
            header('location:mentorDashboard.php');
        }
        else {
            $erreur_message_password = 'Incorrect Password!';
        }
    }
    else {
        $erreur_message_mail = 'Invalid E-mail address!';
    }
}
   
//    photo uploaded ======================================= 
 
    if (isset($_POST['uploadBtn'])) {

        $bioSet= $_POST['bioprofile'];
        $target_dir = "imageUploaded/";
        $target_file = $target_dir . basename($_FILES["uploadFile"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType!= "jpeg") {
            print "only jpg png jpeg files are allowed";

        }else{

            move_uploaded_file($_FILES["uploadFile"]["tmp_name"],  $target_dir);

            $mailSession=  $_SESSION['Mentor_Mail'];
            $queryUpload =$db->query( "UPDATE `mentortable` SET `profile_photo` = '".$target_file."', `biography`='".$bioSet."'  WHERE Mentor_Mail= '".$mailSession."' ");

            if($queryUpload){
                $msg_upload="Your Profile has been updated";
                header("Location:http://localhost/mentorship/ui/mentorDashboard.php");
            }else{

            }

        }
    }

    // Update password mentor password stage *********************

    if (isset($_POST['confirmbtn1'])) {
        $queryPass= $db->query("SELECT * FROM mentortable WHERE MentorPassword = '".$_POST['FormerPsswrd1']."' ")->rowCount();
        $pass = $queryPass["MentorPassword"];

        
        if ($queryPass > 0) {

            if ($_POST['Newpsswrd1'] === $_POST['confirmPasswrd1']) {
               
            $mailUpdate= $_SESSION['Mentor_Mail'];
            $UpdatedPass= $_POST['Newpsswrd1'];
            $queryUpdate= $db->query("UPDATE `mentortable` SET `MentorPassword`= '".$UpdatedPass."' WHERE Mentor_Mail= '".$mailUpdate."'");
           

                if($queryUpdate){
                    header("Location:http://localhost/mentorship/ui/mentorDashboard.php?updated=true");
                }else{

                }
            

            }else{ 
                header("Location:http://localhost/mentorship/ui/mentorDashboard.php?updated=not_match");
                
            }
          
        }else{
            header("Location:http://localhost/mentorship/ui/mentorDashboard.php?updated=false");
        }
    }
    
?>