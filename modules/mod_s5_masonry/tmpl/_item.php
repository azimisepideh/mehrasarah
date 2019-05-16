<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h');


?>


<div class="s5_masonwrapinner">

<?php $images  = json_decode($item->images);
if($images->image_intro && $params->get('image') == 1){ ?>
	<img src="<?php echo JURI::root();?><?php echo $images->image_intro; ?>" />
<?php } ?>



<div class="s5_mason_abi_wrap">
<?php if ($params->get('item_title')) : ?>

	<<?php echo $item_heading; ?> class="s5_masonry_articletitle <?php echo $params->get('moduleclass_sfx'); ?>">
	<?php if ($params->get('link_titles') && $item->link != '') : ?>
		<a href="<?php echo $item->link;?>">
			<?php echo $item->title;?></a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
	</<?php echo $item_heading; ?>>

<?php endif; ?>


<?php echo $item->beforeDisplayContent; ?>


<?php if ($params->get('introtext')) : ?>
<div class="s5_mason_it_wrap">
<?php echo $item->introtext; ?>
</div>
<?php endif; ?>

<?php if ($params->get('showhits')) : ?>
<div class="s5_mason_hits_wrap">
<?php echo JText::_( 'MOD_S5_MASONRY_FIELD_HITS' ); ?> <?php echo $item->hits; ?>
</div>
<?php endif; ?>


<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) :
	echo '<p class="readmore s5masonrymod"><a class="readmore" href="'.$item->link.'">'.$item->linkText.'</a></p>';
endif; ?>
</div>

</div>
