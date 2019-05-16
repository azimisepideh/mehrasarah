<?php 
/**@licenseGNU General Public License version 2 or later; see LICENSE.txt
Author: Shape 5 - Professional Template Community
Available for download at www.shape5.com
Copyright Shape5 LLC
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
$url = JURI::Base().'modules/mod_s5_quick_contact/';
if($_POST){
	$mainframe = JFactory::getApplication();
	$sc = $_COOKIE['security_code_contact'];
	$message = ''; 
	if ($_POST['s5_qc_verif_box'] == $sc || $s5_qc_is_captcha == 0){
		if (isset($_POST['s5_qc_name'])) {
			$name = $_POST['s5_qc_name'];
			if(strrpos($s5_qc_name_text,"...") >= 0) {
				$explode1 = explode('...', $s5_qc_name_text);
				$s5_qc_name_text = $explode1[0];
			}
			$message .= str_replace("...","",$s5_qc_name_text)." : ".$_POST['s5_qc_name'];
			$message .= "<br />";
		}
		if (isset($_POST['s5_qc_email'])) {
			$email = $_POST['s5_qc_email'];
			if(strrpos($s5_qc_email_text,"...") >= 0) {
				$explode2 = explode('...', $s5_qc_email_text);
				$s5_qc_email_text = $explode2[0];
			}
			$message .= str_replace("...","",$s5_qc_email_text)." : ".$_POST['s5_qc_email'];
			$message .= "<br />";
		}		
		if (isset($_POST['s5_qc_field1'])) {			
			$field1 = $_POST['s5_qc_field1'];	
			if(strrpos($s5_qc_field1_text,"...") >= 0) {
				$explode3 = explode('...', $s5_qc_field1_text);
				$s5_qc_field1_text = $explode3[0];
			}			
			$message .= str_replace("...","",$s5_qc_field1_text)." : ".$_POST['s5_qc_field1'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field2'])) {			
			$field2 = $_POST['s5_qc_field2'];	
			if(strrpos($s5_qc_field2_text,"...") >= 0) {
				$explode4 = explode('...', $s5_qc_field2_text);
				$s5_qc_field2_text = $explode4[0];
			}
			$message .= str_replace("...","",$s5_qc_field2_text)." : ".$_POST['s5_qc_field2'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field3'])) {			
			$field3 = $_POST['s5_qc_field3'];
			if(strrpos($s5_qc_field3_text,"...") >= 0) {
				$explode5 = explode('...', $s5_qc_field3_text);
				$s5_qc_field3_text = $explode5[0];
			}
			$message .= str_replace("...","",$s5_qc_field3_text)." : ".$_POST['s5_qc_field3'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field4'])) {			
			$field4 = $_POST['s5_qc_field4'];	
			if(strrpos($s5_qc_field4_text,"...") >= 0) {
				$explode6 = explode('...', $s5_qc_field4_text);
				$s5_qc_field4_text = $explode6[0];
			}
			$message .= str_replace("...","",$s5_qc_field4_text)." : ".$_POST['s5_qc_field4'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field5'])) {			
			$field5 = $_POST['s5_qc_field5'];	
			if(strrpos($s5_qc_field5_text,"...") >= 0) {
				$explode7 = explode('...', $s5_qc_field5_text);
				$s5_qc_field5_text = $explode7[0];
			}
			$message .= str_replace("...","",$s5_qc_field5_text)." : ".$_POST['s5_qc_field5'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field6'])) {			
			$field6 = $_POST['s5_qc_field6'];
			if(strrpos($s5_qc_field6_text,"...") >= 0) {
				$explode8 = explode('...', $s5_qc_field6_text);
				$s5_qc_field6_text = $explode8[0];
			}
			$message .= str_replace("...","",$s5_qc_field6_text)." : ".$_POST['s5_qc_field6'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field7'])) {			
			$field7 = $_POST['s5_qc_field7'];	
			if(strrpos($s5_qc_field7_text,"...") >= 0) {
				$explode9 = explode('...', $s5_qc_field7_text);
				$s5_qc_field7_text = $explode9[0];
			}
			$message .= str_replace("...","",$s5_qc_field7_text)." : ".$_POST['s5_qc_field7'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field8'])) {			
			$field8 = $_POST['s5_qc_field8'];
			if(strrpos($s5_qc_field8_text,"...") >= 0) {
				$explode10 = explode('...', $s5_qc_field8_text);
				$s5_qc_field8_text = $explode10[0];
			}
			$message .= str_replace("...","",$s5_qc_field8_text)." : ".$_POST['s5_qc_field8'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field9'])) {			
			$field9 = $_POST['s5_qc_field9'];	
			if(strrpos($s5_qc_field9_text,"...") >= 0) {
				$explode11 = explode('...', $s5_qc_field9_text);
				$s5_qc_field9_text = $explode11[0];
			}
			$message .= str_replace("...","",$s5_qc_field9_text)." : ".$_POST['s5_qc_field9'];			
			$message .= "<br />";		
		}	
		if (isset($_POST['s5_qc_field10'])) {			
			$field10 = $_POST['s5_qc_field10'];	
			if(strrpos($s5_qc_field10_text,"...") >= 0) {
				$explode12 = explode('...', $s5_qc_field10_text);
				$s5_qc_field10_text = $explode12[0];
			}
			$message .= str_replace("...","",$s5_qc_field10_text)." : ".$_POST['s5_qc_field10'];			
			$message .= "<br />";		
		}			
		if (isset($_POST['s5_qc_subject'])) {
			$subject = $s5_qc_subject_prefix . $_POST['s5_qc_subject'];
		}
		if (isset($_POST['s5_qc_verif_box'])) {
			$s5_qc_verif_box = (md5($_POST["s5_qc_verif_box"]).'a4xn');
		}
		$exclude_check = "valid";
		// Detects mail headers to prevent spammers.
		if (isset($_POST['s5_qc_name'])) {
			if ($name != "" && $name != " ") {
			   $from = urldecode($email);
			   $message2 = "1".$message;
			   if (strrpos($message2,$s5_qc_ex1) > 0 || strrpos($message2,$s5_qc_ex2) > 0 || strrpos($message2,$s5_qc_ex3) > 0 || strrpos($message2,$s5_qc_ex4) > 0 || strrpos($message2,$s5_qc_ex5) > 0 || strrpos($message2,$s5_qc_ex6) > 0 || strrpos($message2,$s5_qc_ex7) > 0 || strrpos($message2,$s5_qc_ex8) > 0 || strrpos($message2,$s5_qc_ex9) > 0 || strrpos($message2,$s5_qc_ex10) > 0 || strrpos($message2,$s5_qc_ex11) > 0 || strrpos($message2,$s5_qc_ex12) > 0 || strrpos($message2,$s5_qc_ex13) > 0 || strrpos($message2,$s5_qc_ex14) > 0 || strrpos($message2,$s5_qc_ex15) > 0 || strrpos($message2,$s5_qc_ex16) > 0 || strrpos($message2,$s5_qc_ex17) > 0 || strrpos($message2,$s5_qc_ex18) > 0 || strrpos($message2,$s5_qc_ex19) > 0 || strrpos($message2,$s5_qc_ex20) > 0 || strrpos($message2,$s5_qc_ex21) > 0 || strrpos($message2,$s5_qc_ex22) > 0 || strrpos($message2,$s5_qc_ex23) > 0 || strrpos($message2,$s5_qc_ex24) > 0 || strrpos($message2,$s5_qc_ex25) > 0 || strrpos($message2,$s5_qc_ex26) > 0 || strrpos($message2,$s5_qc_ex27) > 0 || strrpos($message2,$s5_qc_ex28) > 0 || strrpos($message2,$s5_qc_ex29) > 0 || strrpos($message2,$s5_qc_ex30) > 0) {
					$exclude_check = "invalid";
			   }
			   if ($exclude_check == "valid") {
					$mainframe->setUserState('s5_qc_name','');
					$mainframe->setUserState('s5_qc_email','');
					$mainframe->setUserState('s5_qc_subject','');
					$mainframe->setUserState('s5_qc_field1','');
					$mainframe->setUserState('s5_qc_field2','');
					$mainframe->setUserState('s5_qc_field3','');
					$mainframe->setUserState('s5_qc_field4','');
					$mainframe->setUserState('s5_qc_field5','');
					$mainframe->setUserState('s5_qc_field6','');
					$mainframe->setUserState('s5_qc_field7','');
					$mainframe->setUserState('s5_qc_field8','');
					$mainframe->setUserState('s5_qc_field9','');
					$mainframe->setUserState('s5_qc_field10','');
					$mainframe->setUserState('captcha_error',0);
					$config = JFactory::getConfig(); 
				 	$mailfrom = $config->get('mailfrom');
   					$fromname = $config->get('fromname') ;	
					if($s5_qc_email_sender=='user'){
						$fromname  = $_POST['s5_qc_name'];
						$mailfrom = $_POST['s5_qc_email'];
					}
					$mailer = JFactory::getMailer();
					$sender = array($mailfrom,$fromname);
					$mailer->setSender($sender); 
					$mailer->addRecipient($s5_qc_email_address);
					$mailer->setSubject($subject);
					$mailer->setBody($message);
					$mailer->isHTML(true);
					$send = $mailer->Send();
					$mainframe->redirect($_POST['returnurl']);
				}
			}
		}
	}
	else{
		$mainframe->setUserState('s5_qc_name',$_POST['s5_qc_name']);
		$mainframe->setUserState('s5_qc_subject',$_POST['s5_qc_subject']);
		$mainframe->setUserState('s5_qc_field1',$_POST['s5_qc_field1']);
		$mainframe->setUserState('s5_qc_field2',$_POST['s5_qc_field2']);
		$mainframe->setUserState('s5_qc_field3',$_POST['s5_qc_field3']);
		$mainframe->setUserState('s5_qc_field4',$_POST['s5_qc_field4']);
		$mainframe->setUserState('s5_qc_field5',$_POST['s5_qc_field5']);
		$mainframe->setUserState('s5_qc_field6',$_POST['s5_qc_field6']);
		$mainframe->setUserState('s5_qc_field7',$_POST['s5_qc_field7']);
		$mainframe->setUserState('s5_qc_field8',$_POST['s5_qc_field8']);
		$mainframe->setUserState('s5_qc_field9',$_POST['s5_qc_field9']);
		$mainframe->setUserState('s5_qc_field10',$_POST['s5_qc_field10']);
		$mainframe->setUserState('captcha_error',1);
		$mainframe->redirect($_POST['returnurl']);
	}
}
$s5_qc_url = JURI::root().'modules/mod_s5_quick_contact/';
$doc = JFactory::getDocument();
$doc->addCustomTag('<link rel="stylesheet" href="'.$s5_qc_url.'s5_quick_contact/s5_quick_contact.css" type="text/css" />');
$doc->addCustomTag('<script src="'.$s5_qc_url.'s5_quick_contact/s5_quick_contact.js" type="text/javascript"></script>');
$doc->addCustomTag('<link rel="stylesheet" href="'.$s5_qc_url.'s5_quick_contact/pikaday.css" type="text/css" />');
$doc->addCustomTag('<script src="'.$s5_qc_url.'s5_quick_contact/pikaday.js" type="text/javascript"></script>');
?>
<div id="s5_quick_contact_wrap"<?php if ($s5_qc_border_box == "yes") { ?> class="s5_quick_contact_wrap_box_border"<?php } ?>>	
	<?php if ($s5_qc_pretext != "") { ?>		
		<div id="s5_qc_pretext" style="margin:<?php echo $s5_qc_margin; ?>">			
			<?php echo $s5_qc_pretext ?>		
		</div>	
	<?php } ?>	
	<form name="s5_quick_contact" method="post" id="s5_quick_contact">		
		<?php $mainframe = JFactory::getApplication(); ?>	
		<span class="s5_qc_name_wrap" id="s5_qc_namebox_span">
			<input class="inputbox" id="s5_qc_namebox" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_name')!='') ? $mainframe->getUserState('s5_qc_name') : $s5_qc_name_text; ?>" name="s5_qc_name" />		
		</span>
		<span class="s5_qc_email_wrap" id="s5_qc_emailbox_span">
			<input class="inputbox" id="s5_qc_emailbox" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo $s5_qc_email_text; ?>" name="s5_qc_email" />		
		</span>
		<span id="s5_qc_subjectbox_span<?php if ($s5_qc_subject_type == "predefined") { ?>_hidden<?php } ?>" class="s5_qc_subject_wrap"<?php if ($s5_qc_subject_type == "predefined") { ?> style="display:none !important;"<?php } ?>>		
			<input class="inputbox" id="s5_qc_subjectbox" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_subject')!='')?$mainframe->getUserState('s5_qc_subject') : $s5_qc_subject_text; ?>" name="s5_qc_subject" />
		</span>	
		<?php if ($s5_qc_field1_type == "text" || $s5_qc_field1_type == "text_required" || $s5_qc_field1_type == "date" || $s5_qc_field1_type == "date_required") { ?>			
			<span id="s5_qc_field1box_span" class="s5_qc_<?php echo $s5_qc_field1_type; ?>">				
				<input class="inputbox" id="s5_qc_field1box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field1')!='')?$mainframe->getUserState('s5_qc_field1') : $s5_qc_field1_text; ?>" name="s5_qc_field1" />
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field1_type == "textarea" || $s5_qc_field1_type == "textarea_required") { ?>
			<span id="s5_qc_field1box_span" class="s5_qc_<?php echo $s5_qc_field1_type; ?>">
				<textarea id="s5_qc_field1box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field1"><?php echo ($mainframe->getUserState('s5_qc_field1')!='')?$mainframe->getUserState('s5_qc_field1') : $s5_qc_field1_text;?></textarea>			
			</span>				
		<?php } ?>	
		<?php if ($s5_qc_field1_type == "select" || $s5_qc_field1_type == "select_required") { ?>
		<?php 
		$s5_qc_field1_text_explode = explode(",", $s5_qc_field1_text);
		$s5_qc_field1_text_explode_number = count($s5_qc_field1_text_explode);
		?>
			<span id="s5_qc_field1box_span" class="s5_qc_<?php echo $s5_qc_field1_type; ?>">
				<select class="inputbox select" id="s5_qc_field1box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field1">
					<?php
						$s5_qc_field1_text_explode_counter = 0;
						while($s5_qc_field1_text_explode_counter < $s5_qc_field1_text_explode_number) {
							echo "<option>".$s5_qc_field1_text_explode[$s5_qc_field1_text_explode_counter]."</option>";
							$s5_qc_field1_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>			
		<?php if ($s5_qc_field2_type == "text" || $s5_qc_field2_type == "text_required" || $s5_qc_field2_type == "date" || $s5_qc_field2_type == "date_required") { ?>			
			<span id="s5_qc_field2box_span" class="s5_qc_<?php echo $s5_qc_field2_type; ?>">	
				<input class="inputbox" id="s5_qc_field2box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field2')!='')?$mainframe->getUserState('s5_qc_field2') : $s5_qc_field2_text; ?>" name="s5_qc_field2" />
			</span>
		<?php } ?>
		<?php if ($s5_qc_field2_type == "textarea" || $s5_qc_field2_type == "textarea_required") { ?>
			<span id="s5_qc_field2box_span" class="s5_qc_<?php echo $s5_qc_field2_type; ?>">
				<textarea id="s5_qc_field2box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field2"><?php echo ($mainframe->getUserState('s5_qc_field2')!='')?$mainframe->getUserState('s5_qc_field2') : $s5_qc_field2_text;?></textarea>			
			</span>
		<?php } ?>		
		<?php if ($s5_qc_field2_type == "select" || $s5_qc_field2_type == "select_required") { ?>
		<?php 
		$s5_qc_field2_text_explode = explode(",", $s5_qc_field2_text);
		$s5_qc_field2_text_explode_number = count($s5_qc_field2_text_explode);
		?>
			<span id="s5_qc_field2box_span" class="s5_qc_<?php echo $s5_qc_field2_type; ?>">
				<select class="inputbox select" id="s5_qc_field2box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field2">
					<?php
						$s5_qc_field2_text_explode_counter = 0;
						while($s5_qc_field2_text_explode_counter < $s5_qc_field2_text_explode_number) {
							echo "<option>".$s5_qc_field2_text_explode[$s5_qc_field2_text_explode_counter]."</option>";
							$s5_qc_field2_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field3_type == "text" || $s5_qc_field3_type == "text_required" || $s5_qc_field3_type == "date" || $s5_qc_field3_type == "date_required") { ?>
			<span id="s5_qc_field3box_span" class="s5_qc_<?php echo $s5_qc_field3_type; ?>">
				<input class="inputbox" id="s5_qc_field3box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field3')!='')?$mainframe->getUserState('s5_qc_field3') : $s5_qc_field3_text; ?>" name="s5_qc_field3" />
			</span>
		<?php } ?>		
		<?php if ($s5_qc_field3_type == "textarea" || $s5_qc_field3_type == "textarea_required") { ?>			
			<span id="s5_qc_field3box_span" class="s5_qc_<?php echo $s5_qc_field3_type; ?>">
				<textarea id="s5_qc_field3box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field3"><?php echo ($mainframe->getUserState('s5_qc_field3')!='')?$mainframe->getUserState('s5_qc_field3') : $s5_qc_field3_text;?></textarea>
			</span>
		<?php } ?>	
		<?php if ($s5_qc_field3_type == "select" || $s5_qc_field3_type == "select_required") { ?>
		<?php 
		$s5_qc_field3_text_explode = explode(",", $s5_qc_field3_text);
		$s5_qc_field3_text_explode_number = count($s5_qc_field3_text_explode);
		?>
			<span id="s5_qc_field3box_span" class="s5_qc_<?php echo $s5_qc_field3_type; ?>">
				<select class="inputbox select" id="s5_qc_field3box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field3">
					<?php
						$s5_qc_field3_text_explode_counter = 0;
						while($s5_qc_field3_text_explode_counter < $s5_qc_field3_text_explode_number) {
							echo "<option>".$s5_qc_field3_text_explode[$s5_qc_field3_text_explode_counter]."</option>";
							$s5_qc_field3_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>		
		<?php if ($s5_qc_field4_type == "text" || $s5_qc_field4_type == "text_required" || $s5_qc_field4_type == "date" || $s5_qc_field4_type == "date_required") { ?>
			<span id="s5_qc_field4box_span" class="s5_qc_<?php echo $s5_qc_field4_type; ?>">
				<input class="inputbox" id="s5_qc_field4box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field4')!='')?$mainframe->getUserState('s5_qc_field4') : $s5_qc_field4_text; ?>" name="s5_qc_field4" />
			</span>
		<?php } ?>		
		<?php if ($s5_qc_field4_type == "textarea" || $s5_qc_field4_type == "textarea_required") { ?>			
			<span id="s5_qc_field4box_span" class="s5_qc_<?php echo $s5_qc_field4_type; ?>">				
				<textarea id="s5_qc_field4box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field4"><?php echo ($mainframe->getUserState('s5_qc_field4')!='')?$mainframe->getUserState('s5_qc_field4') : $s5_qc_field4_text;?></textarea>			
			</span>				
		<?php } ?>		
		<?php if ($s5_qc_field4_type == "select" || $s5_qc_field4_type == "select_required") { ?>
		<?php 
		$s5_qc_field4_text_explode = explode(",", $s5_qc_field4_text);
		$s5_qc_field4_text_explode_number = count($s5_qc_field4_text_explode);
		?>
			<span id="s5_qc_field4box_span" class="s5_qc_<?php echo $s5_qc_field4_type; ?>">
				<select class="inputbox select" id="s5_qc_field4box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field4">
					<?php
						$s5_qc_field4_text_explode_counter = 0;
						while($s5_qc_field4_text_explode_counter < $s5_qc_field4_text_explode_number) {
							echo "<option>".$s5_qc_field4_text_explode[$s5_qc_field4_text_explode_counter]."</option>";
							$s5_qc_field4_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field5_type == "text" || $s5_qc_field5_type == "text_required" || $s5_qc_field5_type == "date" || $s5_qc_field5_type == "date_required") { ?>			
			<span id="s5_qc_field5box_span" class="s5_qc_<?php echo $s5_qc_field5_type; ?>">				
				<input class="inputbox" id="s5_qc_field5box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field5')!='')?$mainframe->getUserState('s5_qc_field5') : $s5_qc_field5_text; ?>" name="s5_qc_field5" />		
			</span>			
		<?php } ?>		
		<?php if ($s5_qc_field5_type == "textarea" || $s5_qc_field5_type == "textarea_required") { ?>			
			<span id="s5_qc_field5box_span" class="s5_qc_<?php echo $s5_qc_field5_type; ?>">				
				<textarea id="s5_qc_field5box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field5"><?php echo ($mainframe->getUserState('s5_qc_field5')!='')?$mainframe->getUserState('s5_qc_field5') : $s5_qc_field5_text;?></textarea>			
			</span>				
		<?php } ?>		
		<?php if ($s5_qc_field5_type == "select" || $s5_qc_field5_type == "select_required") { ?>
		<?php 
		$s5_qc_field5_text_explode = explode(",", $s5_qc_field5_text);
		$s5_qc_field5_text_explode_number = count($s5_qc_field5_text_explode);
		?>
			<span id="s5_qc_field5box_span" class="s5_qc_<?php echo $s5_qc_field5_type; ?>">
				<select class="inputbox select" id="s5_qc_field5box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field5">
					<?php
						$s5_qc_field5_text_explode_counter = 0;
						while($s5_qc_field5_text_explode_counter < $s5_qc_field5_text_explode_number) {
							echo "<option>".$s5_qc_field5_text_explode[$s5_qc_field5_text_explode_counter]."</option>";
							$s5_qc_field5_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field6_type == "text" || $s5_qc_field6_type == "text_required" || $s5_qc_field6_type == "date" || $s5_qc_field6_type == "date_required") { ?>			
			<span id="s5_qc_field6box_span" class="s5_qc_<?php echo $s5_qc_field6_type; ?>">				
				<input class="inputbox" id="s5_qc_field6box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field6')!='')?$mainframe->getUserState('s5_qc_field6') : $s5_qc_field6_text; ?>" name="s5_qc_field6" />		
			</span>			
		<?php } ?>		
		<?php if ($s5_qc_field6_type == "textarea" || $s5_qc_field6_type == "textarea_required") { ?>			
			<span id="s5_qc_field6box_span" class="s5_qc_<?php echo $s5_qc_field6_type; ?>">				
				<textarea id="s5_qc_field6box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field6"><?php echo ($mainframe->getUserState('s5_qc_field6')!='')?$mainframe->getUserState('s5_qc_field6') : $s5_qc_field6_text;?></textarea>			
			</span>				
		<?php } ?>		
		<?php if ($s5_qc_field6_type == "select" || $s5_qc_field6_type == "select_required") { ?>
		<?php 
		$s5_qc_field6_text_explode = explode(",", $s5_qc_field6_text);
		$s5_qc_field6_text_explode_number = count($s5_qc_field6_text_explode);
		?>
			<span id="s5_qc_field6box_span" class="s5_qc_<?php echo $s5_qc_field6_type; ?>">
				<select class="inputbox select" id="s5_qc_field6box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field6">
					<?php
						$s5_qc_field6_text_explode_counter = 0;
						while($s5_qc_field6_text_explode_counter < $s5_qc_field6_text_explode_number) {
							echo "<option>".$s5_qc_field6_text_explode[$s5_qc_field6_text_explode_counter]."</option>";
							$s5_qc_field6_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field7_type == "text" || $s5_qc_field7_type == "text_required" || $s5_qc_field7_type == "date" || $s5_qc_field7_type == "date_required") { ?>			
			<span id="s5_qc_field7box_span" class="s5_qc_<?php echo $s5_qc_field7_type; ?>">				
				<input class="inputbox" id="s5_qc_field7box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field7')!='')?$mainframe->getUserState('s5_qc_field7') : $s5_qc_field7_text; ?>" name="s5_qc_field7" />		
			</span>				
		<?php } ?>		
		<?php if ($s5_qc_field7_type == "textarea" || $s5_qc_field7_type == "textarea_required") { ?>			
			<span id="s5_qc_field7box_span" class="s5_qc_<?php echo $s5_qc_field7_type; ?>">				
				<textarea id="s5_qc_field7box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field7"><?php echo ($mainframe->getUserState('s5_qc_field7')!='')?$mainframe->getUserState('s5_qc_field7') : $s5_qc_field7_text;?></textarea>			
			</span>			
		<?php } ?>	
		<?php if ($s5_qc_field7_type == "select" || $s5_qc_field7_type == "select_required") { ?>
		<?php 
		$s5_qc_field7_text_explode = explode(",", $s5_qc_field7_text);
		$s5_qc_field7_text_explode_number = count($s5_qc_field7_text_explode);
		?>
			<span id="s5_qc_field7box_span" class="s5_qc_<?php echo $s5_qc_field7_type; ?>">
				<select class="inputbox select" id="s5_qc_field7box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field7">
					<?php
						$s5_qc_field7_text_explode_counter = 0;
						while($s5_qc_field7_text_explode_counter < $s5_qc_field7_text_explode_number) {
							echo "<option>".$s5_qc_field7_text_explode[$s5_qc_field7_text_explode_counter]."</option>";
							$s5_qc_field7_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field8_type == "text" || $s5_qc_field8_type == "text_required" || $s5_qc_field8_type == "date" || $s5_qc_field8_type == "date_required") { ?>			
			<span id="s5_qc_field8box_span" class="s5_qc_<?php echo $s5_qc_field8_type; ?>">				
				<input class="inputbox" id="s5_qc_field8box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field8')!='')?$mainframe->getUserState('s5_qc_field8') : $s5_qc_field8_text; ?>" name="s5_qc_field8" />		
			</span>			
		<?php } ?>		
		<?php if ($s5_qc_field8_type == "textarea" || $s5_qc_field8_type == "textarea_required") { ?>			
			<span id="s5_qc_field8box_span" class="s5_qc_<?php echo $s5_qc_field8_type; ?>">				
				<textarea id="s5_qc_field8box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field8"><?php echo ($mainframe->getUserState('s5_qc_field8')!='')?$mainframe->getUserState('s5_qc_field8') : $s5_qc_field8_text;?></textarea>			
			</span>			
		<?php } ?>		
		<?php if ($s5_qc_field8_type == "select" || $s5_qc_field8_type == "select_required") { ?>
		<?php 
		$s5_qc_field8_text_explode = explode(",", $s5_qc_field8_text);
		$s5_qc_field8_text_explode_number = count($s5_qc_field8_text_explode);
		?>
			<span id="s5_qc_field8box_span" class="s5_qc_<?php echo $s5_qc_field8_type; ?>">
				<select class="inputbox select" id="s5_qc_field8box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field8">
					<?php
						$s5_qc_field8_text_explode_counter = 0;
						while($s5_qc_field8_text_explode_counter < $s5_qc_field8_text_explode_number) {
							echo "<option>".$s5_qc_field8_text_explode[$s5_qc_field8_text_explode_counter]."</option>";
							$s5_qc_field8_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field9_type == "text" || $s5_qc_field9_type == "text_required" || $s5_qc_field9_type == "date" || $s5_qc_field9_type == "date_required") { ?>			
			<span id="s5_qc_field9box_span" class="s5_qc_<?php echo $s5_qc_field9_type; ?>">				
				<input class="inputbox" id="s5_qc_field9box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field9')!='')?$mainframe->getUserState('s5_qc_field9') : $s5_qc_field9_text; ?>" name="s5_qc_field9" />		
			</span>				
		<?php } ?>		
		<?php if ($s5_qc_field9_type == "textarea" || $s5_qc_field9_type == "textarea_required") { ?>			
			<span id="s5_qc_field9box_span" class="s5_qc_<?php echo $s5_qc_field9_type; ?>">				
				<textarea id="s5_qc_field9box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field9"><?php echo ($mainframe->getUserState('s5_qc_field9')!='')?$mainframe->getUserState('s5_qc_field9') : $s5_qc_field9_text;?></textarea>			
			</span>				
		<?php } ?>	
		<?php if ($s5_qc_field9_type == "select" || $s5_qc_field9_type == "select_required") { ?>
		<?php 
		$s5_qc_field9_text_explode = explode(",", $s5_qc_field9_text);
		$s5_qc_field9_text_explode_number = count($s5_qc_field9_text_explode);
		?>
			<span id="s5_qc_field9box_span" class="s5_qc_<?php echo $s5_qc_field9_type; ?>">
				<select class="inputbox select" id="s5_qc_field9box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field9">
					<?php
						$s5_qc_field9_text_explode_counter = 0;
						while($s5_qc_field9_text_explode_counter < $s5_qc_field9_text_explode_number) {
							echo "<option>".$s5_qc_field9_text_explode[$s5_qc_field9_text_explode_counter]."</option>";
							$s5_qc_field9_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_field10_type == "text" || $s5_qc_field10_type == "text_required" || $s5_qc_field10_type == "date" || $s5_qc_field10_type == "date_required") { ?>			
			<span id="s5_qc_field10box_span" class="s5_qc_<?php echo $s5_qc_field10_type; ?>">				
				<input class="inputbox" id="s5_qc_field10box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="height:<?php echo $s5_qc_input_height; ?>;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" value="<?php echo ($mainframe->getUserState('s5_qc_field10')!='')?$mainframe->getUserState('s5_qc_field10') : $s5_qc_field10_text; ?>" name="s5_qc_field10" />		
			</span>			
		<?php } ?>		
		<?php if ($s5_qc_field10_type == "textarea" || $s5_qc_field10_type == "textarea_required") { ?>			
			<span id="s5_qc_field10box_span" class="s5_qc_<?php echo $s5_qc_field10_type; ?>">				
				<textarea id="s5_qc_field10box" class="inputbox textarea" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="overflow:auto;width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;height:<?php echo $s5_qc_height; ?>;" name="s5_qc_field10"><?php echo ($mainframe->getUserState('s5_qc_field10')!='')?$mainframe->getUserState('s5_qc_field10') : $s5_qc_field10_text;?></textarea>			
			</span>			
		<?php } ?>		
		<?php if ($s5_qc_field10_type == "select" || $s5_qc_field10_type == "select_required") { ?>
		<?php 
		$s5_qc_field10_text_explode = explode(",", $s5_qc_field10_text);
		$s5_qc_field10_text_explode_number = count($s5_qc_field10_text_explode);
		?>
			<span id="s5_qc_field10box_span" class="s5_qc_<?php echo $s5_qc_field10_type; ?>">
				<select class="inputbox select" id="s5_qc_field10box" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_select_width; ?>;height:<?php echo $s5_qc_select_height; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" name="s5_qc_field10">
					<?php
						$s5_qc_field10_text_explode_counter = 0;
						while($s5_qc_field10_text_explode_counter < $s5_qc_field10_text_explode_number) {
							echo "<option>".$s5_qc_field10_text_explode[$s5_qc_field10_text_explode_counter]."</option>";
							$s5_qc_field10_text_explode_counter++;
						} 
					?>
				</select>		
			</span>				
		<?php } ?>
		<?php if ($s5_qc_is_captcha == 1) { ?>		
			<span class="s5_qc_spambox_wrap">	
				<input class="inputbox" id="s5_qc_spambox" value="<?php echo $s5_qc_spambox_text;?>" onfocus="s5_qc_clear_inputs(this.id)" onblur="s5_qc_clear_inputs(this.id)" style="width:<?php echo $s5_qc_width; ?>;padding:<?php echo $s5_qc_padding; ?>;margin:<?php echo $s5_qc_margin; ?>;" type="text" name="s5_qc_verif_box" />		
			</span>			
			<?php 
			$mainframe = JFactory::getApplication(); 
			$captcha_error = $mainframe->getUserState('captcha_error',0); 
			if($captcha_error==1) {
				$mainframe->setUserState('captcha_error',''); ?>					
				<div id="s5_qc_captcha_error" style="padding:0px;padding-top:10px;padding-bottom:10px;color:#F71010;display:block;">
					<?php echo $s5_qc_captcha_error_text;?>
				</div>				
			<?php } ?>		
			<span class="s5_qc_security_img_wrap">	
				<img id="s5_qc_security_img" style="margin:<?php echo $s5_qc_margin; ?>;" src="<?php echo $url.'captcha/CaptchaSecurityImages.php'; ?>?width=90&height=30&characters=5" />			
			</span>		
			<input id="captcha_val" type="hidden" value="1" name="captcha_val" />	
		<?php } ?>		
		<input id="returnurl" type="hidden" value="<?php echo JURI::current();?>" name="returnurl" />	
		<span class="s5_qc_button_wrap">	
			<?php if ($s5_qc_button_type == "button") { ?>
				<button class="button btn" type="button" style="margin:<?php echo $s5_qc_margin; ?>" id="s5_qc_submitbutton" onclick="s5_qc_submit()"><?php echo $s5_qc_sendtext; ?></button>	
			<?php } ?>
			<?php if ($s5_qc_button_type == "input") { ?>
				<input class="button btn" type="button" style="margin:<?php echo $s5_qc_margin; ?>" id="s5_qc_submitbutton" onclick="s5_qc_submit()" value="<?php echo $s5_qc_sendtext; ?>" />
			<?php } ?>
		</span>
	</form>	
	<?php if ($s5_qc_posttext != "") { ?>
		<div id="s5_qc_posttext" style="margin:<?php echo $s5_qc_margin; ?>">
			<?php echo $s5_qc_posttext ?>
		</div>
	<?php } ?>
	<div style="clear:both;height:0px;"></div>
</div>
<?php 
$ran_num = rand(0, 5);
setcookie("s5_qc",(md5($ran_num).'a4xn')) ?>
<script type="text/javascript">
	function s5_qc_isValidEmail(str_email) {
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(str_email)) {
			alert("<?php echo $s5_qc_thankyou ?>");   document.s5_quick_contact.submit();   
		} else {   
			alert("<?php echo $s5_qc_emailerror ?>");   
			document.getElementById("s5_qc_emailbox").className = "inputbox s5_qc_required";   
		}
	}
	<?php if($s5_qc_is_captcha == 1) { ?>
		var s5_qc_spam_text = document.getElementById("s5_qc_spambox").value;
	<?php } ?>
	<?php 
		if ($s5_qc_field1_type == "select" || $s5_qc_field1_type == "select_required") {
			$s5_qc_field1_text = $s5_qc_field1_text_explode[0];;
		}
		if ($s5_qc_field2_type == "select" || $s5_qc_field2_type == "select_required") {
			$s5_qc_field2_text = $s5_qc_field2_text_explode[0];;
		}
		if ($s5_qc_field3_type == "select" || $s5_qc_field3_type == "select_required") {
			$s5_qc_field3_text = $s5_qc_field3_text_explode[0];;
		}
		if ($s5_qc_field4_type == "select" || $s5_qc_field4_type == "select_required") {
			$s5_qc_field4_text = $s5_qc_field4_text_explode[0];;
		}
		if ($s5_qc_field5_type == "select" || $s5_qc_field5_type == "select_required") {
			$s5_qc_field5_text = $s5_qc_field5_text_explode[0];;
		}
		if ($s5_qc_field6_type == "select" || $s5_qc_field6_type == "select_required") {
			$s5_qc_field6_text = $s5_qc_field6_text_explode[0];;
		}
		if ($s5_qc_field7_type == "select" || $s5_qc_field7_type == "select_required") {
			$s5_qc_field7_text = $s5_qc_field7_text_explode[0];;
		}
		if ($s5_qc_field8_type == "select" || $s5_qc_field8_type == "select_required") {
			$s5_qc_field8_text = $s5_qc_field8_text_explode[0];;
		}
		if ($s5_qc_field9_type == "select" || $s5_qc_field9_type == "select_required") {
			$s5_qc_field9_text = $s5_qc_field9_text_explode[0];;
		}
		if ($s5_qc_field10_type == "select" || $s5_qc_field10_type == "select_required") {
			$s5_qc_field10_text = $s5_qc_field10_text_explode[0];;
		}
	?>
	var s5_qc_subject_type = "<?php echo $s5_qc_subject_type; ?>";
	var s5_qc_spambox_text = "<?php echo $s5_qc_spambox_text; ?>";
	var s5_qc_subject_text = "<?php echo $s5_qc_subject_text; ?>";
	var s5_qc_name_text = "<?php echo $s5_qc_name_text; ?>";
	var s5_qc_email_text = "<?php echo $s5_qc_email_text; ?>";
	var s5_qc_field1_text = "<?php echo $s5_qc_field1_text; ?>";
	var s5_qc_field2_text = "<?php echo $s5_qc_field2_text; ?>";
	var s5_qc_field3_text = "<?php echo $s5_qc_field3_text; ?>";
	var s5_qc_field4_text = "<?php echo $s5_qc_field4_text; ?>";
	var s5_qc_field5_text = "<?php echo $s5_qc_field5_text; ?>";
	var s5_qc_field6_text = "<?php echo $s5_qc_field6_text; ?>";
	var s5_qc_field7_text = "<?php echo $s5_qc_field7_text; ?>";
	var s5_qc_field8_text = "<?php echo $s5_qc_field8_text; ?>";
	var s5_qc_field9_text = "<?php echo $s5_qc_field9_text; ?>";
	var s5_qc_field10_text = "<?php echo $s5_qc_field10_text; ?>";
	function s5_qc_clear_inputs(s5_qc_click_id) {	
		s5_qc_clear_inputs_values(s5_qc_click_id);
	}
	var s5_qc_field1_type = "<?php echo $s5_qc_field1_type; ?>";
	var s5_qc_field2_type = "<?php echo $s5_qc_field2_type; ?>";
	var s5_qc_field3_type = "<?php echo $s5_qc_field3_type; ?>";
	var s5_qc_field4_type = "<?php echo $s5_qc_field4_type; ?>";
	var s5_qc_field5_type = "<?php echo $s5_qc_field5_type; ?>";
	var s5_qc_field6_type = "<?php echo $s5_qc_field6_type; ?>";
	var s5_qc_field7_type = "<?php echo $s5_qc_field7_type; ?>";
	var s5_qc_field8_type = "<?php echo $s5_qc_field8_type; ?>";
	var s5_qc_field9_type = "<?php echo $s5_qc_field9_type; ?>";
	var s5_qc_field10_type = "<?php echo $s5_qc_field10_type; ?>";
	var s5_qc_required_missing = "no";
	var s5_qc_all_content = "";
	function s5_qc_submit() {
		s5_qc_check_required();	if (s5_qc_required_missing == "yes") {		alert("<?php echo $s5_qc_notcomplete ?>");		return false;	}	s5_qc_find_all_values();	if (s5_qc_all_content.indexOf("<?php echo $s5_qc_ex1 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex2 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex3 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex4 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex5 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex6 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex7 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex8 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex9 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex10 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex11 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex12 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex13 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex14 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex15 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex16 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex17 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex18 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex19 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex20 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex21 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex22 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex23 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex24 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex25 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex26 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex27 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex28 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex29 ?>") >= 0 || s5_qc_all_content.indexOf("<?php echo $s5_qc_ex30 ?>") >= 0) {
			return false;
		}
		else {
			var email_str = document.getElementById("s5_qc_emailbox").value;
			s5_qc_isValidEmail(email_str);
		}
	}
	function s5_qc_load_pikaday() {
		<?php if ($s5_qc_field1_type == "date" || $s5_qc_field1_type == "date_required") { ?>var s5_qc_picker1 = new Pikaday({ field: document.getElementById('s5_qc_field1box') });<?php } ?>
		<?php if ($s5_qc_field2_type == "date" || $s5_qc_field2_type == "date_required") { ?>var s5_qc_picker2 = new Pikaday({ field: document.getElementById('s5_qc_field2box') });<?php } ?>
		<?php if ($s5_qc_field3_type == "date" || $s5_qc_field3_type == "date_required") { ?>var s5_qc_picker3 = new Pikaday({ field: document.getElementById('s5_qc_field3box') });<?php } ?>
		<?php if ($s5_qc_field4_type == "date" || $s5_qc_field4_type == "date_required") { ?>var s5_qc_picker4 = new Pikaday({ field: document.getElementById('s5_qc_field4box') });<?php } ?>
		<?php if ($s5_qc_field5_type == "date" || $s5_qc_field5_type == "date_required") { ?>var s5_qc_picker5 = new Pikaday({ field: document.getElementById('s5_qc_field5box') });<?php } ?>
		<?php if ($s5_qc_field6_type == "date" || $s5_qc_field6_type == "date_required") { ?>var s5_qc_picker6 = new Pikaday({ field: document.getElementById('s5_qc_field6box') });<?php } ?>
		<?php if ($s5_qc_field7_type == "date" || $s5_qc_field7_type == "date_required") { ?>var s5_qc_picker7 = new Pikaday({ field: document.getElementById('s5_qc_field7box') });<?php } ?>
		<?php if ($s5_qc_field8_type == "date" || $s5_qc_field8_type == "date_required") { ?>var s5_qc_picker8 = new Pikaday({ field: document.getElementById('s5_qc_field8box') });<?php } ?>
		<?php if ($s5_qc_field9_type == "date" || $s5_qc_field9_type == "date_required") { ?>var s5_qc_picker9 = new Pikaday({ field: document.getElementById('s5_qc_field9box') });<?php } ?>
		<?php if ($s5_qc_field10_type == "date" || $s5_qc_field10_type == "date_required") { ?>var s5_qc_picker10 = new Pikaday({ field: document.getElementById('s5_qc_field10box') });<?php } ?>
	}
	function s5_qc_load_pikaday_timer() {
	window.setTimeout(s5_qc_load_pikaday,500);
	}
	window.onload = s5_qc_load_pikaday_timer();
</script>
