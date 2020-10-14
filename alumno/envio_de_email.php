<?php
 include ("Mailer/PHPMailer.php");
 include ("Mailer/SMTP.php");
 include ("Mailer/Exception.php");
    
    
    
    try {
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $fromeemail="emailprueba869@gmail.com";
    $fromname="prueba";
    $host="smtp.gmail.com";  
    $port="587";
    $SMTPAuth="login";
    $SMTPSecure="tls"; 
    $password="cuentaprueba" ;   
    
    $Email = $_SESSION['Email'];    
    $bodyemail=$Email;
    $subject="que tal";
    $bodyEmail="mensaje";
        
    $mail->isSMTP();             
    $mail->SMTPDebug  = 2;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username   = $fromeemail;                     
    $mail->Password   = $password;                               

    //Recipients
    $mail->setFrom($fromeemail, $fromname);
    $mail->addAddress($Email);     // Add a recipient
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $titulo;
    $mail->Body    = $body;
        //echo "mail enviado";    
    header ($location); 
    } 

    catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>