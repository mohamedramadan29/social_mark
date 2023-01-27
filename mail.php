<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $message ="Name = ". $name . "\r\n  Email = " . $email . "\r\n
    SUBJECT = " . $subject . "\r\n Message =" . $message; 
    
    $subject ="My email subject";
    $fromname =$name;
    $fromemail = $email;  //if u dont have an email create one on your cpanel

    $mailto = "mr319242@gmail.com";  //the email which u want to recv this email


 
    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
  

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
   
    $body =$message;
    

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        
        echo "mail send ... OK"; // do what you want after sending the email
        
        
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }