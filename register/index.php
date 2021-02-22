<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../favicon/favicon2.png" type="image/x-icon">
    <title>Pixel2020 || Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
    @import url(http://fonts.googleapis.com/css?family=Raleway);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu {
  width: auto;
  border-bottom: 3px solid #47c9af;
  font-family: Raleway, sans-serif;
  line-height: 1;
}
#cssmenu ul {
  background: #ffffff;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu.align-right > ul > li > a {
  margin-right: 0;
  margin-left: -4px;
}
#cssmenu > ul > li > a {
  z-index: 2;
  padding: 18px 25px 12px 25px;
  font-size: 15px;
  font-weight: 400;
  text-decoration: none;
  color: #444444;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  margin-right: -4px;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #ffffff;
}
#cssmenu > ul > li > a:after {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  width: 100%;
  height: 120%;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  content: "";
  -webkit-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  -webkit-transform: perspective(5px) rotateX(2deg);
  -webkit-transform-origin: bottom;
  -moz-transform: perspective(5px) rotateX(2deg);
  -moz-transform-origin: bottom;
  transform: perspective(5px) rotateX(2deg);
  transform-origin: bottom;
}
#cssmenu > ul > li.active > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #ff004d;
}

</style>
    <script type="text/javascript">
/*function CheckBranch(val){
 var element=document.getElementById('branch');
 if(val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}*/

function ValidateEmail() 
{
    var mail=document.getElementById("mail").value;
    var flag=0
    var re=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 if (re.test(mail))
  {
     flag=1;
    
  }
  else
  {
      flag=0;
    document.getElementById("errmsgmail").innerHTML="Entered Mail is invalid";
    document.getElementById("mail").value="";
  }
  if(flag)
  {
      document.getElementById("errmsgmail").innerHTML="";
    
  }
    
}

</script> 

<meta name="theme-color" content="#f82249"/>
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/lg7.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div id='cssmenu'>
                   <!-- <ul>
                        <li><a href='../index.php'>HOME</a></li>
                        <li><a href='../about_event.php'>ABOUT-EVENT</a></li>
                        <li><a href='../workshop.php'>WORKSHOP</a></li>
                        <li><a href='../faq2.php'>FAQ</a></li>
                        <li><a href='../instruction.php'>PAYMENT</a></li>
                        <li><a href='../contact.php'>CONTACT US</a></li>
                    </ul>-->
                </div>
                <div class="form-content">
                    <div class="form-items">
                        <h3>Registration Form.</h3>
                        <p>Enter your details.</p>
                        <div class="page-links">
                            <!--<a href="#" class="active">Register</a>-->
                        </div>
                        <form action="addaction.php" method="POST">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Full Name" required><span id="errmsgname" class="bg bg-danger"></span>
                            <input class="form-control" type="email" id="mail" name="mail" placeholder="E-mail Address" onchange="ValidateEmail();" required><span id="errmsgmail" class="bg bg-danger"></span>
                            <input class="form-control" type="text" maxlength=10 id="phnno" name="phnno" placeholder="Phone Number" required> <span id="errmsgphnno" class="bg bg-danger"></span>
                            
                            <select  class="form-control" name="branch" required> 
                            <option value="" disabled selected>Choose Your Branch</option>
                                    <option value="CSE">CSE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="MECH">MECH</option>
                                    <option value="CIVIL">CIVIL</option>
                                    <option value="CHEM">CHEM</option>
                                    <option value="IT">IT</option>
                                    <option value="others">others</option>
                            </select><br>
                            <input class="form-control" type="text" name="rollno" placeholder="Your Roll Number in clg" required>
                            
                            <input class="form-control" type="text" name="clg" placeholder="College Name" required>
                            <input class="form-control" type="text" name="place" placeholder="Your Town/City" required>
                            <label>Note: Please Do not double click on the Register Button While form is Submitting.</label>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <div>
                        <?php
                        if(!empty($_GET['rgstatus']) && $_GET['rgstatus']=='fail')
                        {
                            echo "registration Failed try again using unused email";
                        }
                        ?>
                        </div>
                        <!--<div class="other-links">
                            <span>Or Keep Updating at</span><a href="https://www.facebook.com/Pixel2k19/">Facebook</a><a href="mailto:pixel.jntua@gmail.com">Google</a><a href="https://twitter.com/pixel_jntuacea">Twitter</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>