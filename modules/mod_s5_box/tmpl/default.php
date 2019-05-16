<?php /**
 * @title		Shape 5 Box Module
 * @version		2.0
 * @package		Joomla
 * @website		http://www.shape5.com
 * @copyright	Copyright (C) 2009 Shape 5 LLC. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
$version = new JVersion();
if($version->RELEASE <= '2.5') {
  JHTML::_('behavior.mootools');
}
if($version->RELEASE >= '3.0') {
  JHtml::_('jquery.framework');
}
$url = JURI::root().'modules/mod_s5_box/';
$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
$is_ieany = "no";
if(preg_match("/msie/", $br)) {
  $is_ieany = "yes";
}
$document = JFactory::getDocument();
$document->addCustomTag('<style type="text/css">.s5boxhidden{display:none;} </style>');
$document->addCustomTag('<script language="javascript" type="text/javascript" >var s5_boxeffect = "'.$s5_boxeffect.'";</script>');
if($s5_jsversion == "mootools") {
  $document->addCustomTag('<script src="'.$url.'js/s5box.js" type="text/javascript"></script>');
}
if($s5_jsversion == "jquery") {
  $version = new JVersion();
  if($version->RELEASE <= '2.5') {
    $document->addCustomTag('<script src="'.$url.'js/jquery.min.js" type="text/javascript"></script>');
    $document->addCustomTag('<script src="'.$url.'js/jquery.no.conflict.js" type="text/javascript"></script>');
  }
  $document->addCustomTag('<script src="'.$url.'js/jquery.colorbox.js" type="text/javascript"></script>');
}

if($s5_jsversion == "css") {
 $document->addCustomTag('<link rel="stylesheet" href="'.$url.'css/magic.css" type="text/css" />');	
 $document->addCustomTag('<script src="'.$url.'js/jquery.no.conflict.js" type="text/javascript"></script>');
 $document->addCustomTag('<script src="'.$url.'js/s5box-css.js" type="text/javascript"></script>');	
}


$document->addCustomTag('<link rel="stylesheet" href="'.$url.'css/s5box.css" type="text/css" />');

if($is_ieany == "yes") {
  $document->addCustomTag('<link rel="stylesheet" href="'.$url.'css/s5box-ie.css" type="text/css" />');
}
if($s5_jsversion == "jquery") {
  $document->addCustomTag('<script type="text/javascript">
  jQuery.fn.colorbox.settings.initialWidth=200;
  jQuery.fn.colorbox.settings.initialHeight=200;
  jQuery.fn.colorbox.settings.transition="'.$s5_boxeffect.'";
  jQuery(document).ready(function(){
    jQuery(".s5box_register").colorbox({width:"'.$s5boxwidth12.'", inline:true, href:"#s5box_register"});
    jQuery(".s5box_login").colorbox({width:"'.$s5boxwidth11.'", inline:true, href:"#s5box_login"});
    jQuery(".s5box_one").colorbox({width:"'.$s5boxwidth1.'", inline:true, href:"#s5box_one"});
    jQuery(".s5box_two").colorbox({width:"'.$s5boxwidth2.'", inline:true, href:"#s5box_two"});
    jQuery(".s5box_three").colorbox({width:"'.$s5boxwidth3.'", inline:true, href:"#s5box_three"});
    jQuery(".s5box_four").colorbox({width:"'.$s5boxwidth4.'", inline:true, href:"#s5box_four"});
    jQuery(".s5box_five").colorbox({width:"'.$s5boxwidth5.'", inline:true, href:"#s5box_five"});
    jQuery(".s5box_six").colorbox({width:"'.$s5boxwidth6.'", inline:true, href:"#s5box_six"});
    jQuery(".s5box_seven").colorbox({width:"'.$s5boxwidth7.'", inline:true, href:"#s5box_seven"});
    jQuery(".s5box_eight").colorbox({width:"'.$s5boxwidth8.'", inline:true, href:"#s5box_eight"});
    jQuery(".s5box_nine").colorbox({width:"'.$s5boxwidth9.'", inline:true, href:"#s5box_nine"});
    jQuery(".s5box_ten").colorbox({width:"'.$s5boxwidth10.'", inline:true, href:"#s5box_ten"});
  });</script>');
}
if($s5_jsversion == "mootools") {
  $document->addCustomTag('<script type="text/javascript">
  $(window).addEvent("domready", function(){
    new S5Box(".s5box_register", {width:"'.$s5boxwidth12.'", inline:true, href:"#s5box_register"});
    new S5Box(".s5box_login", {width:"'.$s5boxwidth11.'", inline:true, href:"#s5box_login"});
    new S5Box(".s5box_one", {width:"'.$s5boxwidth1.'", inline:true, href:"#s5box_one"});
    new S5Box(".s5box_two", {width:"'.$s5boxwidth2.'", inline:true, href:"#s5box_two"});
    new S5Box(".s5box_three", {width:"'.$s5boxwidth3.'", inline:true, href:"#s5box_three"});
    new S5Box(".s5box_four", {width:"'.$s5boxwidth4.'", inline:true, href:"#s5box_four"});
    new S5Box(".s5box_five", {width:"'.$s5boxwidth5.'", inline:true, href:"#s5box_five"});
    new S5Box(".s5box_six", {width:"'.$s5boxwidth6.'", inline:true, href:"#s5box_six"});
    new S5Box(".s5box_seven", {width:"'.$s5boxwidth7.'", inline:true, href:"#s5box_seven"});
    new S5Box(".s5box_eight", {width:"'.$s5boxwidth8.'", inline:true, href:"#s5box_eight"});
    new S5Box(".s5box_nine", {width:"'.$s5boxwidth9.'", inline:true, href:"#s5box_nine"});
    new S5Box(".s5box_ten", {width:"'.$s5boxwidth10.'", inline:true, href:"#s5box_ten"});
  });</script>');
} 

if($s5_boxminwidth != '') {
  $document->addCustomTag('<style type="text/css">#colorbox{min-width:'.$s5_boxminwidth.'px !important;}</style>');
}

?>


<?php 
if($s5_boxeffect == "elastic") {$s5_boxeffect = "swashIn";}
if($s5_jsversion == "css") { ?>
<style>
.magictime {-webkit-animation-duration: <?php echo $s5_boxspeed; ?>ms;animation-duration: <?php echo $s5_boxspeed; ?>ms;}
#cboxOverlay<?php if($s5_boxeffect != "none") { ?>, #colorbox<?php } ?> {-webkit-transition:  all <?php echo $s5_boxspeed; ?>ms ease-in 0s;-moz-transition:  all <?php echo $s5_boxspeed; ?>ms ease-in 0s;-o-transition: all <?php echo $s5_boxspeed; ?>ms ease-in 0s;transition:  all <?php echo $s5_boxspeed; ?>ms ease-in 0s;}
#colorbox.s5-box-effect {width:<?php echo $s5boxwidth11; ?>;<?php if($s5_boxeffect == "fade" || $s5_boxeffect == "none") { ?>opacity: 1;<?php } ?>}
</style>

<script type="text/javascript">
jQuery(document).ready(function() {
		<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>	
		jQuery('.cboxClose').click(function() {	jQuery('#colorbox').removeClass('magictime <?php echo $s5_boxeffect;?>');	});
		jQuery('#cboxOverlay').click(function() { jQuery('#colorbox').removeClass('magictime <?php echo $s5_boxeffect;?>');	});
		<?php } ?>

		<?php if(JModuleHelper::getModules('login')) { ?>
		jQuery('.s5box_login').click(function() {		
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth11; ?>';						
			<?php if ($s5boxwidth11 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth11; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_login">' + document.getElementById("s5box_login").innerHTML + '</div>';						
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});		
		<?php } ?>
		<?php if(JModuleHelper::getModules('register')) { ?>	
		jQuery('.s5box_register').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth12; ?>';	
			<?php if ($s5boxwidth12 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth12; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_register">' + document.getElementById("s5box_register").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>
		<?php if(JModuleHelper::getModules('s5_box1')) { ?>	
		jQuery('.s5box_one').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth1; ?>';	
				<?php if ($s5boxwidth1 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth1; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_one">' + document.getElementById("s5box_one").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>
		<?php if(JModuleHelper::getModules('s5_box2')) { ?>	
		jQuery('.s5box_two').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth2; ?>';	
			<?php if ($s5boxwidth2 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth2; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_two">' + document.getElementById("s5box_two").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>
		<?php if(JModuleHelper::getModules('s5_box3')) { ?>	
		jQuery('.s5box_three').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth3; ?>';	
			<?php if ($s5boxwidth3 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth3; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_three">' + document.getElementById("s5box_three").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>
		<?php if(JModuleHelper::getModules('s5_box4')) { ?>	
		jQuery('.s5box_four').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth4; ?>';	
			<?php if ($s5boxwidth4 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth4; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_four">' + document.getElementById("s5box_four").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>
		<?php if(JModuleHelper::getModules('s5_box5')) { ?>	
		jQuery('.s5box_five').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth5; ?>';	
			<?php if ($s5boxwidth5 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth5; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_five">' + document.getElementById("s5box_five").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>	
		<?php if(JModuleHelper::getModules('s5_box6')) { ?>	
		jQuery('.s5box_six').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth6; ?>';	
			<?php if ($s5boxwidth6 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth6; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_six">' + document.getElementById("s5box_six").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>	
		<?php if(JModuleHelper::getModules('s5_box7')) { ?>	
		jQuery('.s5box_seven').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth7; ?>';	
			<?php if ($s5boxwidth7 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth7; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_seven">' + document.getElementById("s5box_seven").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>	
		<?php if(JModuleHelper::getModules('s5_box8')) { ?>	
		jQuery('.s5box_eight').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth8; ?>';	
			<?php if ($s5boxwidth8 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth8; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_eight">' + document.getElementById("s5box_eight").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>			
		<?php if(JModuleHelper::getModules('s5_box9')) { ?>	
		jQuery('.s5box_nine').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth9; ?>';	
			<?php if ($s5boxwidth9 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth9; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_nine">' + document.getElementById("s5box_nine").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>			
		<?php if(JModuleHelper::getModules('s5_box10')) { ?>	
		jQuery('.s5box_ten').click(function() {	
			<?php if($s5_boxeffect != "fade" || $s5_boxeffect != "none") { ?>jQuery('#colorbox').addClass('magictime <?php echo $s5_boxeffect;?>');	<?php } ?>
			document.getElementById("colorbox").style.width = '<?php echo $s5boxwidth10; ?>';	
			<?php if ($s5boxwidth10 >= 101) {?>	document.getElementById("cboxContent").style.width = '<?php echo $s5boxwidth10; ?>'; <?php } else { ?>
			document.getElementById("cboxContent").style.width = 100 + '%';	<?php } ?>
			document.getElementById("cboxLoadedContent").innerHTML = '<div id="s5box_ten">' + document.getElementById("s5box_ten").innerHTML + '</div>';	
			document.getElementById("colorbox").style.height = jQuery('#cboxLoadedContent').outerHeight() + "px";
		});	
		<?php } ?>		
});
</script>

<?php } ?>

<?php if(JModuleHelper::getModules('login')) { ?><div class="s5boxhidden"><div id="s5box_login">
<?php   $s5login_modules = &JModuleHelper::getModules('login');
  foreach($s5login_modules as $s5login) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5login, $_options);
  } ?></div></div><?php } ?>
  
<?php if(JModuleHelper::getModules('register')) { ?><div class="s5boxhidden"><div id="s5box_register">
<?php   $s5register_modules = &JModuleHelper::getModules('register');
  foreach($s5register_modules as $s5register) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5register, $_options);
  } ?></div></div><?php } ?>

<?php if(JModuleHelper::getModules('s5_box1')) { ?><div class="s5boxhidden"><div id="s5box_one">
<?php   $s5box1_modules = &JModuleHelper::getModules('s5_box1');
  foreach($s5box1_modules as $s5box1) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box1, $_options);
  } ?></div></div><?php } ?>
	
<?php if(JModuleHelper::getModules('s5_box2')) { ?><div class="s5boxhidden"><div id="s5box_two">
<?php   $s5box2_modules = &JModuleHelper::getModules('s5_box2');
  foreach($s5box2_modules as $s5box2) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box2, $_options);
  } ?></div></div><?php } ?>
	
<?php if(JModuleHelper::getModules('s5_box3')) { ?><div class="s5boxhidden"><div id="s5box_three">
<?php   $s5box3_modules = &JModuleHelper::getModules('s5_box3');
  foreach($s5box3_modules as $s5box3) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box3, $_options);
  } ?></div></div><?php } ?>
<?php if(JModuleHelper::getModules('s5_box4')) { ?><div class="s5boxhidden"><div id="s5box_four">
<?php   $s5box4_modules = &JModuleHelper::getModules('s5_box4');
  foreach($s5box4_modules as $s5box4) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box4, $_options);
  } ?></div></div><?php } ?>
<?php if(JModuleHelper::getModules('s5_box5')) { ?><div class="s5boxhidden"><div id="s5box_five">
<?php   $s5box5_modules = &JModuleHelper::getModules('s5_box5');
  foreach($s5box5_modules as $s5box5) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box5, $_options);
  } ?></div></div><?php } ?>
<?php if(JModuleHelper::getModules('s5_box6')) { ?><div class="s5boxhidden"><div id="s5box_six">
<?php   $s5box6_modules = &JModuleHelper::getModules('s5_box6');
  foreach($s5box6_modules as $s5box6) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box6, $_options);
  } ?></div></div><?php } ?>
<?php if(JModuleHelper::getModules('s5_box7')) { ?><div class="s5boxhidden"><div id="s5box_seven">
<?php   $s5box7_modules = &JModuleHelper::getModules('s5_box7');
  foreach($s5box7_modules as $s5box7) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box7, $_options);
  } ?></div></div><?php } ?>
<?php if(JModuleHelper::getModules('s5_box8')) { ?><div class="s5boxhidden"><div id="s5box_eight">
<?php   $s5box8_modules = &JModuleHelper::getModules('s5_box8');
  foreach($s5box8_modules as $s5box8) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box8, $_options);
  } ?></div></div><?php } ?>
<?php if(JModuleHelper::getModules('s5_box9')) { ?><div class="s5boxhidden"><div id="s5box_nine">
<?php   $s5box9_modules = &JModuleHelper::getModules('s5_box9');
  foreach($s5box9_modules as $s5box9) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box9, $_options);
  } ?></div></div><?php } ?>
<?php if(JModuleHelper::getModules('s5_box10')) { ?><div class="s5boxhidden"><div id="s5box_ten">
<?php   $s5box10_modules = &JModuleHelper::getModules('s5_box10');
  foreach($s5box10_modules as $s5box10) {
    $_options = array('style' => 'round_box');
    echo JModuleHelper::renderModule($s5box10, $_options);
  } ?></div></div><?php } ?>
