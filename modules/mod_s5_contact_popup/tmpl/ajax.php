<?php

define( '_JEXEC', 1 );
define( 'JPATH_BASE', dirname(dirname(dirname(dirname(__FILE__)))));

require_once ( JPATH_BASE .'/includes/defines.php' );
require_once ( JPATH_BASE .'/includes/framework.php' );
$mainframe = JFactory::getApplication('site');
$mainframe->initialise();

$session = JFactory::getSession();
$cpemailhere = $session->get('cp_adminemail');


require_once('recaptchalib.php');

$name = filter_var($_POST['name']);
$message = filter_var($_POST['message']);
$email = filter_var($_POST['email']);
$return_pk = filter_var($_POST['cpreturnpk']);

$module = JModuleHelper::getModule('mod_s5_contact_popup');
$params = json_decode($module->params);


define("PRIV_KEY", $return_pk);


$to = $cpemailhere;
$subject = "Email Inquiry - ". $name;
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Additional headers
$headers .= 'From: '. $name .' <'. $email .'>' . "\r\n";





$message = "
This is an enquiry e-mail from: ". $email ."
<br><br>

". $message;



if(in_array('', array($name, $message, $email))) {
//one (or more) of the required fields is empty
$result = "field_error";



} else {
	$resp = recaptcha_check_answer (PRIV_KEY, $_SERVER["REMOTE_ADDR"]);
	if (!$resp->is_valid) {
	    //Captcha was entered incorrectly
		$result = "captcha_error";
	  } else {
	    //Captcha was entered correctly
	    $result = "success";
			
		mail($to, $subject, $message, $headers);	
			
			
		//You can enter your mail functions here. It's like:  
		// mail("yourmail@domain.com", "Email Subject", $message);  
	}
}
header("Expires: Mon, 26 Jul 1990 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//added 3/2015
// If curl is disabled or below module isn't working comment out ob_clean();
ob_clean();
echo $result;
 ?>
