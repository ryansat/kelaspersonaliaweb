<?php
include_once('class.phpmailer.php');    
   $mail->IsSMTP(); // 
    $mail->Host       = "in-v3.mailjet.com"; 
    $mail->SMTPDebug  = 1;                    
    $mail->SMTPAuth   = true;                 
    $mail->Port       = 587;                    
    $mail->Username   = "f9ca1e0212b0b7810db394858f2c6845"; 
    $mail->Password   = "3b95de8afad7bb9b26328fc0d0a839ef";        
    $mail->SMTPSecure = "tls";
    $mail->SetFrom($email, $name);

    $mail->AddReplyTo($email,$name);

    $mail->Subject    = "TEST EMAIL";

    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 

    $mail->MsgHTML($body);
    $mail->AddAddress("ryansat46@gmail.com","ryansat46");


    if(!$mail->Send()) 
    {
        echo $mail;
      echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else
        {
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=contact.php?id='.$id.'&send=success">';
      exit; 
    }
?>