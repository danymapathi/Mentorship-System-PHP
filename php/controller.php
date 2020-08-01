<?php

    if (isset($_POST['UserRegisterbtn'])) {
        // $e = $_POST['E_mail'];
        $queryMail= $db->prepare("SELECT * FROM usertable WHERE User_Mail=:E_MAIL");
        $queryMail->execute(array('E_MAIL'=>$_POST['E_mail']));
        

    if ($queryMail->rowCount()<=0) {
        $queryInsert= $db->prepare('INSERT INTO usertable (`FirstName`, `LastName`, `User_Mail`, `User_PASSWORD`) VALUES (:FirstName,:LastName,:User_Mail,:User_PASSWORD)');
        $queryInsert->execute(array(

        'FirstName' => $_POST['Fname'],
        'LastName' => $_POST['Lname'],
        'User_Mail' => $_POST['E_mail'],
        'User_PASSWORD' => $_POST['PassWrd']
        
        ));
        
        // echo "<script> alert('Successfull Registered');</script>";
        $signup_msg = "Successfull Registered";

    } else{
        $mail_msg = "This email has been taken";
        // echo "<script> alert('This email has been taken');</script>";
        header('location: menteeSignup.php');
    }

    }

    if (isset($_POST['logbtn'])) {
        $queryLog= $db->prepare("SELECT * FROM usertable WHERE User_Mail=:E_MAIL");
        $queryLog->execute(array('E_MAIL'=>$_POST['E_mail']));

        foreach ($queryLog as $logAccount) {
            $Fname= $logAccount['FirstName'];
            $Lname= $logAccount['LastName'];
            $E_email= $logAccount['User_Mail'];
            $Pass= $logAccount['User_PASSWORD'];

            $_SESSION['FirstName'] = $Fname;
            $_SESSION['LastName'] = $Lname;
            $_SESSION['User_Mail'] = $E_email;
            $_SESSION['User_PASSWORD'] = $Pass;

        }


        if (isset($logAccount)){
			if ($_POST['PassWrd'] == $Pass){
				#code...
                $_SESSION['FirstName'] = $Fname;
                $_SESSION['LastName'] = $Lname;
                $_SESSION['User_Mail'] = $E_email;
                $_SESSION['User_PASSWORD'] = $Pass;
				header('location:userDashboard.php?allMentors=true');
			}
			else {
				$erreur_message_password = 'Incorrect Password!';
			}
		}
		else {
			$erreur_message_mail = 'Incorrect E-mail address!';
		}
    }
    

        //   search Domain Code
    
   

      // Update password user password stage *********************

    if (isset($_POST['confirmbtn'])) {
        $queryPass= $db->query("SELECT * FROM usertable WHERE User_PASSWORD = '".$_POST['FormerPsswrd']."' ")->rowCount();
        $pass = $queryPass["User_PASSWORD"];

        
        if ($queryPass > 0) {

            if ($_POST['Newpsswrd'] === $_POST['confirmPasswrd']) {
               
            $mailUpdate= $_SESSION['User_Mail'];
            $UpdatedPass= $_POST['Newpsswrd'];
            $queryUpdate= $db->query("UPDATE `usertable` SET `User_PASSWORD`= '".$UpdatedPass."' WHERE User_Mail= '".$mailUpdate."'");
           

                if($queryUpdate){
                    header("Location:http://localhost/mentorship/ui/changePassword.php?updated=true");
                }else{

                }
            

            }else{ 
                header("Location:http://localhost/mentorship/ui/changePassword.php?updated=not_match");
                
            }
          
        }else{
            header("Location:http://localhost/mentorship/ui/changePassword.php?updated=false");
        }
    }

    
      // Update password mentor password stage *********************


      

    // forgetPass==================================

    if (isset($_POST['submitPass'])) {
        $Lname3=  $_SESSION['mailTestValue'];
        echo $Lname3;
      
       if ($_POST['passwd1'] === $_POST['passwd']) {
          

           $UpdatedPass= $_POST['passwd1'];
           $queryUpdate= $db->query("UPDATE `usertable` SET `User_PASSWORD`= '".$UpdatedPass."' WHERE User_Mail= '".$Lname3."'");

       if($queryUpdate){
            header("Location:http://localhost/mentorship/ui/forgetPass/forgetPasswordReset.php?updated=true");
            $updateMsg="PassWord Was Reset Successfully";

        }else{

        }

       }else{ 
        header("Location:http://localhost/mentorship/ui/forgetPass/forgetPasswordReset.php?updated=not_match");
        $passNotMatch="PassWord Does not Match";
        
    }
       
    }
   
    // Update Mentee Information=================================
// function Upres(){

//     if (isset($_POST['UpBtn'])) {

//         $upSession=  $_SESSION['User_Mail'];

//         $upFN= $_POST['UpFname'];
//         $upLN= $_POST['UpLname'];
//         $upMail= $_POST['UpMail'];
//         $upBio= $_POST['UpBio'];
        
//         $queryUp= $db->prepare(" SELECT* FROM `usertable` WHERE 1");
//         $queryUp->execute();

//         header('location: MenteeUpdateInfo.php');

//         foreach ($queryUp as $upResult) {
//             echo $upResult['FirstName'];
//         }
//     }
   
// }



    // if (isset($_POST['UpBtn'])) {

    //     $upSession=  $_SESSION['User_Mail'];

    //     $upFN= $_POST['UpFname'];
    //     $upLN= $_POST['UpLname'];
    //     $upMail= $_POST['UpMail'];
    //     $upBio= $_POST['UpBio'];
        
    //     $queryUp= $db->prepare(" SELECT* FROM `usertable` WHERE 1");
    //     $queryUp->execute();
  
    //     header('location:../ui/ MenteeUpdateInfo.php?queryUp1 =' .$queryUp);
    // }
   
    

?>