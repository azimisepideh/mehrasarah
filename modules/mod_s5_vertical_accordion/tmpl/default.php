<?php
// no direct access
defined('_JEXEC') or die('Restricted access');$doc =& JFactory::getDocument();$siteurl = JURI::base();$doc->addCustomTag('<link href="'.$siteurl.'modules/mod_s5_vertical_accordion/css/s5_vertical_accordion.css" rel="stylesheet" type="text/css" media="screen" />');
?><?php if ($s5_va_pretext != "") { ?>			<div id="s5_va_pretext">					<?php echo $s5_va_pretext ?>			</div>	<?php } ?>	