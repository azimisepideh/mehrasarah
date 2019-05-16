<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$uri = JFactory::getURI();
$absolute_url = $uri->toString();
$catUrl		  = $absolute_url;
$findme   = '?';
$pos = strpos($absolute_url, $findme);
// The !== operator can also be used.  Using != would not work as expected
// because the position of 'a' is 0. The statement (0 != false) evaluates
// to false.
if ($pos !== false) {
	$absolute_url .= '&ajaxload=true';
} else {
	$absolute_url .= '?ajaxload=true';
}
?>
<div id="s5_masonry_navwrap">

<?php if ($params->get('categoriesfend')) : ?>
	<ul class="s5_masonry_articles">
	<?php foreach($allcats as $oncat){ ?>
	<li>
	<?php
		$title = $oncat->title;
		if(strtolower($oncat->title) == 'all')
		{
			$title = JText::_(strtoupper($oncat->title).'_CATEGORIES');
		}
	?>
	<a onclick="CatArticle('<?php echo $oncat->id ?>');" href="javascript:void(0);" ><?php echo $title; ?></a>
	</li>
	<?php } ?>
	</ul>
<?php endif; ?>

<div style="clear:both"></div>
</div>



<form action="" method="post" name="s5masonmod" class="s5masonmod_form" id="s5masonmod<?php echo $module->id; ?>">
<div id="s5_masondisplay_container" class="js-masonry ajaxdiv<?php echo $moduleclass_sfx; ?>"   data-masonry-options='{ "columnWidth": 0, "itemSelector": ".item" }'>
<?php
if(JRequest::getVar('ajaxload'))
	ob_clean();
?>
<?php
$myclasscount = JRequest::getVar('count');
$loadmore = JRequest::getVar('loadmore');

$a = 1;
$counman = count($list) - $loadmore;
foreach ($list as $item) :
	if(JRequest::getVar('ajaxload') && (JRequest::getVar('loadmore') || JRequest::getVar('catid') !='')){
		if($a > $counman){
			$classadd = 'item newswrap';
		} elseif(JRequest::getVar('loadmore') =='' && JRequest::getVar('catid') !=''){
			$classadd = 'item newswrap';

		}else{
			$classadd = 'item';
		}
	}else{
		$classadd = 'item';
	}
	?>
	<div class="<?php echo $classadd; ?>">
	<?php require JModuleHelper::getLayoutPath('mod_s5_masonry', '_item'); ?>
	</div>

<?php $a++; endforeach; ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
  	Total = '<?php echo $articleCount; ?>';
  	limitstart = "<?php echo JRequest::getVar('limitstart'); ?>";
  	if(parseInt(limitstart) >= parseInt(Total)){
		jQuery('#s5_loadmoreId<?php echo $params->get("moduleclass_sfx"); ?>').css('display', 'none');
		document.getElementById('scrool').value = 1;
	}else{
		jQuery('#s5_loadmoreId<?php echo $params->get("moduleclass_sfx"); ?>').css('display', 'block');
		document.getElementById('scrool').value = 0;
	}
});
var s5_masondisplay_container = document.querySelector('#s5_masondisplay_container');

jQuery('img',s5_masondisplay_container).each(function(i,d){
        jQuery(d).load(function(){
            var msnry = new Masonry( s5_masondisplay_container, {
          // options
          columnWidth: 0,
          itemSelector: '.item'
            });
        });
});

</script>
<?php
if(JRequest::getVar('ajaxload')){
	ob_get_contents();exit;
}
?>



</div>
<div style="clear:both;"></div>
<div id="s5_masonload_wrap"></div>
<input type="hidden" name="count" id="count" value="<?php echo $params->get('count'); ?>">
<input type="hidden" name="catid" id="catid" value="0">
<input type="hidden" name="scrool" id="scrool" value="0">
<input type="hidden" name="limitstart" id="limitstart" value="<?php echo $params->get('limitstart', $params->get('load_more_articles')); ?>">

<?php if($params->get('showhide') == 1){ ?>
<div class="s5_mason_loadbutton" id="s5_loadmoreId<?php echo $params->get("moduleclass_sfx"); ?>">
<input type="button" value="<?php echo JText::_('LOAD_MORE'); ?>" id="s5_mason_load_more" name="s5_mason_load_more" onclick="News_ajaxloadmore();">
</div>
<?php } ?>

</form>

<?php if($params->get('showhide') == 1){ ?>
<script>
	function News_ajaxloadmore(){
		cat = document.getElementById('catid').value;
		var defaultlimit = '<?php echo $params->get("load_more_articles"); ?>';
		var firstlimit = '<?php echo $params->get("count"); ?>';
		if(document.getElementById('limitstart').value == defaultlimit){
			var limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(firstlimit) ;
		}else{
			var limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(defaultlimit) ;
		}
		document.getElementById('limitstart').value = limitstart;
		var ajaxurl = '<?php echo JRoute::_($absolute_url); ?>';
		jQuery('#s5_masonload_wrap').append('<div id="s5_masonload_loading"></div>');
		jQuery('#s5_masonload_loading').html('<div id="s5_loading_inner"></div>');
		//jQuery('#loading').html('<img src="modules/mod_s5_news_display_2/images/loding.gif" >');
		jQuery.ajax({
			url: ajaxurl+"&limitstart="+limitstart+"&catid="+cat+"&count="+firstlimit+"&loadmore="+defaultlimit,
			success: function(data) {
				jQuery('#s5_masonload_loading').remove();

				 jQuery( ".ajaxdiv<?php echo $params->get('moduleclass_sfx'); ?>").html(data );
			 }
		 });
	}
</script>
<?php } ?>
<?php if($params->get('showhide') == 2){ ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
  		var windowHeight = jQuery(window).height();
  		var currentDocHeight = jQuery(document).height();
		var defaultlimit = '<?php echo $params->get("load_more_articles"); ?>';
		var firstlimit = '<?php echo $params->get("count"); ?>';
		var inprogress = 0;
		jQuery(window).scroll(function(event){
			if  ((jQuery(window).scrollTop() >= (jQuery(document).height() - windowHeight - 400 )) && inprogress == 0 && document.getElementById('scrool').value == 0){ //jQuery
  				inprogress = 1;
				if(document.getElementById('limitstart').value == defaultlimit){
						limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(firstlimit) ;
				}else{
						limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(defaultlimit) ;
				}
				document.getElementById('limitstart').value = limitstart;
				cat = document.getElementById('catid').value;
				jQuery('#s5_masonload_wrap').append('<div id="s5_masonload_loading"></div>');
				jQuery('#s5_masonload_loading').html('<div id="s5_loading_inner"></div>');
				var ajaxurl = '<?php echo JRoute::_($absolute_url); ?>';
				jQuery.ajax({
					url: ajaxurl+"&limitstart="+limitstart+"&catid="+cat+"&count="+firstlimit+"&loadmore="+defaultlimit,
					async : false,
					success: function(data) {
					 	inprogress = 0;
					 	jQuery('#s5_masonload_loading').remove();
						 jQuery( ".ajaxdiv<?php echo $params->get('moduleclass_sfx'); ?>").html(data );
						 return false;
					 }
				 });
	      	}
	    });
});
</script>
<?php } ?>
<script>
	function CatArticle(cat){
		document.getElementById('catid').value = cat;
		var limitstart = '<?php echo $params->get("count"); ?>';
		document.getElementById('limitstart').value = limitstart;
		var ajaxurl = '<?php echo JRoute::_($absolute_url); ?>';
		jQuery('#s5_masonload_wrap').append('<div id="s5_masonload_loading"></div>');
		jQuery('#s5_masonload_loading').html('<div id="s5_loading_inner"></div>');
		jQuery.ajax({
			url: ajaxurl+"&limitstart="+limitstart+"&catid="+cat+"&count="+limitstart,
			success: function(data) {
				jQuery('#s5_masonload_loading').remove();
				jQuery( ".ajaxdiv<?php echo $params->get('moduleclass_sfx'); ?>").html(data );
				}
		 });
	}
</script>
