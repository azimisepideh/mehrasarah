<?php
/**
Author: Shape 5 - Professional Template Community
Available for download at www.shape5.com
*/
$doc =& JFactory::getDocument();
$url = JURI::root().'modules/mod_s5_contact_popup/';

// no direct access
defined('_JEXEC') or die('Restricted access');

$s5_encrypted2 = $cp_googleprivatekey;

if ($cp_gcaptcha == "yes") { include_once("recaptchalib.php");}

if ($s5_encrypted2 == '' || $cp_googlepublickey == '') {
	define("PUB_KEY", "empty");
} else {
	define("PUB_KEY", "".$cp_googlepublickey."");
}


$version=new JVersion;
if($version->RELEASE>='3.0'){
} else {
$doc->addCustomTag('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script>');
}
$doc->addCustomTag('<script src="'.$url.'js/jquery-noconflict.js" type="text/javascript"></script>');
$doc->addCustomTag('<script src="'.$url.'js/inquirybox_functions.js" type="text/javascript"></script>');
$doc->addCustomTag('<link href="'.$url.'css/contactpopup.css" rel="stylesheet" type="text/css" media="screen" />');

?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<script type="text/javascript">var s5contactpopurl = "<?php echo $url; ?>";
var s5contactpoperror = '<?php echo JText::_('S5_CONTACTPOP_ERROR'); ?>';
var s5contactpopfif = '<?php echo JText::_('S5_CONTACTPOP_FIF'); ?>';
var s5contactpopcb = '<?php echo JText::_('S5_CONTACTPOP_CB'); ?>';
var s5contactpopsuccess = '<?php echo JText::_('S5_CONTACTPOP_SUCCESS'); ?>';
var s5contactpoperror2 = '<?php echo JText::_('S5_CONTACTPOP_ERROR2'); ?>';

</script>
<style>
#s5_inquiryboxopentitle, #s5_inquirybox{background-color:#<?php echo $cp_maincolor; ?>;}
#s5_inquirybox:hover {background:#<?php echo $cp_hovercolor; ?>;}	
</style>
<script>function s5_inquirybox_open() {document.getElementById('s5_inquiryboxopen').style.display = "block";}function s5_inquirybox_close() {document.getElementById('s5_inquiryboxopen').style.display = "none";}
</script>


<div id="s5_inquiryboxopen">
		<div id="s5_inquiryboxopentitle">			
			<div class="s5_inquirytitle"><?php echo $cp_haveaquestion; ?></div>
			<div id="s5_inquiryboxtitle_icon" onclick="s5_inquirybox_close()"></div>			
		</div>	
	<div id="s5_inquiryboxwrap">

		<?php
		if ($s5_encrypted2 == '') {
				echo "<div class='message error' style=\"display:block;\">";  echo JText::_('S5_CONTACTPOP_PRIVATE');  echo"</div>";
		}
		
		if ($cp_googlepublickey == '') {
				echo "<div class='message error' style=\"display:block;\">";  echo JText::_('S5_CONTACTPOP_PUBLIC');  echo"</div>";
		}
		?>
	
		<?php if ($cp_pretext != "") { ?>	
			<?php echo $cp_pretext; ?>
			<br><br>
		<?php } ?>		
		<div class='message'>

		</div>
		<form name='contact' id='contact'>
			<div class="infoWrapper">	
				<div class="infoContent">
					<input type="text" name='name' id='nametitle' class='input-text long'  onblur="if (this.value=='') this.value='<?php echo $cp_nametext; ?>';" onfocus="if (this.value=='<?php echo $cp_nametext; ?>') this.value='';" value="<?php echo $cp_nametext; ?>"  />
				</div>
			</div>
			<div class="infoWrapper">
				<div class="infoContent">
						<input type="text" name='email' id='emailfield' class='input-text long'  onblur="if (this.value=='') this.value='<?php echo $cp_emailtext; ?>';" onfocus="if (this.value=='<?php echo $cp_emailtext; ?>') this.value='';" value="<?php echo $cp_emailtext; ?>"/>
				</div>
			</div>
			<div class="infoWrapper">
				<div class="infoContent">
					<textarea name='message' id='note' class='input-text long tall' onblur="if (this.value=='') this.value='<?php echo $cp_bodytext; ?>';" onfocus="if (this.value=='<?php echo $cp_bodytext; ?>') this.value='';" ><?php echo $cp_bodytext; ?></textarea>
				</div>
			</div>
			<div class="infoWrapper">
				<div class="infoContent">
						<?php if ($cp_gcaptcha == "yes") { echo recaptcha_get_html(PUB_KEY); }?>
				</div>
			</div>
			<div class="infoWrapper">
				<div class="infoTitle"></div>
				<div class="infoContent">
					<input type='submit' value='<?php echo $cp_sendmessagebutton; ?>' class="button"/>
					<input type="hidden" value="<?php echo $s5_encrypted2; ?>" name="cpreturnpk">
				</div>
			</div>
		</form>
		
	
	</div>
</div>

<div id="s5_inquirybox" onclick="s5_inquirybox_open()">
	<div id="s5_inquirybox_icon"></div>
	<div class="s5_inquirytitle"><?php echo $cp_haveaquestion; ?></div>
</div>


