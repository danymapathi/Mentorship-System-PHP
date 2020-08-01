<?php 

    require_once('php/connexion.php');
    session_start();

    $queryPost= $db->prepare("SELECT * FROM mentortable WHERE 1");
    $queryPost->execute();

    $querCount= $db->prepare("SELECT COUNT(FirstName) FROM usertable;");
    $querCount->execute();

    $row= $querCount->fetch();
    $total=$row[0];

    echo "total rows:" .$total;
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome in FreeMentors</title>
    <link rel="stylesheet" href="styles/appstyle.css">
    <link rel="stylesheet" href="styles/swiper.min.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.css">

    <script src="jquery/jquery-3.4.1.js"></script>
</head>
<body>

        <div class="super-cover">
            

            <div class="darken">
                
            
                <div class="nav" id="home">
                 
                    <span class="brand">
                        <Span class="white-text">Mentor</Span><span class="brand-color">Ship</span>
                    </span>
                  
                    <div class="menu-container">
                        <label class="menu-toggle" for="toggle">&#9776;</label>
                        <input type="checkbox"  id="toggle">
                        <div class="menu">
                                <a href="#home" id="menu1" class="active"><i class="fas fa-home"></i>HOME</a>
                                <a href="#service"> <i class="fab fa-accessible-icon"></i>SERVICES</a>
                                <a href="#contact"><i class="far fa-user"></i>MENTOR</a>
                                <a href="#service"><i class="fas fa-info"></i>ABOUT</a>

                                
                        </div>
                    </div>
                </div>
                <div class="motivation-container">
                

                    <p class="motiv-text">
                            Find  free mentors who will support and encourage you to manage 
                            your own learning so that you can maximise your potential,your development skills,
                            improving your performance and become the person you want to be Lorem ipsum dolor sit,
                             
                              
                    </p>

                    <div class="input-button">
                    <a class="btn medium"  id="logoptionbtn"> <span class="icon">&#9757;</span> Start the program</a>
                        
                    </div>

                    <div class="logAs">
                        <div class="logAs-content" id="popup">
                               <label for="" id="exit" onclick="exitLogAS()" style="color: red; float: right; margin-top: -7px;">X</label>
                               <h2>Log In As</h2>                     
                               <ul>
                                    <li  class="logoption"><a href="ui/MentorLogin.php">Mentor</a></li>
                                    <li  class="logoption"><a href="ui/menteeLogin.php">User</a></li>
                               </ul>
                        </div>

                    </div>
                </div>
           </div>   
        </div>
    </div>
        
    <!-- ---------------------------------------------------------------
    --------------------fin de top nav et banner--------------------- -->

    <!-- ---------------------------------------------------------------
    --------------------start service options--------------------- -->

        <div class="section-component">
           
             <h3 class="service-headers" id="service">Our services</h3>
             <p class="service-goal-p">We will support you in :</p>

             <div class="list-services">
                 <div class="item">
                    <h1 style="font-size:60px !important;">&#9784;</h1>
                    <h4 class="item-title">Your self knowledge</h4>
                    <p>
                        The programme starts with sessions designed to help you get to know yourself, your story, your
                        values, strengths and weaknesses, motivations and other topics. Lorem ipsum dolor Lorem ipsum dolor
                    </p>
                 </div>
                 <div class="item">
                    <h1 style="font-size:60px !important;">&#9826;</h1>
                    <h4 class="item-title">Your goals</h4>
                    <p>
                       A purpose can only be achieved with clear goals, 
                       your mentor will help you design challenging goals that will lead you to fulfill your purpose.
                       Sacrify your current time for your tomorrow plans.
                    </p>
                 </div>
                 <div class="item">
                    <h1 style="font-size:60px !important;">&#9881;</h1>
                    <h4 class="item-title">Your Task Execution</h4>
                    <p>
                        Lastly, your mentor will help you design a clear and challenging execution plan,
                        which will include elements such as networking, learning and sharing knowledge.
                        Lorem ipsum dolor Lorem ipsum dolor                     </p>
                 </div>
             </div>
        </div>

        <!-- ---------------------------------------------------------------
        --------------------end of service options--------------------- -->

        <!-- ---------------------------------------------------------------
        --------------------start mentor slide--------------------- -->
        <div class="swiper-title">
                <h5>Our Mentors </h5>
        </div>
    <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($queryPost as $post):?>

                <div class="swiper-slide">
                    <div class="one-mentor">
                        <a href="signin.html"><img src="img/Dr.-Cunha-300x300.png" width=200 height=250></a>
                        <h3 id="mentor-name"><em>Mr</em> <?php echo $post['FirstName'];?></h3><br>
                            <ul>
                                <li>Occupation: <?php echo $post['Occupation'];?></li><br>
                                <li>Expertise: <?php echo $post['Expertise'];?></li><br>
                            </ul>
                        <br>

                    </div>
                </div>

                <?php  endforeach;?>

              
             
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
         <!-- ---------------------------------------------------------------
          -------------------------end of mentor slide----------------------->

       <br><br><br> 
       
        <footer class="footer transp-back-color">

            <div class="footer-nav">
                <div class="footer-nav1">
                    <h3>Navigation</h3>

                        <ul>
                            <li><a href="#home" id="menu1" class="active"><i class="fas fa-home"></i> Home Page</a></li>
                            <li><a href="#service"><i class="fab fa-accessible-icon"></i> Our Service</a></li>
                            <li><a href="#contact"><i class="far fa-user"></i> Our Mentor</a></li>
                            <li><a href="#service"><i class="fas fa-info"></i> About Us</a></li>
                        </ul>
                </div>
                <div class="footer-nav2">
                    <h3>Helping</h3>

                        <ul>
                            <li><a href="#home" id="menu1" class="active"><i class="fas fa-home"></i> Home Page</a></li>
                            <li><a href="#service"><i class="fab fa-accessible-icon"></i> Our Service</a></li>
                            <li><a href="#contact"><i class="far fa-user"></i> Our Mentor</a></li>
                            <li><a href="#service"><i class="fas fa-info"></i> About Us</a></li>
                        </ul>
                </div>
                <div class="footer-nav3">
                    <h3>Settings</h3>

                        <ul>
                            <li><a href="#home" id="menu1" class="active"><i class="fas fa-home"></i> Home Page</a></li>
                            <li><a href="#service"><i class="fab fa-accessible-icon"></i> Our Service</a></li>
                            <li><a href="#contact"><i class="far fa-user"></i> Our Mentor</a></li>
                            <li><a href="#service"><i class="fas fa-info"></i> About Us</a></li>
                        </ul>
                </div>
                
            </div>    
            <div class="contact-content1">
                <h3>A SUGGESTION OR A PROBLEM</h3>
                <form action="">
                    <label for="">FirstName</label>
                    <input type="text" placeholder="Fname..."><br>

                    <!-- <label for="">LastName</label>
                    <input type="text" placeholder="Lname..."><br> -->

                    <label for="">E-mail</label>
                    <input type="text" placeholder="email..."><br><br>

                    <textarea name="" id=""  placeholder="Message..."></textarea>
                    
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="social-media">
                <p>Follow us on:</p>
                    <ul>
                        <li><a href="#"><img src="img/facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="img/twitter.png" alt=""></a></li>
                        <li><a href="#"><img src="img/linkedin.png" alt=""></a></li>
                        <li><a href="#"><img src="img/instagram.png" alt=""></a></li>
    
                    </ul>
            </div>
            <div class="copy-right">
              <span>© Copyright MentorShip</span>
              <!-- <p>Dan && Rocky LTD</p> -->
            </div>
            
        </footer>

        <script>
            
            function exitLogAS(){
                document.getElementById("popup").style.display="none";
            }
        </script>
        
        <script>
            $(document).ready(function(){
            $("#logoptionbtn").click(function(){
            $("#popup").css("display", "block")
                .slideUp(150)
                .slideDown(150);
            $()    
            });
            });
        </script>
        <script>
            $('.allmentor').owlCarousel({
			items:4,
			navigation:true,
			autoPlay:5000,
			navigationText: ["<i class='arrow_carrot-left'></i>","<i class='arrow_carrot-right'></i>"]
		});
        </script>
        <script src="styles/swiper.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 40,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            }); 
        </script>

    
</body>
</html>