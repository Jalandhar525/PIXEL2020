<?php

require_once("mail/mail.class.php");
$mail = new Mail();

require_once("details.php");
$obj=new Details();
$res=$obj->getdetails();




$count=count($res);
/* sendMail Parameters - to_email, to_name, $subject, $body */

$subject = "New Combo added to PIXEL-2020!";
for($i=50;$i<100;$i++){
   $to_name = $res[$i.'name'];



$body="Hello <b>".$to_name.",</b><br/>PIXEL-2020 is all set with techinal and fun events.Come join us in this fun ride.<br/>The last date for payment is extended till <b>14 March, 2020</b>.<br/>We have created a new combo called <b>Code Combo</b> for code geeks.The combo consists of the following 3 events.<ul><li>Code war</li><li>Code Swapping</li><li>Bugging Blitz</li></ul>.<br/>For more details, Visit Our Website <a href='https://pixel2020.in/' target='_blank'>https://pixel2020.in</a><br/><br/>Greetings From Pixel Team.";
    
   $to_email=$res[$i.'mail'];
    
    
   $res1 = $mail->sendMail($to_email,$to_name,$subject,$body);
    if($res1==1){
        echo "Mail sent..!".$to_email;
    }else{
        echo "Mail Error..!".$to_email;
    }
    echo $to_email."<br/>";
}
?>