<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once JPATH_SITE.'/components/com_content/helpers/route.php';

JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_content/models', 'ContentModel');

abstract class mods5MasonryHelper
{
	public static function getList(&$params)
	{
		$app	= JFactory::getApplication();
		$db		= JFactory::getDbo();
		// Get an instance of the generic articles model
		$model = JModelLegacy::getInstance('Articles', 'ContentModel', array('ignore_request' => true));
		// Set application parameters in model
		$appParams = JFactory::getApplication()->getParams();
		$model->setState('params', $appParams);
		// Set the filters based on the module params
		$model->setState('list.start', (int) $params->get('limitstart', 0));
		if(JRequest::getVar('ajaxload')){
			$endlimit = JRequest::getVar('limitstart');
		}else{
			$endlimit = $params->get('count', 5);
		}
		$model->setState('list.limit', (int) $endlimit);
		$model->setState('filter.published', 1);
		$model->setState('list.select', 'a.fulltext, a.id, a.title, a.alias, a.introtext, a.state, a.catid, a.created, a.created_by, a.created_by_alias,' .
			' a.modified, a.modified_by, a.publish_up, a.publish_down, a.images, a.urls, a.attribs, a.metadata, a.metakey, a.metadesc, a.access,' .
			' a.hits, a.featured, a.language' );
		// Access filter
		$access = !JComponentHelper::getParams('com_content')->get('show_noauth');
		$authorised = JAccess::getAuthorisedViewLevels(JFactory::getUser()->get('id'));
		$model->setState('filter.access', $access);
		// Category filter
		if(JRequest::getVar('catid') > 0 && JRequest::getVar('ajaxload')){
			$cat = JRequest::getVar('catid');
		}else if(JRequest::getVar('catid') == 0){
			$cat = $params->get('catid', array());
		}else{
			$cat = $params->get('catid', array());
		}
		$model->setState('filter.category_id', $cat);
		// Filter by language
		$model->setState('filter.language', $app->getLanguageFilter());

		// Set ordering
		$ordering = $params->get('ordering', 'a.publish_up');
		$model->setState('list.ordering', $ordering);
		if (trim($ordering) == 'rand()') {
			$model->setState('list.direction', '');
		} else {
			$model->setState('list.direction', 'DESC');
		}

		//	Retrieve Content
		$items = $model->getItems();

		foreach ($items as &$item) {
			$item->readmore = strlen(trim($item->fulltext));
			$item->slug = $item->id.':'.$item->alias;
			$item->catslug = $item->catid.':'.$item->category_alias;

			if ($access || in_array($item->access, $authorised))
			{
				// We know that user has the privilege to view the article
				$item->link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language));
				$item->linkText = JText::_('MOD_ARTICLES_NEWS_READMORE');
			}
			else {
				$item->link = JRoute::_('index.php?option=com_users&view=login');
				$item->linkText = JText::_('MOD_ARTICLES_NEWS_READMORE_REGISTER');
			}

			$item->introtext = JHtml::_('content.prepare', $item->introtext, '', 'mod_articles_news.content');

			//new
			if (!$params->get('image')) {
				$item->introtext = preg_replace('/<img[^>]*>/', '', $item->introtext);
			}

			$results = $app->triggerEvent('onContentAfterDisplay', array('com_content.article', &$item, &$params, 1));
			$item->afterDisplayTitle = trim(implode("\n", $results));

			$results = $app->triggerEvent('onContentBeforeDisplay', array('com_content.article', &$item, &$params, 1));
			$item->beforeDisplayContent = trim(implode("\n", $results));
		}


		return $items;
	}
	// Get count of List Article
	public static function getListCount(&$params)
	{
		$app	= JFactory::getApplication();
		$db		= JFactory::getDbo();
		// Get an instance of the generic articles model
		$model = JModelLegacy::getInstance('Articles', 'ContentModel', array('ignore_request' => true));
		// Set application parameters in model
		$appParams = JFactory::getApplication()->getParams();
		$model->setState('params', $appParams);
		// Set the filters based on the module params
		/*$model->setState('list.start', (int) $params->get('limitstart', 0));
		if(JRequest::getVar('ajaxload')){
			$endlimit = JRequest::getVar('limitstart');
		}else{
			$endlimit = $params->get('count', 5);
		}
		$model->setState('list.limit', (int) $endlimit);*/
		$model->setState('filter.published', 1);
		$model->setState('list.select', 'a.fulltext, a.id, a.title, a.alias, a.introtext, a.state, a.catid, a.created, a.created_by, a.created_by_alias,' .
			' a.modified, a.modified_by, a.publish_up, a.publish_down, a.images, a.urls, a.attribs, a.metadata, a.metakey, a.metadesc, a.access,' .
			' a.hits, a.featured, a.language' );
		// Access filter
		$access = !JComponentHelper::getParams('com_content')->get('show_noauth');
		$authorised = JAccess::getAuthorisedViewLevels(JFactory::getUser()->get('id'));
		$model->setState('filter.access', $access);
		// Category filter
		if(JRequest::getVar('catid') > 0 && JRequest::getVar('ajaxload')){
			$cat = JRequest::getVar('catid');
		}else if(JRequest::getVar('catid') == 0){
			$cat = $params->get('catid', array());
		}else{
			$cat = $params->get('catid', array());
		}

		$model->setState('filter.category_id', $cat);
		// Filter by language
		$model->setState('filter.language', $app->getLanguageFilter());

		// Set ordering
		$ordering = $params->get('ordering', 'a.publish_up');
		$model->setState('list.ordering', $ordering);
		if (trim($ordering) == 'rand()') {
			$model->setState('list.direction', '');
		} else {
			$model->setState('list.direction', 'DESC');
		}

		//	Retrieve Content
		$items = $model->getItems();

		foreach ($items as &$item) {
			$item->readmore = strlen(trim($item->fulltext));
			$item->slug = $item->id.':'.$item->alias;
			$item->catslug = $item->catid.':'.$item->category_alias;

			if ($access || in_array($item->access, $authorised))
			{
				// We know that user has the privilege to view the article
				$item->link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language));
				$item->linkText = JText::_('MOD_ARTICLES_NEWS_READMORE');
			}
			else {
				$item->link = JRoute::_('index.php?option=com_users&view=login');
				$item->linkText = JText::_('MOD_ARTICLES_NEWS_READMORE_REGISTER');
			}

			$item->introtext = JHtml::_('content.prepare', $item->introtext, '', 'mod_articles_news.content');

			//new
			if (!$params->get('image')) {
				$item->introtext = preg_replace('/<img[^>]*>/', '', $item->introtext);
			}

			$results = $app->triggerEvent('onContentAfterDisplay', array('com_content.article', &$item, &$params, 1));
			$item->afterDisplayTitle = trim(implode("\n", $results));

			$results = $app->triggerEvent('onContentBeforeDisplay', array('com_content.article', &$item, &$params, 1));
			$item->beforeDisplayContent = trim(implode("\n", $results));
		}


		return count($items);
	}
	// Get Category List
	public function getCategory($params){
		$allcat = $params->get('catid',0);
		$newcatarray = array();
		foreach ($allcat as $one)
		{
			if($one == ''){
				$onealls        = new StdClass;
				$onealls->id    = 0;
				$onealls->title = 'All';
				$newcatarray[]  = $onealls;
			}else{
				// Initialiase variables.
				$db    = JFactory::getDbo();
				// $db    = $this->getDbo();
				$query = $db->getQuery(true);
				// Create the base select statement.
				$query->select('a.id');
				$query->select('a.title')
				->from($db->quoteName('#__categories') . ' AS a')
				->where($db->quoteName('a.id') . ' = ' . $one);
				// Set the query and load the result.
				$db->setQuery($query);
				$result        = $db->loadObject();
				$newcatarray[] = $result;
				//$newcatarray[] = $result->id;

			}
		}
		return $newcatarray;
	}
}
