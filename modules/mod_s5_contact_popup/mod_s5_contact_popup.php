<?php
/**
* @title		Shape 5 Contact Popup
* @version		1.0
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



$cp_pretext		= $params->get( 'cp_pretext' );
$cp_haveaquestion		= $params->get( 'cp_haveaquestion' );
$cp_nametext		= $params->get( 'cp_nametext' );
$cp_emailtext		= $params->get( 'cp_emailtext' );
$cp_bodytext		= $params->get( 'cp_bodytext' );
$cp_sendmessagebutton	= $params->get( 'cp_sendmessagebutton' );
$cp_gcaptcha = $params->get( 'cp_gcaptcha' );
$cp_googlepublickey = $params->get( 'cp_googlepublickey' );
$cp_googleprivatekey = $params->get( 'cp_googleprivatekey' );


$cp_maincolor = $params->get( 'cp_maincolor' );
$cp_hovercolor = $params->get( 'cp_hovercolor' );


$cp_adminemail = $params->get( 'cp_adminemail' );
$session = JFactory::getSession();
$session->set('cp_adminemail', $cp_adminemail);


require(JModuleHelper::getLayoutPath('mod_s5_contact_popup')); ?>







