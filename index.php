<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pixel</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" type="image/png">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="orb.css" rel="stylesheet">



  <meta name="theme-color" content="#f82249"/>

  </head>

  <body>

  <!--==========================
    Header
    ============================-->
    <header id="header">
      <div class="container">

        <div id="logo" class="pull-left">
          <!-- Uncomment below if you prefer to use a text logo -->
          <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
          <a href="./" class="scrollto"><img src="img/fontLogo.png" alt="" title="">
            <!--<h1><a href="#"><span>P</span>I<span>X</span>E<span>L</span></a></h1> -->

          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active">
                <li><a href="./#about">About</a></li>
                <li><a href="./#events">Events</a></li>
                <li><a href="./#schedule">Schedule</a></li>
                <li><a href="./#gallery">Gallery</a></li>
                <li><a href="./#supporters">Sponsors</a></li>
                <li><a href="eventdetails/coordinators.php">Co-ordinators</a></li>
                <li><a href="eventdetails/faq.php">FAQ's</a></li>
                <li class="buy-tickets"><a href="./register/">Register</a></li>
                
                <li ><button onclick="popup('pixel-2020-204002');" class="tsbutton btn btn-small" style="border-radius:20px;" >Payment</button><noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript><script src="//www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script></li>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->

  <!--==========================
    Intro Section
    ============================-->
    <section id="intro">
        
      <div class="outer">
        <div class="bot">
          <?php
          require_once("divs.php"); 
          ?>


        </div>
        <div class="top">
          <div class="intro-container wow bounceIn">
              
            <div class="row">  <img src="img/logo.png"/> </div>
            <h1 class="mb-4 pb-0 fadeInRight">A National <span>Level</span> <br/><span>Technical</span> Symposium</h1>
            <p class="mb-4 pb-0">16,17,18 March,2020</p>
            <a href="https://www.youtube.com/watch?v=Mz86plRUqzo" class="venobox play-btn mb-4" data-vbtype="video"
            data-autoplay="true"></a>
            <a href="register/" class="about-btn scrollto">Register for the event</a>
            <a href="eventdetails/instructions.php" class="about-btn scrollto">Instructions</a>
          </div>




        </div>
      </div>

    </section>

    <main id="main">

    <!--==========================
      About Section
      ============================-->
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2>About The Event</h2>
              <p>Pixel is a National Level Technical Symposium for undergrads and postgrads organised by Department of Computer Science and Engineering, JNTUA College of Engineering, Ananthapuramu. The fest is a high profile event which will lure the students of all colleges in and around the country to uncover their all-round expertise by competing emulously on a large scale that paves the way for all-round development of a budding professional.</p>
            </div>
            <div class="col-lg-3">
              <h3>Where</h3>
              <p>JNTUACEA,Sir Mokshagundam Vishveshwariah Road, Anantapur, Andhra Pradesh 515002</p>
            </div>
            <div class="col-lg-3">
              <h3>When</h3>
              <p>Monday to Wednesday<br>16-18 March</p>
            </div>
          </div>
        </div>
      </section>


  <!--==========================
      Events Section
      ============================-->
      <section id="events" class="section-with-bg wow fadeInLeft">

        <div class="container">
          <div class="section-header">
            <h2>Events</h2>
            <p>Here are some of our Events</p>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <a href="./eventdetails/workshop.php"><div class="hotel-img">
                <img src="images/blockchain.jpg" alt="Workshop" class="img-fluid">
              </div>
              <h3>Workshop</h3>
            </div></a>
          </div>
          
            <div class="col-lg-4 col-md-6">
              <div class="hotel">
               <a href="./eventdetails/hackathon.php"> <div class="hotel-img">
                <img src="images/hackathon.jpeg" height="240px;"  alt="Hackathon" class="img-fluid">
              </div>
              <h3>Hackathon</h3>
            </div></a>
          </div>

          

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <a href="./eventdetails/paperpresentation.php"><div class="hotel-img">
                <img src="images/ppt.jpg" height="240px;" alt="Paper Presenatation" class="img-fluid">
              </div>
              <h3>Paper Presentation</h3>
            </div></a>
          </div>


        </div>
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
             <a href="./eventdetails/codewar.php"> <div class="hotel-img">
              <img src="images/codewar.jpeg" alt="CodeWar" class="img-fluid">
            </div>
            <h3>Code War</h3>
          </div></a>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="hotel">
            <a href="./eventdetails/QuestionBout.php"><div class="hotel-img">
              <img src="images/questionbout.jpeg" alt="Question Bout" class="img-fluid">
            </div>
            <h3>Question Bout</h3>
          </div></a>
        </div>

        

        <div class="col-lg-4 col-md-6">
          <div class="hotel">
            <a href="./eventdetails/codeswap.php"><div class="hotel-img">
              <img src="images/codeswap.jpeg" alt="Code Swapping" class="img-fluid">
            </div>
            <h3>Code Swapping</h3>
          </div></a>
        </div>
      </div>

      <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
          <a href="./eventdetails/minicinema.php"><div class="hotel-img">
            <img src="images/minicinema.jpeg" alt="Mini Cinema" class="img-fluid">
          </div>
          <h3>Mini Cinema & Candid Clickz</h3>
        </div></a>
      </div>

      <div class="col-lg-4 col-md-6">
          <div class="hotel">
           <a href="./eventdetails/buggingblitz.php"> <div class="hotel-img">
            <img src="images/bugging.jpg" alt="Bugging Blitz" class="img-fluid">
          </div>
          <h3>Bugging Blitz</h3>
        </div></a>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
          <a href="./eventdetails/gaming.php"><div class="hotel-img">
            <img src="images/gaming.jpg" alt="Gaming" class="img-fluid">
          </div>
          <h3>Gaming</h3>
        </div></a>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
         <a href="./eventdetails/natyakshetra.php"> <div class="hotel-img">
          <img src="images/natyakshetra.jpeg" alt="NatyaKshetra" class="img-fluid">
        </div>
        <h3>NatyaKshetra</h3>
      </div></a>
    </div>
    
    <div class="col-lg-4 col-md-6">
        <div class="hotel">
         <a href="./eventdetails/combo.php"> <div class="hotel-img">
          <img src="images/combo1.png" alt="Combo" class="img-fluid">
        </div>
        <h3>Combo offer Details</h3>
      </div></a>
    </div>
    
  </div>
</div>

</section>

   <!--==========================
      Sponsors Section
      ============================-->
      <section id="supporters" class="section-with-bg wow bounceIn">

        <div class="container">
          <div class="section-header">
            <h2>Sponsors</h2>
          </div>

          <div class="row no-gutters supporters-wrap clearfix">

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <img src="img/supporters/anandyadav.png" class="img-fluid" alt="Anand Yadav Dasari">
              </div>
              <h6 style="font-family:Candara;text-align:center;">Anand Yadav Dasari(Alumni of 1994-98 Batch)</h6>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <img src="img/supporters/srit.png" class="img-fluid" alt="Srinivasa Ramanujan institute of technology">
              </div>
              <h6 style="font-family:Candara;text-align:center;">Srinivasa Ramanujan institute of technology</h6>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <img src="img/supporters/gkce.png" class="img-fluid" alt=" Gokula Krishna College of Engineering">
              </div>
              <h6 style="font-family:Candara;text-align:center;">Gokula Krishna College of Engineering</h6>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <img src="img/supporters/sse.png" class="img-fluid" alt=" Sanskriti School of Engineering">
              </div>
              <h6 style="font-family:Candara;text-align:center;">Sanskriti School of Engineering</h6>
            </div>
            

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <img src="img/supporters/rvcew.png" class="img-fluid" alt="Ravindra College of Engineering for Women">
              </div>
              <h6 style="font-family:Candara;text-align:center;">Ravindra College of Engineering for Women</h6>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <img src="img/supporters/stjohn.png" class="img-fluid" alt="ST. JOHNS COLLEGE OF ENGINEERING">
              </div>
              <h6 style="font-family:Candara;text-align:center;">St.Johns College of Engineering</h6>
            </div>
             
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="supporter-logo">
                <img src="img/supporters/gautami.png" class="img-fluid" alt=" Gouthami Institute of Technology & Management for women">
              </div>
              <h6 style="font-family:Candara;text-align:center;">Gouthami Institute of Technology & Management for women</h6>
            </div>
            
             
         </div>
        </div>

      </section>

    <!--==========================
      Schedule Section
      ============================-->
      <section id="schedule" class="section-with-bg">
        <div class="container wow fadeInRight">
          <div class="section-header">
            <h2>Event Schedule</h2>
            <p>Here is our event schedule</p>
          </div>

          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Day 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Day 3</a>
            </li>
          </ul>

          <h3 class="sub-heading">Grab a chance to be a part of PIXEL-2020 being conducted at JNTUA. Join us in our festive and have fun with the events organised by us. The events involve knowledge alongside fun and brief description regarding the schedule and the events is given below.<br><span style="color:#f82249">Disclaimer--></span>Timings can be tentative</h3>

          <div class="tab-content row justify-content-center">

            <!-- Schdule Day 1 -->
            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

              <div class="row schedule-item">
                <div class="col-md-2"><time>08:00 AM</time></div>
                <div class="col-md-10">
                  <h4>Registration</h4>
                  <!--<p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>-->
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>9:30 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/inaugration.png" alt="Inaugration">
                  </div>
                  <h4>Inauguration <span>Session</span></h4>
                  <p>It all starts here. An  opening ceremony before the festive begin.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>11:45 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="img/gallerypics/4.jpg" alt="Flash Mob">
                  </div>
                  <h4>Flash Mob<span></span></h4>
                  <p>A group of people assemble to perform for a brief time, and disperse.</p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>12:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/hackathon.jpeg" alt="Hackathon">
                  </div>
                  <h4>Hackathon <span>Event</span></h4>
                  <p>A 12 hour marathon round in which the best stands first.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>12:30 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/lunch.png" alt="Lunch">
                  </div>
                  <h4>Lunch<span></span></h4>
                  <p>A grand lunch to all the participants, students and staff at CSE department.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>02:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/ppt.jpg" alt="Paper Presentation">
                  </div>
                  <h4>Paper Presentation. <span>Event</span></h4>
                  <p>A good idea becomes a great idea when you let it out, exhibit your thoughts through us.</p>
                </div>
              </div>

            
              <div class="row schedule-item">
                <div class="col-md-2"><time>03:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/codewar.jpeg" alt="Code War">
                  </div>
                  <h4>Code War <span>Event</span></h4>
                  <p>Coding isn’t about what you know, it’s about what you figure out.Come here to figure it out.</p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>06:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/natyakshetra.jpeg" alt="NatyaKshetra">
                  </div>
                  <h4>NatyaKshetra <span>Culturals</span></h4>
                  <p>Showcase your dance, impress with your moves, express your talent.</p>
                </div>
              </div>

            </div>
            <!-- End Schdule Day 1 -->

            <!-- Schdule Day 2 -->
            <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

              <div class="row schedule-item">
                <div class="col-md-2"><time>08:00 AM</time></div>
                <div class="col-md-10">
                  <h4>Registration</h4>
                  <!--<p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>-->
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>09:30 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/blockchain.jpg" alt="Workshop">
                  </div>
                  <h4>Workshop on Block Chain <span>Event</span></h4>
                  <p>Let’s go beyond and learn the future bcoz BLOCKCHAIN is the next big thing.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>09:30 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/bugging.jpg" alt="Bugging Blitz">
                  </div>
                  <h4>Bugging Blitz <span>Event</span></h4>
                  <p>A real code have zero errors. So come to make a real code.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>11:45 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/questionbout.jpeg" alt="questionbout">
                  </div>
                  <h4>Question Bout <span>Event</span></h4>
                  <p>Experience the real tug of war among the colleges. Be the best to win the final showdown.</p>
                </div>
              </div>
              <div class="row schedule-item">
                <div class="col-md-2"><time>02:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/codeswap.jpeg" alt="Cole Emmerich">
                  </div>
                  <h4>Code Swapping <span>Event</span></h4>
                  <p>Teamwork is the key ; act smart, program quick, then success is yours.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>06:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/natyakshetra.jpeg" alt="NatyaKshetra">
                  </div>
                  <h4>Euphoria <span>Culturals</span></h4>
                  <p>Enjoy our cultural events and have fun.</p>
                </div>
              </div>


            </div>
            <!-- End Schdule Day 2 -->

            <!-- Schdule Day 3 -->
            <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

              <div class="row schedule-item">
                <div class="col-md-2"><time>10:00 AM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/blockchain.jpg" alt="Hubert Hirthe">
                  </div>
                  <h4>Workshop <span>continued</span></h4>
                  <p>Let’s go beyond and learn the future bcoz BLOCKCHAIN is the next big thing.</p>
                </div>
              </div>

              

              <div class="row schedule-item">
                <div class="col-md-2"><time>04:00 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/gaming.jpg" alt="Gaming">
                  </div>
                  <h4>Gaming <span>Event</span></h4>
                  <p>Go online, team up with your mates to make sure that only your team remains in the contest.</p>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>04:30 PM</time></div>
                <div class="col-md-10">
                  <div class="speaker">
                    <img src="images/valedictory.png" alt="Valedictory">
                  </div>
                  <h4>Valedictory <span>Session</span></h4>
                  <p>Finally the festive meets its end this year with a final closing ceremony.</p>
                </div>
              </div>

            </div>
            <!-- End Schdule Day 3 -->
          </div>
        </div>
      </section>
      
      
  

    <!--==========================
      Venue Section
      ============================-->
      <section id="venue" class="wow effectFadeIn">

        <div class="container-fluid">

          <div class="section-header">
            <h2 style="color:white">Event Venue</h2>
            <p>Event venue location info and gallery</p>
          </div>

          <div class="row no-gutters">
            <div class="col-lg-6 venue-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d8919.579269065918!2d77.60402350248654!3d14.649633352129417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sjntuacea!5e0!3m2!1sen!2sin!4v1581330804990!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="col-lg-6 venue-info">
              <div class="row justify-content-center">
                <div class="col-11 col-lg-8">
                  <h3>JNTUACEA, Anantapur</h3>
                  <p></p>
                </div>
              </div>
            </div>
          </div>

        </div>

       
      </section>


    <!--==========================
      Gallery Section
      ============================-->
      <section id="gallery" class="wow fadeInUp">

        <div class="container">
          <div class="section-header">
            <h2 style="color:white">Gallery</h2>
            <p>Check our gallery from the recent events</p>
          </div>
        </div>

        <div class="owl-carousel gallery-carousel">
          <a href="img/gallerypics/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallerypics/1.jpg" alt=""></a>
          <a href="img/gallerypics/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallerypics/2.jpg" alt=""></a>
          <a href="img/venue/dept.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/venue/dept.jpg" alt=""></a>
          <a href="img/venue/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/venue/3.jpg" alt=""></a>
          <a href="img/gallerypics/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallerypics/4.jpg" alt=""></a>
          <a href="img/gallerypics/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallerypics/6.jpg" alt=""></a>
          <a href="img/gallerypics/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallerypics/8.jpg" alt=""></a>
          <a href="img/gallerypics/10.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallerypics/10.jpg" alt=""></a>
        </div>

      </section>

 
    
    <!--==========================
      Contact Section
      ============================-->
      <section id="contact" class="section-bg wow bounceIn">

        <div class="container">

          <div class="section-header">
            <h2 style="color:white">Contact Us</h2>
            <p>For any queries, please refer <a href="eventdetails/faq.php">FAQ's</a> or contact us</p>
          </div>

          <div class="row contact-info">

            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3 style="color:white">Address</h3>
                <address style="color:#9195A2">CSE Department,JNTUACEA,Sir Mokshagundam Vishveshwariah Road, Anantapur, Andhra Pradesh 515002</address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3 style="color:white">Phone Number</h3>
                <p ><a  style="color:#9195A2">+91 9985726026</a></p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3 style="color:white">Email</h3>
                <p ><a href="mailto:pixel.jntua@gmail.com" style="color:#9195A2">pixel.jntua@gmail.com</a></p>
              </div>
            </div>

          </div>

       
      </section><!-- #contact -->

    </main>


  <!--==========================
    Footer
    ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-8 footer-info">
              <img src="img/fontLogo.png" alt="TheEvenet">
              <p>Pixel is a National Level Technical Symposium for undergrads and postgrads organised by Department of Computer Science and Engineering, JNTUA College of Engineering, Ananthapuramu.</p>
            </div>

            <div class="col-lg-4 col-md-8 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#about">About us</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#events">Events</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#schedule">Schedule</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="./register/">Register</a></li>
              </ul>
            </div>


            <div class="col-lg-4 col-md-8 footer-contact">
              <h4>Contact Us</h4>
              <p>
                CSE department <br>
                JNTUACEA<br>
                Anantapuram<br>
                <strong>Phone:</strong> +919985726026<br>
                <strong>Email:</strong> pixel.jntua@gmailcom<br>
              </p>

              <div class="social-links">
                <a href="https://www.twitter.com/pixel_jntuacea" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/Pixel2k20" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/pixel.2k20" class="instagram"><i class="fa fa-instagram"></i></a>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
         <!-- &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved-->
       </div>
       <div class="credits">
       
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
