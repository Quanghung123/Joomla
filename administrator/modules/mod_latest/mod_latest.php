<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_latest
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependencies.
require_once __DIR__ . '/helper.php';

$list = ModLatestHelper::getList($params);

if ($params->get('automatic_title', 0))
{
	$module->title = ModLatestHelper::getTitle($params);
}

require JModuleHelper::getLayoutPath('mod_latest', $params->get('layout', 'default'));
