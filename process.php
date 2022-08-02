<?php

$EmailFrom =$_POST['email'];
$EmailTo = "mailto:join@habitatpro.org";
$Subject = "Join Mailing List";
$Email = trim(stripslashes($_POST['email'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = " I would like to get updates on news and events.\n\n";
$Body .= "Email: ";
$Body .= $Email;

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thankyou.html\">";
}
else{
  print "error";
}
?>