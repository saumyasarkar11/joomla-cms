<?php
/**
 * @package     J4xdemos.Module
 * @subpackage  mod_mydownmsg
 *
 * @copyright   Copyright (C) 2019 Clifford E Ford. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

// get the message option

require ModuleHelper::getLayoutPath('mod_cat', $params->get('layout', 'default'));
