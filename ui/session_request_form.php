<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session request form</title>
    <link rel="stylesheet" href="../styles/app.css">
    <link rel="stylesheet" href="../styles/responsive.css">
    
</head>
<body class="req-sess-form">
    <div class="beforeBanner">
         <Span class="black-text">Mentor</Span><span class="brand-color">Ship</span>
         <div class="backToDash">
            

        </div>    
    </div>

    
    <div class="auth-user">
        <div class="auth-user-container"> </div>
            
     </div>
    
      
     
      <div class="all-form  session-request-form">
        <div class="section-header">
            <h4 class="section-header-t">Form of the session request </h4>
        </div>

        <form action="">
            <div class="input-field">
                <label for="question">Questions :</label>
                <textarea placeholder="question here" id="question" rows="3"></textarea>
             </div>

             <div >
               <p>Session scope :</p>
             </div>

            <div class="input-field">
                    <label for="starting_date">Session will start on :</label>
                <input type="date" id="starting_date" >
            </div>

            <div class="input-field">
                <label for="end_date">Session will end on:</label>
                <input type="date" id="end_date" >
             </div>

             <div class="input-button action-div">
                <button type="submit" id="request-send-session" class="btn">Send</button>
                
              </div>

      </form>
    </div>

    <div class="separator"></div>
      
    <footer class="footer transp-back-color">
        <div class="copy-right">
          <span>© Copyright MentorShip</span>
        </div>
        
    </footer>
   

    
</body>
</html>