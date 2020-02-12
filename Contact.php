<?php
use PHPMailer\PHPMailer\PHPMailer;


$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bookcab";

$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if($conn){
         if(isset($_POST['submit']))
    
        {
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];

        $email=$_POST['email'];
        $message=$_POST['message'];
        $sql="insert into  contact (Name,Mobile ,Email,Message)values('$name' ,'$mobile', '$email','$message')";
        
            
            $res=mysqli_query($conn,$sql);
            if($res)
            {


                
   

require_once "../patelcabs/PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";










$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "#";
$mail->Password = '#';
$mail->Port = 587; //587
$mail->SMTPSecure = "tls"; //tls

//Email Settings
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress("#");
$mail->Subject ="Message from '$name'" ;
$mail->Body ="
Email is:'$email','Mobile Number:'' $mobile'

Message is:' $message'";

if ($mail->send()) {
    $status = "success";
    $response = "Email is sent!";
} else {
    $status = "failed";
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
}










                $msg="  Thank you  ".$name."for Contact us.We will reply As soon as possible on your Mobile  Number.";

                echo "
              <html>
                <head>  
                <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css' rel='stylesheet'>
                </head>
                   <body>
                   
   
                   
                       <script type=text/javascript>
                       alert('$msg');
                       window.location.href='index.php';
   
                       
                       </script>
   
                      
           
                </body>
                </html>
   
   
                
              ";













            
            }
            else
            {
                $error_msg="sorry you have enter worng informtion so try again";

                echo " <html>
                <head>  
                <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css' rel='stylesheet'>
                </head>
                   <body>
                   
   
                   
                       <script type=text/javascript>
                       alert('$error_msg');
                       window.location.href='index.php#contactus';
   
                       
                       </script>
   
                      
           
                </body>
                </html>";
            }

    
}
    
    else{
         
    }

}
      

        ?>