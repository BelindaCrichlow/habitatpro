<?php

$EmailFrom =$_POST['email'];
$EmailTo = "mailto:suscribirme@habitatpro.org";
$Subject = "Join Mailing List";
$Email = trim(stripslashes($_POST['email'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = " Please add me to your mailing listn\n";
$Body .= "Email: ";
$Body .= $Email;

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.html\">";
}
else{
  print "error";
}
?>