<?php
use PHPMailer\PHPMailer\PHPMailer;


$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bookcab";

$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

if($conn){


     if(isset($_POST['submit']))
    
        $Name=$_POST['Name'];
        $Name=htmlentities($Name);

       $Email=$_POST['email'];
       $Email=htmlentities($Email);

     $Mobile=$_POST['pmobile'];
     $Mobile=htmlentities($Mobile);

         $pickup=$_POST['pickup'];
         $pickup=htmlentities($pickup);

        $date=$_POST['date'];
        $date=htmlentities($date);

         $time=$_POST['time'];
         $time=htmlentities($time);

         $total_passanger=$_POST['passage'];
         $total_passanger=htmlentities($total_passanger);

         $selectcar=$_POST['cars'];
         $selectcar=htmlentities($selectcar);


         $recq=$_POST['req'];
         $recq=htmlentities($recq);

         $Trip=$_POST['trip'];
         $Trip=htmlentities($Trip);


      
          $message=$_POST['message']; 
          $message=htmlentities($message);

        $sql="insert into booking(Name,Email,Mobile,Pickup_Point,Date,Time,Total_Passenger,Select_car,Required_car,Trip,Message) values('$Name','$Email','$Mobile','$pickup','$date','$time','$total_passanger','$selectcar','$recq','$Trip','$message')";
        $res=mysqli_query($conn,$sql);
         if($res){


                        

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
$mail->setFrom($Email, $Name);
$mail->addAddress("#");
$mail->Subject ="Message from $Name " ;
$mail->Body ="
Email from:$Email<br>'Mobile Number:$Mobile
<br>
Pickup Point: $pickup
<br>
Date:$date<br>Time:$time<br>
Total passenger:$total_passanger<br>
select car:$selectcar<br>
Required Car:$recq<br>
Trip:$Trip<br>

Message is: $message";

if ($mail->send()) {
    $status = "success";
    $response = "Email is sent!";
} else {
    $status = "failed";
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
}




           
         


          





            $msg="  Thank you  ".$Name." for booking cab.We will Contact As soon as possible on your Number.";

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


                
                else{

                  $error_msg3="sorry you have enter worng informtion for booking so try again..";

                echo " <html>
                <head>  
                <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css' rel='stylesheet'>
                </head>
                   <body>
                   
   
                   
                       <script type=text/javascript>
                       alert('$error_msg3');
                       window.location.href='index.php#bookcar';
   
                       
                       </script>
   
                      
           
                </body>
                </html>";
                }
   
    
}

$mysqli -> close();
?>
