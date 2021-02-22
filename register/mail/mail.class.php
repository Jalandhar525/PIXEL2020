<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'vendor/autoload.php';
require_once 'logs.class.php';

class Mail{

    private $logs;
    private $email = "support@pixel2020.in";
    private $pass = "Pixel@mail";
    private $mails;
    
    public function __construct(){
        $this->logs = new Logs();
        
        
    }
    
    public function init(){
        
        $this->mails = new PHPMailer;
        $this->mails->isSMTP();
        $this->mails->SMTPDebug = 0;
        $this->mails->Host = 'smtp.hostinger.in';
        $this->mails->Port = 587;
        $this->mails->SMTPAuth = true;
        $this->mails->Username = $this->email;
        $this->mails->Password = $this->pass;
        $this->mails->setFrom($this->email, 'PIXEL-2020');
        $this->mails->addReplyTo($this->email, 'PIXEL-2020');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/codecombo.png');
       /* $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/codewar.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/buggingblitz.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/gaming.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/hackathon.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/natyakshetra.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/photography.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/ppt.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/questionbout.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/codeswapping.jpg');
        $this->mails->addAttachment($_SERVER['DOCUMENT_ROOT'].'/register/images/workshop.jpg');*/
        
        
        
        
       
    }
    
    public function sendMail($to_mail,$to_name,$subject,$body){
        unset($this->mails);
        $this->init();
        
        
        $res = 0;
        $mailinfo = $to_mail." ,".$to_name." ,".$subject;
        $this->mails->addAddress($to_mail,$to_name);
        $this->mails->Subject = $subject;
        $this->mails->msgHTML($body, __DIR__);
        $this->mails->AltBody = 'Welcome to PIXEL-2020';

        if (!$this->mails->send()) {
            $res = 2;
            $this->logs->errLog($mailinfo." ,".$this->mails->ErrorInfo);
        } else {
            $res = 1;
            $this->logs->accessLog($mailinfo." ,sent");
        }        
        return $res;
    }
}

?>