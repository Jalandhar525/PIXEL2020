     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link href="./../img/favicon.png" rel="icon" type="image/png">
     <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

     <!-- Google Fonts -->
     <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">-->

     <!-- Bootstrap CSS File -->
     <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Libraries CSS Files -->
     
     <!-- Main Stylesheet File -->
     <link href="css/style.css" rel="stylesheet">
     <link href="orb.css" rel="stylesheet">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <link href="css/style.css" rel="stylesheet">
     <style type="text/css">
     	#image {
        line-height: 1.5em;
        list-style-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/4621/treehouse-marker.png);
        font-size: 18px;
      }
    </style>
    
    <meta name="theme-color" content="#f82249"/>
  </head>
  <body>

   <!-- PRE LOADER -->
   <style type="text/css">.loader {
  position: relative;
  width: 2.5em;
  height: 2.5em;
  transform: rotate(165deg);
}
.loader:before, .loader:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  display: block;
  width: 0.5em;
  height: 0.5em;
  border-radius: 0.25em;
  transform: translate(-50%, -50%);
}
.loader:before {
  animation: before 2s infinite;
}
.loader:after {
  animation: after 2s infinite;
}

@keyframes before {
  0% {
    width: 0.5em;
    box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
  }
  35% {
    width: 2.5em;
    box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);
  }
  70% {
    width: 0.5em;
    box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);
  }
  100% {
    box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
  }
}
@keyframes after {
  0% {
    height: 0.5em;
    box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
  }
  35% {
    height: 2.5em;
    box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);
  }
  70% {
    height: 0.5em;
    box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);
  }
  100% {
    box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
  }
}
/**
 * Attempt to center the whole thing!
 */
html,
body {
  height: 100%;
}

.loader {
  position: absolute;
  top: calc(50% - 1.25em);
  left: calc(50% - 1.25em);
}
</style>
<section class="preloader">
    <div class="loader"></div>
 </section>
<script>
        $(window).on("load",function(){
          $(".preloader").fadeOut("slow");
        });
    </script>



 <!-- headerrrrrrrrrrrr -->
 <header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
      <a href="../#intro" class="scrollto"><img src="images/fontLogo.png" alt="" title="">
        <!--<h1><a href="#"><span>P</span>I<span>X</span>E<span>L</span></a></h1> -->
        
      </div>

      <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active">
                <li><a href="../#about">About</a></li>
                <li><a href="../#events">Events</a></li>
                <li><a href="../#schedule">Schedule</a></li>
                <li><a href="../#gallery">Gallery</a></li>
                <li><a href="../#supporters">Sponsors</a></li>
                <li><a href="coordinators.php">Co-ordinators</a></li>
                <li><a href="faq.php">FAQ's</a></li>
                <li class="buy-tickets"><a href="../register/">Register</a></li>
                <li><button onclick="popup('pixel-2020-204002');" class="tsbutton btn btn-small" style="border-radius:20px;height=98px;min-width=31px;" >Payment</button><noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript><script src="//www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script></li>
              </ul>
            </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->
    

    <!-- BLOG HEADER -->
    <section id="blog-header" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
       <div class="row">