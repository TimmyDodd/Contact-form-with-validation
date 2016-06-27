<?php

// remove any code
$cname = strip_tags($_POST['Name']);
$ctel = strip_tags($_POST['Tel']);
$cemail = strip_tags($_POST['Email']);
$cmessage = strip_tags($_POST['Message']);

$EmailFrom = "DNA@vroooom.com";
$EmailTo = "mike@vroooom.com";
$Subject = "Contact Form from DNAHVAC.com";
$Name = Trim(stripslashes($cname));
$Tel = Trim(stripslashes($ctel));
$Email = Trim(stripslashes($cemail));
$Message = Trim(stripslashes($cmessage));

// validation
$validationOK = true;
if (!$validationOK) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
	exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $cname;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $ctel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $cemail;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $cmessage;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

//write .txt file for backup
if (isset($cname) && isset($cemail) && isset($cmessage)) {
	$filename = 'misc/contact_form_' . date('m-d-Y_h-i-sa') . '.txt';
	$ret = file_put_contents($filename, $Body, FILE_APPEND | LOCK_EX);
	if ($ret === false) {
		die('There was an error writing this file');
	} else {

	}
} else {
	die('no post data to process');
}

// redirect to success page
if ($success) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
} else {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
